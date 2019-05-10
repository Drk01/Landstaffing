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

mix.copyDirectory('node_modules/gentelella', 'public/Panel/assets');


mix.react('resources/js/app.js', 'public')
   .sass('resources/sass/app.scss', 'public/css');

   mix.browserSync('127.0.0.1:8000');
