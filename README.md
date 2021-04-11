# Laravel + Bootstrap project starter template

[Laravel](https://laravel.com/) with [Bootstrap](https://getbootstrap.com/) project template.

It's basically just a Laravel site configured to use Bootstrap as the front-end framework.

## Contents

This Laravel template includes:

-   [Laravel](https://laravel.com/) version 8.x
-   [Bootsrap](https://getbootstrap.com/) version 4.5.x
-   [Font Awesome](https://fontawesome.com/) version 5.13.x
-   Pre-compiled Sass
-   Pre-configured `webpack.mix.js` (+ versioning and [Browsersync](https://www.browsersync.io/))
-   [Laravel Homestead](https://laravel.com/docs/8.x/homestead) for local development environment

## Clone & install packages

```
git clone https://github.com/earvinpiamonte/laravel-bootstrap-template.git
```

```
cd laravel-bootstrap-template/
```

```
composer update
```

## Development setup

There are 2 ways to set this template for local development. Choose any of the following:

-   [Using Laravel Homestead](#using-laravel-homestead) (recommended)
-   [Using build-in development server](#using-built-in-development-server)

### Using Laravel Homestead

If you are going to use Laravel Homestead, execute the following:

```
php vendor/bin/homestead make
```

This will create `Homestead.yaml` file for the project.

#### Update `Homestead.yaml`

Change the sites' `map` to `laravel-bootstrap-template.local`.

```
sites:
    - map: laravel-bootstrap-template.local
      to: /home/vagrant/code/public
```

#### Fire up vagrant box

```
vagrant up
```

Provision, because some things just stop working for some reason.

```
vagrant reload --provision
```

#### Connect to the box via SSH

```
vagrant ssh
```

```
cd code/
```

Generate key:

```
cp .env.example .env
```

```
art key:generate
```

#### Compiling assets

Install npm packages:

```
npm i
```

For compiling assets such as the CSS and JS files, you can choose to `npm run dev`, `npm run prod` or `npm run serve`.

If you are about to run this project template for the first time, you need to run `npm run dev` to build assets on `public/` directory.

Compile assets.

```
npm run dev
```

Compile assets for production.

```
npm run prod
```

Using Browsersync.

```
npm run serve
```

Open your browser and enter `http://laravel-bootstrap-template.local:3000`. The files configured on `webpack.mix.js` are now on watch. Please take note of the port and change if needed.

### Using built-in development server

If you don't use Laravel Homestead, you can following the next steps in using built-in development server.

Update `.env.example` with your preference and set `USE_HOMESTEAD` to `false`.

Make a `.env` file by copying the `.env.example`.

```
cp .env.example .env
```

Generate key:

```
php artisan key:generate
```

After setting up `.env` file, proceed to install the npm packages and compile the assets as stated on the [Compiling assets](#compiling-assets) section.

---

## Support

Found any issue or have some recommendation? Submit a ticket at [https://github.com/earvinpiamonte/laravel-bootstrap-template/issues](https://github.com/earvinpiamonte/laravel-bootstrap-template/issues).

## Maintainer

GitHub - https://github.com/earvinpiamonte

GitHub Gist - https://gist.github.com/earvinpiamonte

CodePen - https://codepen.io/earvinpiamonte

LinkedIn - https://www.linkedin.com/in/earvinpiamonte

Website - https://www.earvinpiamonte.com
