var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        "resources/assets/css/admin/pace-theme-flash.css",
        //"resources/assets/css/admin/bootstrap.min.css",
        //"resources/assets/css/admin/bootstrap-theme.min.css",
        "resources/assets/css/admin/font-awesome.css",
        "resources/assets/css/admin/animate.min.css",
        "resources/assets/css/admin/perfect-scrollbar.css",
        "resources/assets/css/admin/style.css",
        "resources/assets/css/admin/responsive.css",
        "resources/assets/css/admin/jquery.dataTables.min.css",
        "resources/assets/css/admin/dataTables.tableTools.min.css",
        "resources/assets/css/admin/dataTables.responsive.css",
        "resources/assets/css/admin/dataTables.bootstrap.css"
    ], 'public/css/admin/admin.css');
});


elixir(function(mix) {
    mix.scripts([
        //"resources/assets/js/admin/jquery.easing.min.js",
        //"resources/assets/js/admin/bootstrap.min.js",
        "resources/assets/js/admin/pace.min.js",
        "resources/assets/js/admin/perfect-scrollbar.min.js",
        "resources/assets/js/admin/viewportchecker.js",
        "resources/assets/js/admin/scripts.js",
        "resources/assets/js/admin/jquery.sparkline.min.js",
        "resources/assets/js/admin/chart-sparkline.js",
        "resources/assets/js/admin/jquery.dataTables.min.js",
        "resources/assets/js/admin/dataTables.tableTools.min.js",
        "resources/assets/js/admin/dataTables.responsive.min.js",
        "resources/assets/js/admin/dataTables.bootstrap.js"
    ]);
});



