require.config({
    // urlArgs: "bust=" + (new Date()).getTime(),

    paths: {
        'app': 'app',
        'tpl': 'tpl',

        'facebook': '//connect.facebook.net/de_DE/all',

        'jquery': '../vendor/jquery/jquery.min',
        'underscore': '../vendor/underscore/underscore-min',
        'backbone': '../vendor/backbone/backbone-min',
        'text': '../vendor/requirejs-text/text',
        'spin': '../vendor/spin.js/spin',
        'bootstrap': '../vendor/bootstrap/dist/js/bootstrap.min',
        'bootstrap-datepicker': '../vendor/bootstrap-datepicker/js/bootstrap-datepicker',
        'bootstrap-slider': '../vendor/bootstrap-slider/bootstrap-slider',
        'mediaelement': '../vendor/mediaelement/buildmediaelement-and-player.min',
        'dropzone': '../vendor/dropzone/dropzone-amd-module.min',

        'kinetic': 'libs/kinetic-v4.4.3.min',
        'gesturerecognizer': 'libs/gesturerecognizer',
        'star-rating': 'libs/star-rating/jquery.rating.pack'
    },

    shim: {
        "facebook": { exports: "FB" },
        "underscore": { exports: "_" },
        "backbone": {
            deps: ["underscore", "jquery"],
            exports: "Backbone"
        },
        "mediaelement": ["jquery"],
        "star-rating": ["jquery"],
        "gesturerecognizer": ["jquery"],
        "bootstrap": ["jquery"],
        "bootstrap-datepicker": ["bootstrap"],
        "bootstrap-slider": ["bootstrap"]
    }
});

// get the ball rolling when fb is ready
require(["fb"]);