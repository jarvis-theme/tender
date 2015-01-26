require.config({
    baseUrl: '/',
    shim: {
        "bootstrap": {
            deps: ['jquery'],
        },
        "noty"  : {
            deps : ['jquery'],
        },
        'jquery_sharrre' : {
            deps : ['jquery'],
        },
        'jq_ui' : {
            deps : ['jquery'],
        },
        'mobilegmap' : {
            deps : ['jquery'],
        },        
        'flexslider' : {
            deps : ['jquery'],
        },
    },

    paths: {
        // LIBRARY
        bootstrap           : ['//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min','js/bootstrap.min'],
        jq_ui               : 'js/jquery-ui',
        jquery_sharrre      : 'js/theme-shop/jquery.sharrre',
        jquery              : ['//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min','js/theme-shop/jquery1.8.2.min'],
        noty                : 'js/jquery.noty',
        // shop                : 'js/theme-shop/shop',
        select_nav          : 'http://example.jstore.test/themes/7-tema/tender/assets/js/lib/selectNav',
        mobilegmap          : 'http://example.jstore.test/themes/7-tema/tender/assets/js/lib/jquery.mobilegmap',
        flexslider          : 'http://example.jstore.test/themes/7-tema/tender/assets/js/lib/jquery.flexslider',

        // ROUTE
        router              : 'js/router',

        //controller
        blog                : 'http://example.jstore.test/themes/7-tema/tender/assets/js/controllers/blog',
        home                : 'http://example.jstore.test/themes/7-tema/tender/assets/js/controllers/home',
        kontak              : 'http://example.jstore.test/themes/7-tema/tender/assets/js/controllers/kontak',
        menu                : 'http://example.jstore.test/themes/7-tema/tender/assets/js/menu',
        produk              : 'http://example.jstore.test/themes/7-tema/tender/assets/js/controllers/produk',
    }
});
require([
    'router',
    'bootstrap',
    'menu',
], function(router,b,menu)
{
    // home
    router.define('home', 'home@run');

    // kontak
    router.define('kontak', 'kontak@run');

    //produk
    router.define('produk/*', 'produk@run');
    
    router.run();
    menu.run();
});