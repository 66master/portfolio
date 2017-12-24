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
						<li class="nav-item"><a href="" class="nav-link">profile</a></li>
						<li class="nav-inem"><a href="" class="nav-link">web</a></li>
						<li class="nav-item"><a href="" class="nav-link">paper</a></li>
				</ul>
				<ul class="nav navbar-nav">
					@guest
						<span style="display: none;" id="login">
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
						</span>
					@else
						<li class="nav-item">
							<div class="dropdown show">
					            <a href="#" class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					                {{ Auth::user()->name }} <span class="caret"></span>
					            </a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a href="{{ url('/portfolios')}}">投稿</a>
									<a class="dropdown-item" href="#">マイページ</a>
									<a href="{{ route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
									<form action="{{route('logout')}}" method="post" id="logout-form">
										{{ csrf_field() }}
									</form>
								</div>
					        </div>
				        </li>
					@endguest
				</ul>
			</div>
		</nav>
</header>
@endsection