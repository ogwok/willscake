
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
![Duolingo thumb (1)](https://github.com/AntonioErdeljac/next14-duolingo-clone/assets/23248726/d58e4b55-bb09-456f-978e-f5f31e81b870)

## Admin Functionality:
- CRUD Operations: Create, read, update, and delete products.
### Note
- Admin Dashboard Url is '/admin'

## Client Functionality:
- Product Viewing: Clients can view available products.
- Shopping Cart: Clients can add products to their cart.


## TODO
- Checkout System: Implement a checkout functionality.
- Payment Integration: Enable payment processing using Stripe.
- User Authentication: Set up user authentication for secure access.

## License

MIT

