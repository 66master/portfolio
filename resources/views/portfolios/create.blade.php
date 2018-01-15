@extends('layouts.common')
@section('title', '登録')
@section('keywords', 'ポートフォリオ')
@section('description', 'WEBエンジニア Takupan のポートフォリオサイト')
{{--@section('pageCss')
<link href="css/page.css" rel="stylesheet">
@endsection--}}
@include('layouts.head')
@include('layouts.header')

@section('content')

<div class="container">
	<h1>ポートフォリオ投稿画面</h1>

		@if(session('error_message'))
			<div class="alert">
			{{ session('error_message')}}
			</div>
		@elseif(session('success_message'))
			<div class="success">
				{{ session('success_message') }}
			</div>
		@endif
	<form action="{{ asset('/')}}portfolios" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label>画像</label>
			<input type="hidden" name="MAX_FILE_SIZE" value="3145728">
			<input type="file" name="image" />
		</div>
		<div class="form-group">
			<label>カテゴリー</label>
			<select name="category">
				<option>選択してください</option>
				<option>WEB</option>
				<option>PAPER</option>
				<option>DESIGN</option>
			</select>
		</div>
		<div class="form-group">
			<label>種類</label>
			<select type="" name="type">
				<option>選択してください</option>
				<option name="ブランドサイト">ブランドサイト</option>
				<option name="コーポレートサイト">コーポレートサイト</option>
				<option name="ECサイト">ECサイト</option>
				<option name="ポータルサイト">ポータルサイト</option>
				<option name="ブログ">ブログ</option>
				<option name="アプリケーション">アプリケーション</option>
				<option　name="広告">広告</option>
				<option　name="カタログ">カタログ</option>
				<option　name="フライヤー">フライヤー</option>
				<option　name="ポップ">ポップ</option>
				<option name="パッケージ">パッケージ</option>
			</select>
		</div>
		<div class="form-group">
			<label>タイトル</label>
			<input type="text" name="title" value="{{old('title')}}" />
		</div>

		<div class="form-group">
			<label>詳細説明</label>
			<textarea name="description">{{old('description')}}</textarea>
		</div>
		<input type="submit" value="送信">
	</form>



@endsection
