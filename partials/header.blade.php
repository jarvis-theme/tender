<!-- =========== -->
<!-- Top section -->
<!-- =========== -->
<div class="header-container">
	<div class="container welcome">
		<div class="row-fluid">
			<div class="pull-left greet">

				@if ( !is_login() )
					Selamat berbelanja, {{HTML::link('member', 'Login here')}}
				@else
					Selamat datang {{HTML::link('member', user()->nama)}}, {{HTML::link('logout', 'logout here')}}
				@endif

			</div>
			<div class="pull-right cart tleft" id='shoppingcartplace'>
				{{$ShoppingCart}}
			</div>
		</div>
	</div>

	<!-- ================ -->
	<!-- Branding section -->
	<!-- ================ -->
	<div class="container head">
		<div class="row">
			<div class="span12 clearfix">
				<div class="top row">

				@if(@getimagesize(url(logo_image_url())))
					<div class="span8 logo image">
						<a href="{{url('home')}}">
							<img src="{{url(logo_image_url())}}" alt="" />
						</a>
					</div>
				@else
					<div class="span8 logo text">
						<a href="{{url('home')}}">{{ Theme::place('title') }}</a>
					</div>
				@endif

					<div class="cart span4">
						<form action="{{url('search')}}" class="topsearch" method='post'>
							<input type="search" class="top-search" placeholder="Search" name="search"/>
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- ================ -->
	<!-- Main Nav section -->
	<!-- ================ -->
	<div class="container-menu">
		<div class="container">
			<div class="row">
				<div class="span12">
					<nav class="horizontal-nav full-width">
						<ul class="nav" id="nav">
							@foreach(main_menu()->link as $key=>$link)
								<li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
							@endforeach
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>