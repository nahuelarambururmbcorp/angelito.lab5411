@extends('layouts.websiteDolar')

@section('content')
<main class="Main-Wrapper">
	<section class="cenaShow-hero mt-default">
				<div class="container-lg">
					<div class="row align-items-center">
						<div class="col-12 col-md-12 col-lg-12 col-xl-12">
							<div class="box-detail box-detail-cenaShow text-center">
								<div class="box-heading mb-5">
									<h3 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.4s">Cena y Show</h3>
								</div>
								<h3 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.4s"><span class="font-red">El Espacio</span></h3>
								<p class="" data-wow-duration="1s" data-wow-delay="0.4s"> {!! $articles->content !!} </p>
							</div>
						</div>
					</div>
				</div>
			</section>

	<section class="cenaShow-descrip">
				<div class="container-lg">
					<div class="row align-items-center justify-content-center">
						<div class="col-12 col-md-8 col-lg-6 col-xl-5">
							<div class="box-detail  text-center">
								<div class="box-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
									<h3 class="mb-5 text-white">Descripción</h3>
								</div>
								<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">{!! $articles->content1 !!}</p>
							</div>
						</div>
					</div>
				</div>
	</section>

			<!-- <section class="cenaShow-servicios">
				<div class="container-lg">
					<div class="row justify-content-center">
						<div class="col-12 col-sm-6 col-lg-6 col-xl-5 mb-4">
							<div class="box-servicios wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
								<img class="servicio-img" src="../assets/img/show/servicios-cena.jpg">
								<div class="box-servicios_detail">
									<img class="logo" src="../assets/img/show/Logo.png">
									<h3><span class="font-red">Cena Show</span></h3>
									<span>Incluye</span>
									<p>Entrada + Plato + Postre + Bebidas</p>
									<span>Horario</span>
									<p>20:00 hs</p>
									<span>Precio</span>
									<p>$ 8.200.-</p>
									<div class="text-end">
										<a class="cta" href="javascript:void(0)">Reservar</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-xl-5 mb-4">
							<div class="box-servicios wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
								<img class="servicio-img" src="../assets/img/show/servicios-show.jpg">
								<div class="box-servicios_detail">
									<img class="logo" src="../assets/img/show/Logo.png">
									<h3><span class="font-red">Show</span></h3>
									<span>Incluye</span>
									<p>Bebidas</p>
									<span>Horario</span>
									<p>22:00 hs</p>
									<span>Precio</span>
									<p>$ 8.200.-</p>
									<div class="text-end">
										<a class="cta" href="javascript:void(0)">Reservar</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-lg-12 col-xl-10">							
							<div class="box-servicios box-servicios_horizontal wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
								<div class="row">
									<div class="col-12 col-sm-6 pe-0">
										<img class="servicio-img" src="../assets/img/show/servicios-clases.jpg">
									</div>
									<div class="col-12 col-sm-6 ps-0">
										<div class="box-servicios_detail">
											<img class="logo" src="../assets/img/show/Logo.png">
											<h3><span class="font-red">Clases de Tango + <br>Cena Show</span></h3>
											<span>Incluye</span>
											<p>Entrada + Plato + Postre + Bebidas</p>
											<span>Horario</span>
											<p>19:00 hs</p>
											<span>Precio</span>
											<p>$ 18.200.-</p>
											<div class="text-end">
												<a class="cta" href="javascript:void(0)">Reservar</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->

			<!-- <section class="show-section-info">
				<div class="container-lg">
					<div class="row">
						<div class="col-12 text-center">
							<div class="box-cena-show-precio">
								<div class="box-show wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="box-show_flex">
										<div class="box-show-col">
											<div class="show-info_img">
												<img src="../assets/img/show/show-image-2.jpg">
											</div>
										</div>
										<div class="box-show-col">
											<div class="box-show_flex_inner">
												<div class="show-info_title">
													<h3><span class="font-red">Cena + Show</span></h3>
												</div>
												<div class="box-show_flex_inner_2">
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-coche.png">
															</figure>
															<h6><span class="font-red">Transporte</span></h6>
															<p>Traslado exclusivo al Hotel Faena.</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-cena.png">
															</figure>
															<h6><span class="font-red">Cena</span></h6>
															<p>Lomo de ternera, puré de papas trufado, hongos salteados y fondo de res.</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-vidrio-salud.png">
															</figure>
															<h6><span class="font-red">Bebidas</span></h6>
															<p>Bebidas incluidas Champagne Baron. Vinos: Terrazas Reserva Malbec & Reserva.</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-destellos.png">
															</figure>
															<h6><span class="font-red">Show</span></h6>
															<p>Ubicación en sala a partir de las 19 hs. Show 21 hs.</p>
														</div>
													</div>
												</div>												
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info show-info_last">
												<h3>150 USD</h3>
												<a class="cta mb-2" href="javascript:void(0)">Reservar</a>
												<a class="cta" href="javascript:void(0)">Menú</a>
											</div>
										</div>
									</div>
									<div class="divide-line"></div>
									<div class="box-show_flex">
										<div class="box-show-col">
											<div class="show-info_img">
												<img src="../assets/img/show/show-image.jpg">
											</div>
										</div>
										<div class="box-show-col">
											<div class="box-show_flex_inner">
												<div class="show-info_title">
													<h3><span class="font-red">Solo Show</span></h3>
												</div>
												<div class="box-show_flex_inner_2">
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-coche.png">
															</figure>
															<h6><span class="font-red">Transporte</span></h6>
															<p>Traslado exclusivo al Hotel Faena.</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-cena.png">
															</figure>
															<h6><span class="font-red">Bebidas</span></h6>
															<p>Bebidas incluidas Champagne Baron. Vinos: Terrazas Reserva Malbec & Reserva.</p>
														</div>
													</div>
													<div class="box-show-col">
														<div class="show-info">
															<figure class="mb-2">
																<img src="../assets/img/show/ic-destellos.png">
															</figure>
															<h6><span class="font-red">Show</span></h6>
															<p>Ubicación en sala a partir de las 19 hs. Show 21 hs.</p>
														</div>
													</div>
													<div class="box-show-col"></div>
												</div>												
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info show-info_last">
												<h3>100 USD</h3>
												<a class="cta mb-2" href="javascript:void(0)">Reservar</a>
												<a class="cta" href="javascript:void(0)">Menú</a>
											</div>
										</div>
									</div>
								</div>
								<div class="box-show-extra wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
									<h3 class="text-sm-center mb-0">Cena + Show</h3>
									<p class="mb-0">Descripción Descripción Descripción Descripción Descripción Descripción Descripción <br>Descripción Descripción Descripción Descripción Descripción Descripción .</p>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</section> -->


	<section class="show-section-info">
				<div class="container-lg">
					<div class="row">
						<div class="col-12 text-center">
							<div class="box-show wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" id="show-containerw">
								
							@foreach($eventos as $index => $item)
									<div class="box-show_flex">


										<div class="box-show-col">
											<div class="show-info show-info_first">
												<h3 class="mb-4"><span class="font-red">{{ $item->nombre }}</span></h3>
												<img src="{{ asset('storage/' . $item->imagen) }}">
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info">
												<figure class="mb-2">
													<img src="{{ asset('assets/img/show/ic-coche.png') }}">
												</figure>
												<h6><span class="font-red">Transporte</span></h6>
												<p>{{ $item->transporte }}</p>
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info">
												<figure class="mb-2">
													<img src="{{ asset('assets/img/show/ic-cena.png') }}">
												</figure>
												<h6><span class="font-red">Cena</span></h6>
												<p>{{ $item->cena }}</p>
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info">
												<figure class="mb-2">
													<img src="{{ asset('assets/img/show/ic-vidrio-salud.png') }}">
												</figure>
												<h6><span class="font-red">Bebidas</span></h6>
												<p>{{ $item->bebidas }}</p>
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info">
												<figure class="mb-2">
													<img src="{{ asset('assets/img/show/ic-destellos.png') }}">
												</figure>
												<h6><span class="font-red">Show</span></h6>
												<p>{{ $item->show }}</p>
											</div>
										</div>
										<div class="box-show-col">
											<div class="show-info show-info_last">
												<h3>{{ $item->precio }} USD</h3>
												<a class="cta mb-2" href="?partner_id=9MRZPLV&partner_ticketing_activity_ids=685738">Reservar</a>
												<a class="cta" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalMenu{{ $item->id }}" >Menú</a>
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
						</div>
					</div>
				</div>
			</section>

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
							@foreach($timeline as $time)
								<div class="box-programa wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"> {{ $time->description }} <br><span> {{ $time->title }} </span></div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="line-dotted">
						<div class="dotted-circle">
							@foreach($timeline as $time)
								<span></span>
							@endforeach
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