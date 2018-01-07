<!DOCTYPE HTML>

<html lang="{{ app()->getLocale() }}">
<head>
  @yield('head')
</head>
<body>
<div id="wrapper">
  @yield('header')
  <div class="container">
    @yield('content')
  </div>
  @yield('footer')
</div>
</body>