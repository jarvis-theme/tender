	<div class="slides home-span12">
		<div class="container">
			<div id="flexslider" class="flexslider row">
				<ul class="slides span12">
			    	<!-- Sample slider with text caption -->
			    	@foreach(slideshow() as $slider)
				    <li>
						<img src="{{url(slide_image_url($slider->gambar))}}" alt="Slide Promo" />
						<!--  <p class="flex-caption">
						  <strong>CAPTION</strong><br />
						  Put any caption, description or anything here.<br /><br />
						  <a href="#" class="btn theme">$69 | BUY IT</a>
						</p> -->
				    </li>
				    @endforeach
				</ul>
			</div>	
		</div>
	</div>