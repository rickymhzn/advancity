<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick.css') }}" /> -->
     <!-- fontawesome -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- slick -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick.css') }}" />

     <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick-theme.css') }}" />
     @yield('frontstyles')
</head>

<body>
     <div id="app">
          @include('front.layouts.header')
          <main>
               @yield('content')
          </main>
          @include('front.layouts.footer')
     </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
          integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
     </script>
     <script type="text/javascript" src="{{ asset('assets/front/js/slick.js') }}"></script>
     <!-- <script type="text/javascript" src="{{ asset('assets/front/js/slick.min.js') }}"></script> -->
     <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
     <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
     <script type="text/javascript" src="{{ asset('assets/front/js/custom.js') }}"></script>
     @yield('frontscripts')
</body>

</html>