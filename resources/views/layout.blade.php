<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Collectors</title>

  <!-- Scripts
  <script src="{{ asset('js/app.js') }}" defer></script> -->

  <!-- Styles
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

  @yield('styles')
</head>

<body>
  <main class="py-4">
    @yield('content')
  </main>
</body>

</html>