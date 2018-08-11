let mix = require('laravel-mix');

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

mix.js(['resources/assets/js/jquery-3.3.1.min.js', 'resources/assets/js/main.js'], 'public/js/app.js');
mix.styles(['resources/assets/css/main.css','resources/assets/css/responsive.css','resources/assets/css/reset.css'],'public/css/app.css');
