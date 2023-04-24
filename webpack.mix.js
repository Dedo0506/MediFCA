const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.scss', 'public/css',[
      require('tailwindcss'),
   ]);