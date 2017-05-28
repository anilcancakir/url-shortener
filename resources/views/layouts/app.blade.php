<!DOCTYPE html>
<html lang="{{ trans('language.code') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {!! SEO::generate() !!}

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <!-- Navbar -->
            @include('components.navbar')

            <!-- Content -->
            @yield('content')

            <!-- Footer -->
            @include('components.footer')
        </div>

        <!-- Script -->
        <script src="{{ mix('js/app.js') }}"></script>
        @yield('body')
    </body>
</html>