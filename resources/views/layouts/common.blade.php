<!DOCTYPE HTML>

<html lang="{{ app()->getLocale() }}">
<head>
  @yield('head')
</head>
<body>
  @yield('header')
  
    @yield('content')

  @yield('footer')
</body>