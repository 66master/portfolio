@extends('layouts.common')
@section('title','プロフィール')
@section('keyword', 'プロフィール編集ページ')
@section('description', 'WEBエンジニア Takupan のポートフォリオサイト')
@include('layouts.head')
@include('layouts.header')
@section('content')
<div class="container">
<div class="profileEdit">
	<form method="POST" action="{{ asset('profile/edit/$user->id') }}">
	<div class="row">
		{{-- id	user_id	introduce	avatar	created_at	updated_at --}}
		<div class="col-md-8">
			<h3>名前</h3>
			<input type="text" name="name" value="{{ $user->name }}">
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label><h3>プロフィール写真</h3></label>
				<img src="" />
				<input type="file" name="avatar" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<h3>自己紹介</h3>
		    	<textarea name="introduce" rows="20">{{ $profile->introduce }}</textarea>
		    </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<h3>スキル</h3>
		    	<p>HTML,CSS,Javascript,PHP(独学),Laravel(独学),Ruby(学習中),MySQL(独学)</p>
		    </div>
	    </div>
	</div>
	</form>
</div>
</div>
<script type="text/javascript" src="js/original.js"></script>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>

@endsection

@include('layouts.footer')
