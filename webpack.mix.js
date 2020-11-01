const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */





mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

    mix.scripts([
        'public/js/app.js',
        'public/assets/js/accordions.js',
        'public/assets/js/custom.js',
        'public/assets/js/isotope.js',
        'public/assets/js/owl.js',
        'public/assets/js/slick.js',

        ], 'public/js/main.js');

    mix.styles([
        'public/css/app.css',
        'public/assets/css/flex-slider.css',
        'public/assets/css/owl.css',
        'public/assets/css/fontawesome.css',
        'public/assets/css/template.css',
        ], 'public/css/main.css');
