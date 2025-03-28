const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/script')
   .js('resources/js/map.js', 'public/script')
   .postCss('resources/css/app.css', 'public/css');
