@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">
						<span><i class="fa fa-table"></i></span>
						<span>Lista de Eventos</span>
					</h3>
				</div>

				<div class="box-body">

					@include('admin.partials.info')

					@include('admin.partials.toolbar')

					<table id="tbl-list" data-server="false" class="dt-table table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th class="desktop">Transporte</th>
                            <th>Cena</th>
                            <th>Bebidas</th>
                            <th>Show</th>
                            <th>Precio</th>
                            <th style="min-width: 100px;">Acciones</th>
						</tr>
						</thead>
						<tbody>
						@foreach ($eventos as $evento)
							<tr>
							<td>
								@if($evento->imagen)
									<img src="{{ asset('storage/' . $evento->imagen) }}" style="height: 50px;">
								@endif
							</td>
                                <td>{{ $evento->nombre }}</td>
                                <td>{{ $evento->transporte }}</td>
                                <td>{{ $evento->cena }}</td>
                                <td>{{ $evento->bebidas }}</td>
                                <td>{{ $evento->show }}</td>
                                <td>{{ $evento->precio }} USD</td>
                                <td>{!! action_row($selectedNavigation->url."/eventos", $evento->id, $evento->nombre, [['show'], 'edit', 'delete']) !!}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
