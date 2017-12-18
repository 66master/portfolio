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
	<form action="post" method="post"　enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label>画像</label>
			<input type="file" name="image"　value="{{old('name')}}" />
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
			<labe>種類</labe>
			<select type="" name="type">
				<option>選択してください</option>
				<option>EC</option>
				<option>AD</option>
				<option>CATALOG</option>
			</select>
		</div>
		<div class="form-group">
			<label>タイトル</label>
			<input type="text" name="title" value="{{old('title')}}" />
		</div>

		<div class="form-group">
			<lable>詳細説明</lable>
			<textarea name="description">{{old('description')}}</textarea>
		</div>

		<input type="submit" value="送信">

	</form>



@endsection
