
@extends('layouts.websiteDolar')

@section('content')

<main class="Main-Wrapper">
			<section class="cenaShow-hero mt-default">
				<div class="container-lg">
					<div class="row align-items-center">
						<div class="col-12 col-md-12 col-lg-12 col-xl-12">
							<div class="box-detail box-detail-cenaShow text-center">
								<div class="box-heading mb-4">
									<h3 class="wow bounceInRight" data-wow-duration="1s" data-wow-delay="0.4s">Información Práctica</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="informacion-mapa">
				<div class="container-lg">
					<div class="row">
						<div class="col-12">
							<div class="box-ubicacion wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
								<div class="row">
									<div class="col-12 col-md-5">
										<div class="box-ubicacion_detail wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
											{!! $data !!}
										</div>
									</div>
									<div class="col-12 col-md-7">
										<div class="container-iframe">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2321.885247793127!2d-58.36446653079852!3d-34.613223087206904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a334d7bd11f6df%3A0xdb7e986debba8d17!2sFaena%20Hotel%20Buenos%20Aires!5e0!3m2!1sen!2sar!4v1703255865506!5m2!1sen!2sar" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<section class="section-descubrir">
		<div class="container-lg">
			<div class="row">

				@foreach($contentList as $content)
					@if($content != null)
						<div class="col-12 col-sm-12 col-lg-12 col-xl-12 mb-4">
							<div class="box-informacion el-show wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
								<div class="row h-100 ">
									<div class="col-12 col-sm-6 pe-0">
										{!! $content !!}
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</section>

	<!--
                <section class="section-descubrir">
                    <div class="container-lg">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-12 col-xl-12 mb-4">
                                <div class="box-informacion el-show wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="row h-100 ">
                                        <div class="col-12 col-sm-6 pe-0">
                                            <div class="box-informacion_detail">
                                                <h3>El show</h3>
                                                <p>Nuestros sueños sin adioses</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 ps-0 align-self-end">
                                            <div class="box-informacion_detail text-end">
                                                <a class="cta" href="javascript:void(0)">Descubrir más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-12 col-xl-12 mb-4">
                                <div class="box-informacion ofrecemos wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="row h-100 ">
                                        <div class="col-12 col-sm-6 pe-0">
                                            <div class="box-informacion_detail">
                                                <h3>Te ofrecemos</h3>
                                                <p>Cena Show, clases de Tango y más</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 ps-0 align-self-end">
                                            <div class="box-informacion_detail text-end">
                                                <a class="cta" href="javascript:void(0)">Descubrir más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                                <div class="box-informacion shop wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="row h-100 ">
                                        <div class="col-12 col-sm-6 pe-0">
                                            <div class="box-informacion_detail">
                                                <h3>Shop</h3>
                                                <p>Las mejores prendas al mejor precio y la máxima calidad posible.</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 ps-0 align-self-end">
                                            <div class="box-informacion_detail text-end">
                                                <a class="cta" href="javascript:void(0)">Descubrir más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    -->
	<section class="show-section-info">
		<div class="container-lg">
			<div class="row">
				<div class="col-12 text-center">
					<div class="wrapper-box-show_informacion">
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