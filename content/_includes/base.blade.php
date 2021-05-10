<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@yield('pageDescription', $siteDescription)">

  <title>{{ $siteName }} @yield('pageTitle')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
</head>

<body>
  @yield('body')

  @include('_includes.footer')

  <!-- AlpineJS Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

</body>

</html>
