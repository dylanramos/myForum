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
    .copy('node_modules/mdbootstrap', 'public/assets/mdbootstrap', false)
    .copy('node_modules/@fortawesome', 'public/assets/@fortawesome', false)
    .js('resources/views/references/referenceslist.js', 'public/js/referenceslist.js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
