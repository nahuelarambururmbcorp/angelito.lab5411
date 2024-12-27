@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">
						<span><i class="fa fa-table"></i></span>
						<span>Lista de Horarios</span>
					</h3>
				</div>

				<div class="box-body">

					@include('admin.partials.info')

					@include('admin.partials.toolbar')

					<table id="tbl-list" data-server="false" class="dt-table table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
                            <th>Secuencia</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th style="min-width: 100px;">Acciones</th>
						</tr>
						</thead>
						<tbody>
							@foreach ($timeline as $time)
								<tr>
									<td>{{ $time->order }} </td>
									<td>{{ $time->title }} </td>
									<td>{{ $time->description }} </td>
									<td>{!! action_row($selectedNavigation->url."/timeline", $time->id, $time->title, [['show'], 'edit', 'delete']) !!}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
