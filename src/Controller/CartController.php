<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    #[Route('/addToCart/{id}', name: 'addToCart')]
    public function index(SessionInterface $session,Product $product, Request $request): Response
    {
        $this->addFlash(
            'success',
            'Product added to cart!'
        );
        $quantity = $request->get("quantity");
        $data = $session->get("cart",[]);
       
        if(!empty($data[$product->getId()]) && $data[$product->getId()] > 0){
            $data[$product->getId()] = $quantity;
        }
        else{
            $data[$product->getId()] = $quantity;
            
        }
        $session->set("cart", $data);
        
        $referer = $request->headers->get('referer');
        return $this->redirect($referer);

        
    }

    #[Route('/cart', name: 'cart')]
    public function cart(ProductRepository $productRepo, SessionInterface $session, Request $request): Response
    {
        $data = $session->get("cart",[]);
        $products=[];
        foreach($data as $key => $value){
            $product =  $productRepo->find($key);
            $products[] = $product; 
            $product->setQuantity($value);

        }

        return $this->render('cart/show.html.twig', [
            "products" => $products
        ]);
    }

    #[Route('/removeToCart/{id}', name: 'removeToCart')]
    public function removeToCart(SessionInterface $session,Product $product, Request $request, int $id=0): Response
    {
        $data = $session->get("cart",[]);
        unset($data[$product->getId()]);
        $session->set("cart", $data);

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);        
    }

    #[Route('/empty', name: 'empty')]
    public function empty(SessionInterface $session): Response
    {
        $data = $session->get("cart",[]);
        $session->set("cart", []);

         
        return $this->redirectToRoute('app_product_index');
    }

    #[Route('/quantity', name: 'quantity')]
    public function panier(SessionInterface $session):Response 
    {
        $quantityTotal = 0;
        $cart = $session->get('cart',[]);


        foreach($cart as $id => $quantity){
            $quantityTotal += $quantity;
        }

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($quantityTotal,JSON_PRETTY_PRINT));
        
        return $response;
    }




     
}