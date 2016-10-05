<div class="container">
    <section class="blog">
        <div class="row">
            <header class="span12 prime">
                <h1>{{$detailblog->judul}}</h1>
                <p><span class="date"><i class="icon-calendar"></i> {{date("d M Y", strtotime($detailblog->created_at))}} <i class="icon-tag"></i><a href="{{blog_category_url(@$detailblog->kategori)}}"> {{@$detailblog->kategori->nama}}</a></span></p>
            </header>
        </div>

        <div class="wrap">
            <div class="row-fluid post">
                <div class="span8">
                    <article>
                        <p>{{$detailblog->isi}}</p>
                    </article>
                    <div class="navigate clearfix">
                        @if(prev_blog($detailblog))
                        <div class="pull-left"><a href="{{blog_url(prev_blog())}}">&larr; Sebelumnya</a></div>
                        @else
                        <div class="pull-right"></div>
                        @endif

                        @if(next_blog($detailblog))
                        <div class="pull-right"><a href="{{blog_url(next_blog())}}">Selanjutnya &rarr;</a></div>
                        @else
                        <div class="pull-right"></div>
                        @endif
                    </div>
                    <hr>
                    <div class="share"></div>
                    <hr>

                    <div>
                        {{$fbscript}}
                        {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}} 
                    </div>
                    <hr>
                </div>
                <div class="span4 sidebar">
                    <aside>
                        <p class="title"><i class="icon-rss"></i> <strong>Artikel Terbaru</strong></p>
                        <ul>
                            @foreach(list_blog(8) as $recent)
                            <li><a href="{{blog_url($recent)}}">{{$recent->judul}}</a><br /><small>diposting tanggal {{waktu($recent->created_at)}}</small></li>
                            @endforeach
                        </ul>
                    </aside>
                    @if($detailblog->tags != "")
                    <aside class="clearfix tags">
                        <p class="title"><i class="icon-tag"></i> <strong>Tags</strong></p>
                        {{ getTags('<span class="underline"></span>',$detailblog->tags)}} 
                    </aside>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>