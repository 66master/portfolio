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

    @foreach($portfolios as $portfolio)

    <div class="col-xs square">
    	<a href="{{ asset('portfolios/show/' . $portfolio->id) }}">
   	    	<img src="{{ asset('storage/images/' . $portfolio->image) }}" class="portfolio-thumb" />
	    </a>
	    @foreach($users as $user)
	    	@if($portfolio->user_id == $user->id)
		    	@<a href="{{ asset('profile/show').'/'.$user->id }}">{{ $user->name }}</a>
	    	@endif
	    @endforeach
	    <a href="{{ asset('portfolios/show' .'/'. $portfolio->id) }}">{{ $portfolio->title }}</a>
    </div>
    @endforeach
</div>

@endsection
@include('layouts.footer')
