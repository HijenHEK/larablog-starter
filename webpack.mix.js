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
<<<<<<< HEAD
        .sass('resources/sass/app.scss', 'public/css');




// mix.scripts([
//     'public/js/app.js',
//     'public/js/accordions.js',
//     'public/js/custom.js',
//     'public/js/isotope.js',
//     'public/js/owl.js',
//     'public/js/slick.js',

//     ], 'public/js/main.js');

// mix.styles([
//     'public/css/app.css',
//     'public/css/flex-slider.css',
//     'public/css/owl.css',
//     'public/css/fontawesome.css',
//     'public/css/template.css',
//     ], 'public/css/main.css');
=======
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> parent of 9633caf... mix
