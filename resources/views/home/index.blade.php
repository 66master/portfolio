@extends('layout.common')

@section('title', 'ホーム')
@section('keywords', 'ポートフォリオ')
@section('description', 'WEBエンジニア Takupan のポートフォリオサイト')
@section('pageCss')
<link href="/css/page.css" rel="stylesheet">
@endsection
@include('layout.head')
@include('layout.header')
@section('content')

<p>コンテンツ</p>

@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

@include('layout.footer')
