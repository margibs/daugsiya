var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
    .styles([
        "css/reset.min.css",
        "css/ezslots.css",
        "css/jquery.m.flip.css",
        "css/master.css",
        "css/960_24_col.css"
    ], 'public/css', 'public')
    .styles([
        "css/reset.min.css",
        "css/master.css",
        "css/960_24_col.css",
        "css/clubhouse.css",
        "css/animate.css"
    ], 'public/css/clubhouse-all.css', 'public')
    .scripts([
        'js/ezslots.js',
        'js/jquery.unveil.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.leanModal.min.js',
        'js/jquery.lazyimage.js',
        'js/jquery.sharrre.min.js',
        'js/jquery.slimscroll.min.js',
        'js/interact.min.js',
        'js/jquery.bxslider.min.js',
        'js/sockets.io.js',
        'js/home.js',
        'js/gameSearch.js'
     ], 'public/js/custom/main.js','public')
    // .version("public/js/custom/main.js");
    .version(['public/css/all.css','public/js/custom/main.js','public/css/clubhouse-all.css']);
});
