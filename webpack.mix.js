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

 /*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

    mix.sass('resources/sass/app.scss', 'public/css')
*/


//mix.sass('resources/sass/bootstrap.scss', 'public/css/bootstrap').sourceMaps();

mix.sass('node_modules/bootstrap-icons/font/bootstrap-icons.scss', 'public/css/bootstrap/')
    .version()
    .sourceMaps();

//mix.css('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css/bootstrap/bootstrap.css').sourceMaps();

//mix.postCss('resources/css/sidebars.css', 'public/css').sourceMaps();

mix
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'resources/css/sidebars.css'
        ], 'public/css/bootstrap/bootstrap.css')
        .version()
        .sourceMaps();

mix
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap/bootstrap.js')
    .version()
    .sourceMaps();
/*
mix
    .map('node_modules/bootstrap/dist/js/bootstrap.bundle.js.map', 'public/js/bootstrap.bundle.js.map')
    .sourceMaps();
*/