	<!-- Default js -->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min.js"></script>-->
	<!-- {{HTML::script("themes/".$toko->akunId."-tema/leisure/assets/js/bootstrap.min.js")}}
	{{HTML::script("themes/".$toko->akunId."-tema/tender/assets/js/shop.js")}}
	{{HTML::script("themes/".$toko->akunId."-tema/tender/assets/js/script.js")}}
	{{HTML::script(dirTemaToko().'tender/assets/js/jquery.sharrre.js')}}
	{{HTML::script(dirTemaToko().'tender/assets/js/sharrre.js')}} -->

    <script data-main="http://{{Request::server('SERVER_NAME').'/'.dirTemaToko()}}tender/assets/js/app-main" src="/js/require.js"></script>
