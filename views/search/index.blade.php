<div class="container">

	<!-- ================ -->
	<!-- Products section -->
	<!-- ================ -->
	<section class="product">
		<div class="row">
			<header class="span12 prime">
				<h3>Hasil Pencarian</h3>
			</header>
		</div>

		<div class="row">
			<div class="">
				<div class="row-fluid">

					<!-- Collection -->
					<div style="border: 0;" class="">
						@if($jumlahCari!=0)
							@foreach($hasilpro as $myproduk)
							
							<article style="text-align: justify">
								<div class="span1">
									{{--HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama)--}}
									<a href="{{product_url($myproduk)}}">
										<img src="{{product_image_url($myproduk->gambar1,'thumb')}}" alt="{{$myproduk->nama}}" id="gambar" />
									</a>
								</div>

								<div id="desc">
									<a href="{{product_url($myproduk)}}"><h4 style="float:left">{{$myproduk->nama}}</h4></a><br><br>
									<span style="text-align: left">{{short_description($myproduk->deskripsi,100)}}</span>
								</div>
							</article>

							@endforeach
							@foreach($hasilhal as $myhal)

							<article style="text-align: justify">
								<div style="margin-left:1%;">
									<a href="{{URL::to('halaman/'.$myhal->slug)}}"><h4 style="float:left">{{$myhal->judul}}</h4></a><br><br>
									<span style="text-align: left">{{short_description($myhal->isi,100)}}</span>
								</div>
							</article>

							@endforeach
							@foreach($hasilblog as $myblog)

							<article style="text-align: justify">
								<div style="margin-left:1%;">
									<a href="{{blog_url($myblog)}}"><h4 style="float:left">{{$myblog->judul}}</h4></a><br><br>
									<span style="text-align: left">{{short_description($myblog->isi,100)}}</span>
								</div>

							</article>

							@endforeach
						@else
							<article style="text-align: center; border: 0;">
								<i>Hasil pencarian tidak ditemukan</i>
							</article>
						@endif
					</div>

					{{--$hasilCari->links()--}}
					<!-- Collections end -->
				</div>
			</div>
		</div>
	</section>

</div>