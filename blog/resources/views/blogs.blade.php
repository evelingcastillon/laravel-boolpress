<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vue Post</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <h1>Vue Posts</h1>
        <div class="container d-flex flex-wrap">
            <div class="card text-left" width="200" v-for="post in posts">
                <img class="card-img-top"  :src="post.image_url" alt="">
                <div class="card-body">
                    <h4 class="card-title">@{{post.title}}</h4>
                    <p class="card-text">@{{post.paragraph}}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>