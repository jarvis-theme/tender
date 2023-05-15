<div class="container home">
    <section class="feat">
        <div class="row">
            <div class="span12">
                <h3 class="subhead"><strong>BARANG POPULER</strong></h3>
                <div class="tab-content row">
                    @foreach(home_product() as $key=>$myproduk)
                    <div class="tab-pane active" id="feat">
                        <article id="popular" class="span4">
                            @if(is_outstok($myproduk)) 
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/img/stok-badge.png" class="outstok-badge">
                            @elseif(is_terlaris($myproduk)) 
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/img/terlaris-badge.png" class="best-badge">
                            @elseif(is_produkbaru($myproduk)) 
                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/tender/img/new-badge.png" class="new-badge">
                            @endif

                            <div class="view view-thumb">
                                <img id="img-popular" src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" onerror="this.src='//d3kamn3rg2loz7.cloudfront.net/blogs/no-image.png';">
                                <div class="mask">
                                    <h2>{{price($myproduk->hargaJual,$matauang)}}</h2>
                                    <p>{{short_description($myproduk->deskripsi,100)}}</p>
                                    <a href="{{product_url($myproduk)}}" class="info">Beli</a>
                                </div>
                            </div>

                            <p class="product-title"><a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama, 20)}}</a></p>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
