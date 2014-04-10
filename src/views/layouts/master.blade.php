<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>

    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="cleartype" content="on">

    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css') }}
    {{ HTML::style('css/main.css') }}
    @yield('styles')

    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.dev.js') }}
    <!--[if lt IE 9]>
    {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js') }}
    <![endif]-->
</head>
<body>
<div id="fb-root"></div>

@yield('header')

<div class="container">
    <div class="content">
        @yield('nav')
        <div class="row">
            <div class="col-sm-12">
                @yield('content')
            </div>
        </div>
        <div class="row footer">
            @yield('footer')
        </div>
    </div>
</div>
<!-- /container -->

<script>
    var appConfig = {
        appId: "{{ $appId }}",
        pageId: "{{ $pageId }}",
        channelUrl: "{{ $channelUrl }}"
    };
</script>
@yield('scripts')
<script data-main="packages/euw/facebook-app/js/main"
        src="{{ URL::asset('//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.11/require.min.js') }}"></script>

</body>
</html>