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

<div calss="container">
<div class="row-flex row-flex-wrap">
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
    <div class="col-xs square">
        <img src="" />
        web
    </div>
</div>
</div>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layouts.footer')
