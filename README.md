
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
![Screen shot 1 (1)](https://res.cloudinary.com/dwtu2bfi0/image/upload/v1712150638/Screenshot_from_2024-04-03_16-00-04_kadd1m.png)

![Screen shot 2 (2)](https://res.cloudinary.com/dwtu2bfi0/image/upload/v1712150638/Screenshot_from_2024-04-03_15-59-54_kugrlv.png)

![Screen shot 3 (3)](https://res.cloudinary.com/dwtu2bfi0/image/upload/v1712150637/Screenshot_from_2024-04-03_16-00-34_tu90yj.png)

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

