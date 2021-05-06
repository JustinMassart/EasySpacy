const mix = require('laravel-mix');
require('laravel-mix-pluton');

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

mix.pluton('wp-content/themes/EasySpacy/resources/js/parts')
.js('wp-content/themes/EasySpacy/resources/js/app.js', 'wp-content/themes/EasySpacy/public/js')
.sass('wp-content/themes/EasySpacy/resources/sass/theme.scss', 'wp-content/themes/EasySpacy/public/css')
.browserSync({
  proxy: 'localhost:8888/EasySpacy/',
  notify: false
});