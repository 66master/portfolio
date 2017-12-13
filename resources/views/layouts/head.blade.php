@section('head')
<meta charaset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')|Portfolio</title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<link href="css/original.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@yield('pageCss')
@endsection