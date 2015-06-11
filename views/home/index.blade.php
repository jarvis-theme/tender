<div class="container home">

    <!-- ================ -->
    <!-- Featured section -->
    <!-- ================ -->
    <section class="feat">
        <div class="row">
            <div class="span12">
                <h6 class="subhead"><strong>BARANG POPULER</strong></h6>
                <div class="tab-content row">

                    <!-- Feat tab -->
                    @foreach(list_product() as $key=>$myproduk)

                    <div class="tab-pane active" id="feat">
                        <article style="height: 330px;" class="span4">
                            {{is_terlaris($myproduk)}}
                            {{is_produkbaru($myproduk)}}
                            {{is_outstok($myproduk)}}

                            <div class="view view-thumb">
                                <img style="margin:auto; max-height:250px;" src="{{URL::to(product_image_url($myproduk->gambar1,'medium'))}}" alt="{{$myproduk->nama}}">
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