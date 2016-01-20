<!-- Default css-->
{{generate_theme_css('tender/assets/css/bootstrap.min.css')}}
{{generate_theme_css('tender/assets/css/font.css')}}

@if($tema->isiCss=='')
	{{generate_theme_css('tender/assets/css/style.css')}}
@else
	{{generate_theme_css('tender/assets/css/editstyle.css')}}	
@endif

{{favicon()}}