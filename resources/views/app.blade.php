<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="從零基礎開始，直到你成為資工大神，這就是系程存在的意義。">
        <meta name="generator" content="Vongola">

        <meta property="og:title" content="逢甲大學資訊工程學系程式設計小隊">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://iecs.vongola.tw">
        <meta property="og:site_name" content="逢甲大學資訊工程學系程式設計小隊">
        <meta property="og:description" content="從零基礎開始，直到你成為資工大神，這就是系程存在的意義。">

        <title>{{ Config::get('config.sitename') }}</title>

        {{-- CSS --}}
        {!! HTML::style('css/normalize.css') !!}
        {!! HTML::style('css/webflow.css') !!}
        {!! HTML::style('css/iecs.css') !!}
        {{-- Fonts --}}
        {!! HTML::style('//fonts.googleapis.com/css?family=Roboto:400,300') !!}

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
        <!--[if lt IE 9]>
        {!! HTML::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
        {!! HTML::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
        <![endif]-->
    </head>
    <body>
        @if(App::environment('production'))
            {{-- 只在 production 環境下，新增 Google Analytics JS code --}}
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                ga('create', 'UA-61693026-1', 'auto');
                ga('send', 'pageview');
            </script>
        @endif
        {{-- navbar--}}
        {{--@include('common.navbar')--}}
        <div class="container-fluid">
            {{-- global message --}}
            @if(Session::has('global'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    {{ Session::get('global') }}
                </div>
            @endif
            {{-- content --}}
        </div>

        @yield('content')

        {{-- Scripts --}}
        {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}
        {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js') !!}
        {!! HTML::script('js/webflow.js') !!}
        @yield('body_javascript')
        <!--[if lte IE 9]>
        {!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js') !!}
        <![endif]-->
    </body>
</html>
