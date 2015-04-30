﻿<div class="container">
	<!-- Single -->
	<section class="blog">
		<div class="row">
			<header class="span12 prime">
				<h3>{{$title}}</h3>
			</header>
		</div>

		<div class="wrap">
			<div class="row-fluid">
				<div class="span4 sidebar">
					<aside>
						<p class="title"><i class="icon-rss"></i> <strong>Artikel Baru</strong></p>
						<ul>
							@foreach(recentBlog() as $recent)
							<li><a href="{{blog_url($recent)}}">{{$recent->judul}}</a><br /><small>diposting tanggal {{waktuTgl($recent->updated_at)}}</small></li>
							@endforeach
						</ul>
					</aside>

					<aside class="clearfix tags">
						<p class="title"><i class="icon-tag"></i> <strong>Kategori</strong></p>
						@foreach(list_blog_category() as $key=>$value)
						<span style="text-decoration: underline;"><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></span>
						@endforeach
					</aside>
				</div>

				<div class="span8 list">
					<!-- <article>
						<a href="post-right-sidebar.html"><h4>Tendershop now in business</h4></a>
						<p><small class="date"><i class="icon-calendar"></i> Sep 08, 2012</small> | <small class="comments"><a href="#"><i class="icon-comment"></i> 0 comments</a></small></p>
						<p><img src="http://cambelt.co/600x200/Post Image?color=E55137,EEEEEE" alt=""/></p>
						<p><a href="#" class="theme">Read More →</a></p>
					</article> -->

                @if(count(list_blog(5,@$blog_category)) > 0)	
					@foreach(list_blog(5,@$blog_category) as $key=>$value)	
					<article>
						<a href="{{blog_url($value)}}"><h4>{{$value->judul}}</h4></a>
						<p><small class="date"><i class="icon-calendar"></i> {{waktuTgl($value->updated_at)}}</small> </p>
						{{shortDescription($value->isi,300)}}
						<p><a href="{{blog_url($value)}}" class="theme">Baca Selengkapnya →</a></p>
					</article>
					@endforeach	

					<div class="pagination pagination-centered">
					  {{list_blog(5,@$blog_category)->links()}}
					</div>
				@else 	
				<article style="font-style:italic; text-align:center;">
                    <i>Blog tidak ditemukan.</i>
                </article>
                @endif	
				</div> <!-- span8 Ends -->

			</div>
		</div>
	</section>
</div>