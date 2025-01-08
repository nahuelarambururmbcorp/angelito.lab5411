<section class="show-programa">
    <div class="container-lg">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="box-heading">
                    <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"><span class="font-red">Programa</span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-between pb-4 pb-md-5">
            <div class="col-12 col-sm-12 text-center">
                <div class="box-programa-line">
                    <div class="box-programa_flex">
                        <div class="box-programa wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">20 hs. <br><span>Pick Up</span></div>
                        <div class="box-programa wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">20:30 hs. <br><span>Cena</span></div>
                        <div class="box-programa wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">22:15 hs. <br><span>Show</span></div>
                        <div class="box-programa wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">23:40 hs. <br><span>Fin del evento</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="line-dotted">
                    <div class="dotted-circle">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <div class="box-carrousel-programa wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div id="carouselHero" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="logo-carrusel"><img src="../assets/img/Logo-Large.svg" alt=""></div>
                <div class="carousel-inner">
                    @foreach($slider->photos as $index => $item)
                        <div class="carousel-item @if($index == 0) active @endif">
                            <img src="{{ $item->url }}" class="w-100">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>