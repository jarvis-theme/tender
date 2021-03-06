﻿﻿<div class="container">
    <section class="blog">
        <div class="row">
            <header class="span12 prime"><h1>{{$title}}</h1></header>
        </div>

        <div class="wrap">
            <div class="row-fluid">
                <div class="span4 sidebar">
                    <aside>
                        <p class="title"><i class="icon-rss"></i> <strong>Artikel Baru</strong></p>
                        <ul>
                            @foreach(list_blog() as $recent)
                            <li><a href="{{blog_url($recent)}}">{{$recent->judul}}</a><br /><small>diposting tanggal {{waktuTgl($recent->created_at)}}</small></li>
                            @endforeach
                        </ul>
                    </aside>

                    <aside class="clearfix tags">
                        <p class="title"><i class="icon-tag"></i> <strong>Kategori</strong></p>
                        @foreach(list_blog_category() as $key=>$value)
                        <span class="underline" id="tag-category"><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></span>
                        @endforeach
                    </aside>
                </div>

                <div class="span8 list">
                @if(count(list_blog(null,@$blog_category)) > 0) 
                    @foreach(list_blog(null,@$blog_category) as $key=>$value) 
                    <article>
                        <a href="{{blog_url($value)}}"><h2>{{$value->judul}}</h2></a>
                        <p><small class="date"><i class="icon-calendar"></i> {{waktuTgl($value->created_at)}}</small></p>
                        <img src="{{ imgString($value->isi) }}" />
                        {{ short_description($value->isi,300) }} <a href="{{blog_url($value)}}" class="theme">Baca Selengkapnya →</a>
                    </article>
                    @endforeach 

                    <div class="pagination pagination-centered">
                        {{list_blog(null,@$blog_category)->links()}} 
                    </div>
                @else   
                    <article id="result-blog"><i>Blog tidak ditemukan.</i></article>
                @endif  
                </div>
            </div>
        </div>
    </section>
</div>