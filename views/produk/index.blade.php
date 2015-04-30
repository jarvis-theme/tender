<div class="container">
	
	<!-- ================ -->
	<!-- Products section -->
	<!-- ================ -->
	<section class="product">
		<div class="row">
			<header class="span12 prime">
				<h3>{{$name}}</h3>
			</header>
		</div>

		<div class="row">
			<div class="span3 hidden-phone">
				<div class="sidebar">
					<section>
						<h5>Kategori</h5>
						<nav>
							<ul>
								{{
									generateKategori($kategori,'<li>;</li>','<i class="icon-right-open"></i>',';',true)
								}}
							</ul>
						</nav>
					</section>

					<section>
						<h5>Best Seller</h5>
						@foreach (best_seller() as $item)
						<a href="{{product_url($item)}}">
							<article class="clearfix">
								<div class="thumb visible-desktop">
									{{HTML::image(product_image_url($item->gambar1,'thumb'))}}
								</div>
								<div class="info">
									{{short_description($item->nama, 32)}}<br>
									<span class="price theme">{{price($item->hargaJual)}}</span>
								</div>
							</article>
						</a>
						@endforeach								
					</section>

					<section>
					@foreach(vertical_banner() as $item)	
                    	<div>
                    		<a href="{{url($item->url)}}">
                				{{HTML::image(banner_image_url($item->gambar))}}
                			</a>
            			</div>
                    @endforeach	
					</section>
				</div>
			</div>

			<div class="span9">
				<div class="row-fluid">
                	@foreach(horizontal_banner() as $item)
                	<div style="width: 99%;margin: 0 auto;margin-bottom: 15px;">
                		<a href="{{url($item->url)}}">
                			{{HTML::image(banner_image_url($item->gambar))}}
            			</a>
        			</div>
                	@endforeach
					
					@if(count(list_product(9,@$category)) > 0)
						<!-- Collection -->
						<div class="tab-content sideline">
						@foreach(list_product(9,@$category) as $myproduk)
							<article style="height: 262px; position: relative;">
								{{is_terlaris($myproduk)}}
								{{is_produkbaru($myproduk)}}
								{{is_outstok($myproduk)}}
								<div class="view view-thumb">
									{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class'=>'img1'))}}
									<div class="mask">
										<h2>{{price($myproduk->hargaJual)}}</h2>
							            <p>{{short_description($myproduk->deskripsi,100)}}</p>
							            <a href="{{product_url($myproduk)}}" class="info">Lihat</a>
									</div>
								</div>
								<p class="product-title">
									<a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama, 32)}}</a>
								</p>
							</article>
						@endforeach
						</div>
						{{list_product(9,@$category)->links()}}
						<!-- Collections end -->
					@else
						<article class="text-center">
	                        <i>Produk tidak ditemukan</i>
	                    </article>
                    @endif
				</div>
			</div>
		</div>
	</section>

</div>