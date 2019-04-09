const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public_html/js')
    .js('resources/js/script.js', 'public_html/js')
    .js('resources/js/html5shiv.min.js', 'public_html/js')
    .js('resources/js/pointer-events.min.js', 'public_html/js')
    .styles(['resources/css/fonts.css',
    'resources/css/style.css',
        'resources/css/bootstrap.css'
    ], 'public/css/styles.css')
   .sass('resources/sass/app.scss', 'public_html/css');
