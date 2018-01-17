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
<div class="container">
<div id="portfolio">
	<div class="localNav"><a href="{{ $_SERVER['HTTP_REFERER'] }}"><i class="fas fa-arrow-circle-left"></i>BACK</a></div>
	<div class="row image">
	    <div class="col-xs-12">
	        <img src="{{ asset('storage/images/' . $portfolio->image) }}" class="portfolio-image" />
	    </div>
	</div>
	<div class="row category">
		<div class="col-xs-12">
			CATEGORY : {{ $portfolio->category }} > {{ $portfolio->type }}
		</div>
	</div>
	<div class="row title">
		<div class="col-xs-12">
			TITLE : {{ $portfolio->title }}
		</div>
	</div>
	<div class="row description">
		<div class="col-xs-12">
			{{ $portfolio->description }}
		</div>
	</div>
</div>
</div>
@endsection
@include('layouts.footer')
