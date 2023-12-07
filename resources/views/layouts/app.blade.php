<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
  <!-- In your layout file -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<title>@yield('title', 'Default Title')</title>

</head>
<body>
    @yield('content')
</body>
</html>
