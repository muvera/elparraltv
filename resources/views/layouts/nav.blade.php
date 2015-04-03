	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="{{asset('/images/elparral-tv-logo.png')}}" alt="El Parral Tv Logo" class="img-responsive"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="/facebook">Facebook</a></li>
					<li><a href="/twitter">Twitter</a></li>
					<li><a href="/instagram">Instagram</a></li>
					<li><a href="http://player.mdn.stream24.net/webradioplayer/livestream.php?servertyp=SC2&server=198.178.121.76&port=8192&mp=/stream.mp3&streamid=1&lang=en&autostart=1&cut=0&station=" target="_blank" onclick="window.open(this.href, this.target, 'width=500, height=300, resizable=yes, location=yes'); return false;">Radio</a></li>
				
				</ul>

				<!-- SHOUTCAST PLAYER -->




				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>