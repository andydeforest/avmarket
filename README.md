# ![AvMarket](public/images/logo.png)

AvMarket is an aviation-based market platform currently under development for buying and selling aircraft, aircraft parts, avionics, and other aviation goods. A demo of the current build can be found here: [http://avmarket.herokuapp.com/](http://avmarket.herokuapp.com/). Dummy data for single-engine piston aircraft is included.

## Getting started

### Install the web application

This project is built on top of the Laravel PHP framework. It's requirements can be found [here](https://laravel.com/docs/5.7/installation#server-requirements).

``` bash
git clone https://github.com/andydeforest/avmarket.git && cd avmarket
composer install
```

Once the composer dependencies are installed, you'll want to install the front-end dependencies

``` bash
npm install && npm run dev
```

Next, you need to make a copy of the `.env.example` file and rename it to `.env` inside your project root and update the appropriate database variables.

Run the following command to seed airport data

```
php artisan migrate:refresh --seed
```

Then start your server:

```
php artisan serve
```

The project should now be running!

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details