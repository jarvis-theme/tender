<div class="container">
    <section class="product">
        <div class="row">
            <header class="span12 prime">
                <h6 class="subhead"><strong>BARANG POPULER</strong></h6>
            </header>
        </div>

        <div class="row">
            <div class="span3 hidden-phone">
                <div class="sidebar">
                    {{pluginSidePowerup()}}
                    <section>
                        {{--*/ $i=0; /*--}}
                        @foreach(vertical_banner() as $item)
                        <div class="sidebanner">
                            <a href="{{$item->url}}">
                                <img src="{{url(banner_image_url($item->gambar))}}" alt="{{'Info '.$i++}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/blogs/no-image.png';" />
                            </a>
                        </div>
                        @endforeach
                    </section>

                    <section>
                        <h5>Hubungi Kami</h5>
                        @if($shop->telepon)
                        <address class="row-fluid">
                            <div class="pull-left clabel"><i class="icon-phone"></i></div>
                            <div class="pull-left cdata"> {{$shop->telepon}}</div>
                        </address>
                        @endif

                        @if($shop->hp)
                        <address class="row-fluid">
                            <div class="pull-left clabel"><i class="icon-phone"></i></div>
                            <div class="pull-left cdata"> {{$shop->hp}}</div>
                        </address>
                        @endif

                        @if($shop->email)
                        <address class="row-fluid">
                            <div class="pull-left clabel"><i class="icon-mail"></i></div>
                            <div class="pull-left cdata">
                                <a href="mailto:{{$shop->email}}" target="_top">{{$shop->email}}</a>
                            </div>
                        </address>
                        @endif

                        @if($shop->bb)
                        <address class="row-fluid">
                            <div class="pull-left" title="BBM">
                                <img src="{{url('img/bbm.png')}}" alt="BBM" style="width: 22px;">
                                <span>{{$shop->bb}}</span>
                            </div>
                            <div class="pull-left cdata"></div>
                        </address>
                        @endif  
                    </section>

                    <section>
                        <h5>Testimonial</h5>
                        <span>
                            <ul>
                                @foreach(list_testimonial(3) as $items)
                                <li>
                                    <a>{{$items->isi}}</a><br />
                                    <small>oleh <strong>{{$items->nama}}</strong></small>
                                </li>
                                @endforeach
                            </ul>
                            <strong class="pull-right"><a href="{{url('testimoni')}}">Selengkapnya...</a></strong>
                        </span>
                    </section>
                </div>
            </div>

            <div class="span9">
                <div class="row-fluid">
                    <div class="tab-content sideline">
                    @foreach(home_product() as $key=>$myproduk)
                        <article id="home-product">
                            @if(is_outstok($myproduk))
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/img/stok-badge.png" class="outstok-badge">
                            @elseif(is_terlaris($myproduk))
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/img/terlaris-badge.png" class="best-badge">
                            @elseif(is_produkbaru($myproduk))
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/img/new-badge.png" class="new-badge">
                            @endif
                            <div class="view view-thumb">
                                <img id"home-thumb" src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" class="img1" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/blogs/no-image.png';" />
                                <div class="mask">
                                    <h2>{{price($myproduk->hargaJual,$matauang)}}</h2>
                                    <p>{{short_description($myproduk->deskripsi,100)}}</p>
                                    <a href="{{product_url($myproduk)}}" class="info">Beli</a>
                                </div>
                            </div>
                            <p class="product-title"><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama, 32)}}</a></p>
                        </article>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
