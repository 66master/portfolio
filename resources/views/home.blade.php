@extends('layouts.common')
@section('title', 'ホーム')
@section('keywords', 'ポートフォリオ')
@section('description', 'WEBエンジニア Takupan のポートフォリオサイト')
{{--@section('pageCss')
<link href="css/page.css" rel="stylesheet">
@endsection--}}
@include('layouts.head')
@include('layouts.header')
@section('content')

<div class="row-flex row-flex-wrap">

    @foreach($portfolios as $value)

    <div class="col-xs square">
    	<a href="{{ asset('portfolios/show/' . $value->id) }}">
   	    	<img src="{{ asset('storage/images/' . $value->image) }}" class="portfolio-thumb" />
	    </a>
    </div>

    @endforeach

</div>

@endsection
@include('layouts.footer')
