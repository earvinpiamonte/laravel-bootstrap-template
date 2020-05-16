/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel application. By default, we are compiling the Sass
| file for the application as well as bundling up all the JS files.
|
*/

const mix = require("laravel-mix");

const ENV = process.env;

mix.browserSync({
    proxy: ENV.MIX_SENTRY_DSN_PUBLIC,
    open: false,
    files: [
        "app/**/*.php",
        "resources/views/**/*.php",
        "public/js/**/*.js",
        "public/css/**/*.css"
    ],
    watchOptions: {
        usePolling: true
    }
})
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .disableNotifications();

if (mix.inProduction()) {
    mix.version();
}
