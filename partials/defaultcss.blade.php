		<!-- Default css-->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/assets/css/bootstrap.min.css">
		{{ generate_theme_css('tender/assets/css/font.css') }}

		@if($tema->isiCss=='')
		{{ generate_theme_css('tender/assets/css/style.css?v=004') }}
		@else
		{{ generate_theme_css('tender/assets/css/editstyle.css?v=004') }}
		@endif

		<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials.css" />
		<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.3.1/jssocials-theme-flat.css" />
		{{ favicon() }}