@extends('layouts.websiteDolar')

@section('content')

        <div class="tcc_ctn tcc_left2">
   
            <div class="tcc_itm tcc_bc">
                <div id="fusion-static-enter:f0fHQXIOPxu6b5o" data-fusion-component="f0fHQXIOPxu6b5o"
                    style="display: none;"></div>
                    
                    <div class="cst_ctn"
>
                    <h1 class="cst_hl dkt_fs_38"><span>{{$article->title}}</span></h1>
                    <div class="cst_deck dkt_fs_19 dkt_lh_150">{{$article->summary}} </div>
                    

                    <div class="cst_img_ctn cst_img_ctn_16_9">

                    @if($article->cover_photo)
                                   
                        <amp-img alt="A view of the sea"
                        src="{{ $article->cover_photo->thumbUrl }}"
                        width="16" height="9" layout="responsive">
                        </amp-img>
                   
                    @endif

                        
                        </div>
                        
                    <div class="overlay_ctn">Autor: DolarPlus</div>
                </div>
                
                <div id="fusion-static-exit:f0fHQXIOPxu6b5o" data-fusion-component="f0fHQXIOPxu6b5o"
                    style="display: none;"></div>
                    
            </div>
        </div>

    
        <div class="row w-row">
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card number-card-content1">
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency"><a class="number-card-number">Dolar Blue</a></div>
                            <div class="variation number-card-progress">{{$data['dolar_b']->variacion}}</div>
                        </div>

                        <div class="number-card-divider"></div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Compra</div>
                            <div class="number-card-progress">${{$data['dolar_b']->compra}}</div>
                        </div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Venta</div>
                            <div class="number-card-progress">${{$data['dolar_b']->venta}}</div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card number-card-content2">
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency"><a class="number-card-number">Dolar Oficial</a></div>
                            <div class="variation number-card-progress">{{$data['dolar']->variacion}}</div>
                        </div>

                        <div class="number-card-divider"></div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Compra</div>
                            <div class="number-card-progress">${{$data['dolar_b']->compra}}</div>
                        </div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Venta</div>
                            <div class="number-card-progress">${{$data['dolar_b']->venta}}</div>
                        </div>
                    </div>
                    <div class="divider"></div>

                </div>
            </div>
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card number-card-content3">
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency"><a class="number-card-number">Dolar Bolsa</a></div>
                            <div class="variation number-card-progress">{{$data['dolar_t']->variacion}}</div>
                        </div>

                        <div class="number-card-divider"></div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Compra</div>
                            <div class="number-card-progress">${{$data['dolar_t']->compra}}</div>
                        </div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Venta</div>
                            <div class="number-card-progress">${{$data['dolar_t']->venta}}</div>
                        </div>
                    </div>
                    <div class="divider"></div>
            
                </div>
            </div>
            <div class="basic-column w-col w-col-3">
                <div class="tag-wrapper">
                    <div class="number-card number-card-content4">
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency"><a class="number-card-number">Dolar Solidario</a></div>
                            <div class="variation number-card-progress">{{$data['dolar_t']->variacion}}</div>
                        </div>

                        <div class="number-card-divider"></div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Compra</div>
                            <div class="number-card-progress">${{$data['dolar_t']->compra}}</div>
                        </div>
                        <div class="number-card-progress-wrapper">
                            <div class="tagline number-card-currency">Venta</div>
                            <div class="number-card-progress">${{$data['dolar_t']->venta}}</div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
        </div>

        <div class="cst_deck dkt_fs_19 dkt_lh_150 content_article">{!!$article->content!!}</div>

<br>
<br>
        <div class="nd-titleBar" style="color:black"><a href="https://www.infobae.com/tag/ticmas/">Criptomonedas</a></div>
        <div class="rawHTML">

        <amp-ad
  width="100vw"
  height="320"
  type="adsense"
  data-ad-client="ca-pub-9763763422449766"
  data-ad-slot="5062076648"
  data-auto-format="rspv"
  data-full-width
>
  <div overflow></div>
</amp-ad>
            <style>
                .embed-responsive-crypto {
                    height: 172px;
                }

                @media screen and (min-width: 720px) {
                    .embed-responsive-crypto {
                        height: 130px;
                    }
                }

                @media screen and (min-width: 1000px) {
                    .embed-responsive-crypto {
                        height: 65px;
                    }
                }
            </style>
        </div>

        <br>
        <br>

        <div class="nd-titleBar" style="color:black"><a href="#">ÚLTIMAS NOTICIAS</a></div>

        <div class="ndc_ctn ndc_sc4">
        @foreach($masvistas as $masvista)
            <div id="fusion-static-enter:f0fwcrwwAG0t7wV" data-fusion-component="f0fwcrwwAG0t7wV"
                style="display: none;"></div>
            <a class="cst_ctn"
                href="/{{ $masvista->slug }}"
                rel="canonical" aria-label="infobae story">
                <h2 class="cst_hl dkt_fs_22"><span>{{$masvista->title}}</span></h2>
                <div class="cst_img_ctn cst_img_ctn_16_9">
                @if($masvista->cover_photo)
                                   
                                   <amp-img alt="{{$masvista->title}}"
                                   src="{{ $masvista->cover_photo->thumbUrl }}"
                                   srcset="{{ $masvista->cover_photo->thumbUrl }} 640w"
                                   width="16" height="9" layout="responsive">
                                   </amp-img>
                              
                 @endif
                </div>
            </a>
            <div id="fusion-static-exit:f0fwcrwwAG0t7wV" data-fusion-component="f0fwcrwwAG0t7wV" style="display: none;">
            </div>
        @endforeach
        </div>


@endsection