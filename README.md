
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
![Alt text](https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_1280.jpg)
![Alt text](https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_1280.jpg)
![Alt text](https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_1280.jpg)

## Admin Functionality:
- CRUD Operations: Create, read, update, and delete products.

## Client Functionality:
- Product Viewing: Clients can view available products.
- Shopping Cart: Clients can add products to their cart.


## TODO
- Checkout System: Implement a checkout functionality.
- Payment Integration: Enable payment processing using Stripe.
- User Authentication: Set up user authentication for secure access.

## License

MIT

