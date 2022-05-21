<div class="container">
    <section class="order">
        <div class="row standard">
            <header class="span12 prime">
                <h3>Estimasi Biaya</h3>
            </header>
        </div>
        <div class="row standard">
            <header class="span12 prime"> 
                <p>Tujuan Kiriman</p> 
                {{-- */ $form_url = 'expedisi' /* --}} 
                {{Form::open(array('url'=>$form_url,'method'=>'post','class'=>'form-search'))}}
                    <div class="control-group">
                        <select id="tujuan" name="tujuan">
                            @foreach($paket as $pack)
                                <option value="{{$pack->negaraId}}">{{$pack->negara->nama}}</option>
                            @endforeach
                        </select>
                        
                        <input type="number" class="input-small" style="border-radius: 0;border-top-left-radius: 4px; border-bottom-left-radius: 4px;" placeholder="Berat" name="berat" required autofocus>
                        <span class="input" style="margin-bottom: 0;vertical-align: middle;background-color: #cccccc;border: 1px solid #cccccc;padding: 6px;">gram</span>

                    </div>
                    <br>
                    <div class="control-group">
						<div class="controls">
							{{ HTML::image(Captcha::img(), 'Captcha image') }}
							{{Form::text('captcha','',array('class'=>'span3'))}} 
						</div>
					</div>
                    <button type="submit" class="btn theme"><i class="icon-search"></i> Periksa</button>
                {{Form::close()}}
            </header>
        </div>
        @if($results)
        <div class="row">
            <div class="span12">
                <div class="well form-horizontal" >
                    <h3><center>TARIF KIRIMAN</center></h3>
                    <hr>
                    <table class='table table-bordered'>
                        <tr>
                            <td>Tujuan</td>
                            <td> {{$tujuan}}</td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td> {{$berat}}</td>
                        </tr>
                    </table>
                    <hr>
                    <table class='table table-bordered'>
                        <tr>
                            <th align="center">Nama Layanan</th>
                            <th align="center">Jenis Kiriman</th>
                            <th align="center">Tarif</th>
                            <th align="center">ETD(Estimates Days)</th>
                        </tr>
                        @foreach($results as $result)
                            @foreach($result->tarif as $tarif)
                                @if($berat < $tarif->gram)
                                    <tr>
                                        <td>{{$result->nama}}</td>
                                        <td>{{$tarif->jenis}}</td>
                                        <td>{{price($tarif->harga)}}</td>
                                        <td>-</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @endif
    </section>
</div>
