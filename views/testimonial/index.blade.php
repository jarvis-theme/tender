<div class="container">
	<section class="blog">
		<div class="row">
			<header class="span12 prime"><h3>{{$nama}}</h3></header>
		</div>

		<div class="wrap">
			<div class="row-fluid">
				<div class="span8 list">
					@foreach(list_testimonial() as $key=>$value)
					<article>
						<h5>{{ ucwords($value->nama) }}</h5>
						{{ substr($value->isi,0,250) }}
					</article>
					@endforeach

					<div class="pagination pagination-centered">{{ list_testimonial()->links() }}</div>
				</div>

				<div class="span4 list">
					<form action="{{url('testimoni')}}" method="post">
						<h3>Buat Testimonial</h2>
						<input type="text" class="input-block-level" name="nama" placeholder="Nama" value="{{ Input::old('nama') }}" required>
						<textarea name="testimonial" class="input-block-level" rows="4" placeholder="Testimonial" required>{{ Input::old('testimonial') }}</textarea>
						<button type="submit" class="btn theme">Kirim Testimonial</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>