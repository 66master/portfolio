<!DOCTYPE HTML>

<html lang="{{ app()->getLocale() }}">
<head>
  @yield('head')
</head>
<body>
<div id="wrapper">
  @yield('header')

  @yield('content')

  @yield('footer')
</div>
</body>