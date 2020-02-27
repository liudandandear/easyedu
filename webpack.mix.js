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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copyDirectory('resources/assets/theadmin/js', 'public/js')
    .copyDirectory('resources/assets/theadmin/css', 'public/css')
    .copyDirectory('resources/assets/theadmin/fonts', 'public/fonts')
    .copyDirectory('resources/assets/theadmin/image', 'public/img')
    .copyDirectory('resources/assets/theadmin/plugins/chartjs', 'public/vendor/chartjs')
    .copyDirectory('resources/assets/theadmin/plugins/ionicons', 'public/vendor/ionicons')
    .copyDirectory('resources/assets/theadmin/plugins/moment', 'public/vendor/moment')
    .copyDirectory('resources/assets/theadmin/plugins/jquery-minicolors', 'public/vendor/jquery-minicolors')
    .copyDirectory('resources/assets/theadmin/plugins/bootstrap-select', 'public/vendor/bootstrap-select')
    .copyDirectory('resources/assets/sweetalert2', 'public/vendor/sweetalert2')
;
