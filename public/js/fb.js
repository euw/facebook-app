define(['facebook', 'app/views/home'], function (FB) {
    FB.init({
        appId: appConfig.appId,
        channelUrl: appConfig.channelUrl,
        status: true, // check the login status upon init?
        cookie: true, // set sessions cookies to allow your server to access the session?
        xfbml: true  // parse XFBML tags on this page?
    });

    FB.Canvas.setAutoGrow();
    FB.Canvas.scrollTo(0, 0);

    var container = document.getElementsByTagName('body')[0];
    setTimeout(function () {
        FB.Canvas.setSize({ height: container.clientHeight });
    }, 91); // Paul's favourite number

    function NotInFacebookFrame() {
        return top === self;
    }

    function ReferrerIsFacebookApp() {
        if (document.referrer) {
            return document.referrer.indexOf("apps.facebook.com") != -1;
        }
        return false;
    }

    function redirectToFBPage() {
//        top.location.href = 'https://www.facebook.com/' + appConfig.pageId + '/?sk=app_' + appConfig.appId;
    }

    FB.Event.subscribe('edge.create', function (response) {
        console.log("edge.create");
        redirectToFBPage();
    });

    if (NotInFacebookFrame() || ReferrerIsFacebookApp()) {
        console.log("NotInFacebookFrame");
        redirectToFBPage();
    }



    FB.getLoginStatus(function (response) {
        if (response.status == "connected") {
            alert(FB.getUserID());
//            homeView.model.set('fb_id', FB.getUserID());
        }
    });

});