<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Centro Estetico')</title>
  @vite(['resources/css/app.scss','resources/js/app.js'])
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>
<body class="bg-white text-dark">

  @include('components.navbar')

  <main class="pt-5">
    @yield('content')
  </main>

  @include('components.footer')

  

</body>
</html>
