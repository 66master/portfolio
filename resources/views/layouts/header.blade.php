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
					<a class="navbar-brand" href="{{ url('/') }}">Takuya Ohno Portfolio</a>
				</div>
			<div class="collapse navbar-collapse navbar-right globalNav" id="navbarCompact">
				<ul class="nav navbar-nav">
					<li class="nav-inem"><a href="{{ url('portfolios').'?category=WEB' }}" class="nav-link">WEB</a></li>
					<li class="nav-item"><a href="{{ url('portfolios').'?category=PAPER' }}" class="nav-link">PAPER</a></li>
					<li class="nav-item"><a href="{{ url('portfolios').'?category=DESIGN' }}" class="nav-link">DESIGN</a></li>
					<li class="nav-item" style="margin-left: 15px;"><a href="{{ url('profile/show/1') }}">プロフィール</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="hiddenDropdown" style="display: none;">
					@guest
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Wellcome!!</a>
							<ul class="dropdown-menu" role="menu" style="display: none;" id="login">
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Register</a></li>
							</ul>
						</li>
					@else
						<li class="dropdown active">
				            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				                {{ Auth::user()->name }} <span class="caret"></span>
				            </a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/portfolios/create')}}">投稿</a></li>
								<li><a href="#">マイページ</a></li>
								<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a></li>
								<li><form action="{{route('logout')}}" method="post" id="logout-form">
									{{ csrf_field() }}
								</form>
								</li>
							</ul>
					     </li>
					@endguest
				</ul>
			</div>
		</nav>
</header>
@endsection