@extends('layouts.websiteDolar')

@section('content')

<main class="Main-Wrapper">
			<section class="cenaShow-hero mt-default">
				<div class="container-lg">
					<div class="row align-items-center">
						<div class="col-12 col-md-12 col-lg-12 col-xl-12">
							<div class="box-detail box-detail-cenaShow text-center">
								<div class="box-heading mb-4">
									<h3 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.4s">Shop</h3>
								</div>
						<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">{!! $articles->content !!}.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="hero-show">
				<div class="container-lg">
					<div class="row align-items-center justify-content-center">
						<div class="col-12 col-md-8 col-lg-6 col-xl-5">
							<div class="box-detail text-center box-detail_shop">
								<div class="box-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
									<h3 class="mb-5">Descripción</h3>
								</div>
								<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">{!! $articles->content1 !!}.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="separator-shop"></div>

			<section class="show-section-info">
				<div class="container-lg">
					<div class="row">
						<div class="col-12 text-center">
							<div class="wrapper-box-show_shop">
								<div class="box-show wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									

								@foreach($eventos as $index => $item)
									<div class="box-show_flex">
										<div class="box-show-col">
											<div class="show-info_img">
											<img src="{{ asset('storage/' . $item->imagen) }}">
											</div>
										</div>
										<div class="box-show-col">
											<div class="box-show_flex_inner">
												<div class="show-info_title">
													<h3><span class="font-red">{{ $item->nombre }}</span></h3>
												</div>
												<div class="box-show_flex_inner_2">
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="assets/img/show/ic-coche.png">
															</figure>
															<h6><span class="font-red">Transporte</span></h6>
															<p>{{ $item->transporte }}</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="assets/img/show/ic-cena.png">
															</figure>
															<h6><span class="font-red">Cena</span></h6>
															<p>{{ $item->cena }}</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="assets/img/show/ic-vidrio-salud.png">
															</figure>
															<h6><span class="font-red">Bebidas</span></h6>
															<p>{{ $item->bebidas }}</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="assets/img/show/ic-destellos.png">
															</figure>
															<h6><span class="font-red">Show</span></h6>
															<p>{{ $item->show }}</p>
														</div>
													</div>
												</div>												
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info show-info_last">
											<h3>{{ $item->precio }} USD</h3>
												<a class="cta mb-2" href="?partner_id=9MRZPLV&partner_ticketing_activity_ids=764572">Reservar</a>
												<a class="cta" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalMenu{{ $item->id }}">Menú</a>
											</div>
										</div>
									</div>

											<!-- Modal Reserva -->
											<div class="modal fade" id="modalMenu{{ $item->id }}" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="    background: #1e1e1e;">
        <h5 class="modal-title" id="modalMenuLabel" style="color: #ffff;" >MENU</h5>
        <button type="button" class="btn-close" style="color: #ffff;" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
	  {!! $item->menu !!}

      </div>
    </div>
  </div>
</div>
									@endforeach 

									
								</div>
								<!-- <div class="box-show-extra wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
									<h3 class="text-sm-center mb-0">Cena + Show</h3>
									<p class="mb-0">Descripción Descripción Descripción Descripción Descripción Descripción Descripción <br>Descripción Descripción Descripción Descripción Descripción Descripción .</p>
								</div> -->
							</div>			
						</div>
					</div>
				</div>
			</section>

			<section class="show-programa">
				<div class="container-lg">
					<div class="row">
						<div class="col-12 text-center mb-5">
							<div class="box-heading">
								<h3 class="wow pulse" data-wow-duration="1s" data-wow-delay="0.4s"><span class="font-red">Programa</span></h3>
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
		</main>


        
@endsection