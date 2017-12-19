@section('header')
<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCompact">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="" class="navbar-brand">My Portfolio</a>
					<a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="navbarCompact">
				<ul class="nav navbar-nav">
					@guest
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
					@else
						<li class="nav-item"><a href="" class="nav-link">profile</a></li>
						<li class="nav-inem"><a href="" class="nav-link">web</a></li>
						<li class="nav-item"><a href="" class="nav-link">paper</a></li>
						<li>
							<div class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
					                {{ Auth::user()->name }} <span class="caret"></span>
					            </a>
					            <ul　class="dropdown-menu" role="menu">
					            	<li><a href="{{ url('/portfolios')}}"</li>
					            	<li>マイページ</li>
					            	<li><a href="{{route('logout')}}">ログアウト</a></li>
					            </ul>
					        </div>
				        </li>
					@endguest
				</ul>
			</div>
		</nav>
</header>
@endsection