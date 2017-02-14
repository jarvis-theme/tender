var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
    baseUrl: '/',
    waitSeconds : 300,
    urlArgs: "v=005b",
    shim: {
        "bootstrap": {
            deps: ['jquery']
        },
        "cart" : {
            deps : ['jquery'],
        },
        'flexslider' : {
            deps : ['jquery']
        },
        'jq_ui' : {
            deps : ['jquery']
        },
        'mobilegmap' : {
            deps : ['jquery','googlemap']
        },
        "noty"  : {
            deps : ['jquery']
        },
        "js_socials" : {
            deps : ['jquery']
        }
    },
    
    paths: {
        // LIBRARY
        bootstrap       : '//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min',
        cart            : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/shop_cart',
        flexslider      : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/assets/js/lib/jquery.flexslider',
        jq_ui           : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/jquery-ui',
        jquery          : '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min',
        jquery2         : '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min',
        jquery_sharrre  : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/assets/js/lib/jquery.sharrre',
        mobilegmap      : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/assets/js/lib/jquery.mobilegmap',
        googlemap       : '//maps.googleapis.com/maps/api/js?sensor=false',
        noty            : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/jquery.noty',
        select_nav      : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/assets/js/lib/selectNav',
        js_socials      : '//cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials.min',

        // ROUTE
        router          : '//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/js/router',

        // CONTROLLER
        blog            : dirTema+'/assets/js/pages/blog',
        home            : dirTema+'/assets/js/pages/home',
        kontak          : dirTema+'/assets/js/pages/kontak',
        member          : dirTema+'/assets/js/pages/member',
        menu            : dirTema+'/assets/js/pages/default',
        produk          : dirTema+'/assets/js/pages/produk',
    }
});
require([
    'router',
    'bootstrap',
    'menu',
    'cart',
], function(router,b,menu,cart)
{
    // HOME
    router.define('/', 'home@run');
    router.define('home', 'home@run');

    // KONTAK
    router.define('kontak', 'kontak@run');

    // MEMBER
    router.define('member/*', 'member@run');

    // PRODUK
    router.define('produk/*', 'produk@run');

    // BLOG
    router.define('blog/*', 'blog@run');
    
    router.run();
    menu.run();
    cart.run();
});
