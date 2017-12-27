@extends('layouts.common');

@section('title','プロフィール');
@section('keyword', 'プロフィールです。');
@section('description', 'WEBエンジニア Takupan のポートフォリオサイト')
@include('layouts.head')
@include('layouts.header')
@section('content')
<div calss="container">
<div class="row-flex row-flex-wrap">

    @foreach($portfolios as $value)

    <div class="col-xs square">
        <img src="{{ asset('storage/images/' . $value->image) }}" class="portfolio-image" />
    </div>

    @endforeach
</div>
</div>
<script type="text/javascript" src="js/original.js"></script>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>

@endsection

@include('layouts.footer')
