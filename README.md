# Laravel + Bootstrap project template

[Laravel](https://laravel.com/) with [Bootstrap](https://getbootstrap.com/) project template.

## Contents

This project includes the following:

-   [Laravel](https://laravel.com/) version 7.x
-   [Bootsrap](https://getbootstrap.com/) version 4.5.x
-   [Laravel Homestead](https://laravel.com/docs/7.x/homestead)
-   [Browsersync](https://www.browsersync.io/)
-   Pre-configured `webpack.mix.js` (+ versioning and Browsersync)

## Clone & install packages

```
git clone https://github.com/earvinpiamonte/laravel-7-bootstrap-template.git
```

```
cd laravel-7-bootstrap-template/
```

```
composer update
```

## Development setup

For the default setup, I recommend using [Laravel Homestead](https://laravel.com/docs/7.x/homestead).

### Development using Laravel Homestead

If you are going to use Laravel Homestead, execute the following:

```
php vendor/bin/homestead make
```

This will create `Homestead.yaml` file for the project.

#### Update `Homestead.yaml`

Change the sites' `map` to `laravel-7-bootstrap-template.local`.

```
sites:
    - map: laravel-7-bootstrap-template.local
      to: /home/vagrant/code/public
```

#### Fire vagrant box

```
vagrant up
```

For some reason, you also need to reload and provision.

```
vagrant reload --provision
```

#### Connect to the box via SSH and work

```
vagrant ssh
```

#### Compiling assets

Navigate to the directory to `~/code/` and install npm packages:

```
cd code/
```

```
npm install
```

Run all Mix tasks.

```
npm run dev
```

Run all Mix tasks and compile to minified output.

```
npm run prod
```

Using Browsersync (my favorite).

```
npm run serve
```

Open your browser and enter `http://laravel-7-bootstrap-template.local:3000`. The files are now on watch. Take note of the port!

### Development using your preferred server

documentation still in the works!

---

## Contact

Found any issue or have some recommendation? Email me at [earvin.piamonte@gmail.com](mailto:earvin.piamonte@gmail.com).

Also, check out my [website](https://earvinpiamonte.com). It's built using React, Gatsby as the static site generator and deployed on Netlify.

### Follow me:

GitHub - https://github.com/earvinpiamonte

GitHub Gist - https://gist.github.com/earvinpiamonte

CodePen - https://codepen.io/earvinpiamonte

Twitter - https://twitter.com/earvinpiamonte

LinkedIn - https://www.linkedin.com/in/earvinpiamonte

Website & Résumé - https://www.earvinpiamonte.com
