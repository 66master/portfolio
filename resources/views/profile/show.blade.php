@extends('layouts.common')

@section('title','プロフィール')
@section('keyword', 'プロフィールです。')
@section('description', 'WEBエンジニア Takupan のポートフォリオサイト')
@include('layouts.head')
@include('layouts.header')
@section('content')
<div class="container">
	<div class="row">
		{{-- id	user_id	introduce	avatar	created_at	updated_at --}}
		@auth
		<div class="col-md-12">
			<a href="{{ asset('profile/edit/')}}">編集</a>
		</div>
		@endauth
		<div class="col-md-12">
			<h3>名前</h3>
			<p>{{ $profile->user->name }}</p>
		</div>
	</div>
	@if(isset($message))
	<div class="row">
		<div class="col-md-12">
		{{ $message }}
		</div>
	</div>
	@else
	<div class="row">
		<div class="col-md-12">
			<h3>自己紹介</h3>
	    	<p>{{ $profile->introduce }}</p>
	    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>スキル</h3>
	    	<p>HTML,CSS,Javascript,PHP(独学),Laravel(独学),Ruby(学習中),MySQL(独学)</p>
	    </div>
		<div class="col-md-12">
			<h3>Udemy修了講座</h3>
	    	<div id="udemy">
	    		<h4>◆【3日でできる】はじめてのRuby on Rails4 入門</h4>
	    		<img src="{{ asset('storage/images/UC-AZCZ0NO8.jpg') }}">
	    		<h4>◆速習+詳細+実例jQuery講座オンラインコース</h4>
	    		<img src="{{ asset('storage/images/UC-A4TU0WQU.jpg') }}">
	    		<h4>◆8.5時間のオンラインコース実例でわかるJavaScript初心者講座</h4>
	    		<img src="{{ asset('storage/images/UC-4Z8ILGPD.jpg') }}">
	    	</div>
	    </div>
	</div>
	@endif
</div>
<script type="text/javascript" src="js/original.js"></script>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>

@endsection

@include('layouts.footer')
