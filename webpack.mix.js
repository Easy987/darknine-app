const fs = require("fs");
const mix = require('laravel-mix');

mix.options({ processCssUrls: false });

fs.readdirSync('resources/js/').forEach(fileName => {
    if(fileName.indexOf('.js') > -1) {
        mix.js(`resources/js/${fileName}`, 'public/assets/js');
    }
});

mix.css('resources/css/animate.css', 'public/assets/css');
mix.css('resources/css/bootstrap.min.css', 'public/assets/css');
mix.css('resources/css/flaticon.css', 'public/assets/css');
mix.css('resources/css/font-awesome.css', 'public/assets/css');
mix.css('resources/css/fonts.css', 'public/assets/css');
mix.css('resources/css/magnific-popup.css', 'public/assets/css');
mix.css('resources/css/owl.carousel.css', 'public/assets/css');
mix.css('resources/css/owl.theme.default.css', 'public/assets/css');
mix.css('resources/css/player.css', 'public/assets/css');
mix.css('resources/css/reset.css', 'public/assets/css');
mix.css('resources/css/responsive.css', 'public/assets/css');
mix.css('resources/css/style.css', 'public/assets/css');

