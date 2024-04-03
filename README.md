
## Installation
```sh
git clone https://github.com/ogwok/willscake.git
composer install
php bin/console doctrine:database:create
php bin/console make:migration
php bin/console doctrine:migrations:migrate
symfony serve 
// --
npm install
npm run watch

```
## UI
![Duolingo thumb (1)](https://res.cloudinary.com/dwtu2bfi0/image/upload/v1711625410/q5uh4o8wydhodbybu88g.jpg)

## Admin Functionality:
- CRUD Operations: Create, read, update, and delete products.

## Note
- Admin Dashboard Url is **/admin**

## Client Functionality:
- Product Viewing: Clients can view available products.
- Shopping Cart: Clients can add products to their cart.


## TODO
- Checkout System: Implement a checkout functionality.
- Payment Integration: Enable payment processing using Stripe.
- User Authentication: Set up user authentication for secure access.

## License

MIT

