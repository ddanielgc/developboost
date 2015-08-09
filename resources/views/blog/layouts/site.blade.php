<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('blog.meta_description') }}">
    <meta name="author" content="{{ config('blog.author') }}">

    <head>
        <title>{{ $title or config('blog.title') }}</title>

        <!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="/assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="/public/assets/css/ie8.css" /><![endif]-->
        {{-- HTML5 Shim and Respond.js for IE8 support --}}
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    @yield('content')

    @include('blog.partials.footer')

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery.dropotron.min.js"></script>
        <script src="/assets/js/skel.min.js"></script>
        <script src="/assets/js/skel-viewport.min.js"></script>
        <script src="/assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="/assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="/assets/js/main.js"></script>

    </body>
</html>