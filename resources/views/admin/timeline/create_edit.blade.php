@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <span><i class="fa fa-edit"></i></span>
                        <span>{{ isset($event)? 'Edit the ' . $event->title . ' Event' : 'Crear Registro de Tiempo' }}</span>
                    </h3>
                </div>

                <div class="box-body no-padding">
                    @include('admin.partials.info')

                    <form method="POST"
                          action="{{ $selectedNavigation->url . (isset($timeline)? "/timeline/{$timeline ->id}" : '/timeline') }}"
                          accept-charset="UTF-8" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="{{ isset($timeline)? 'PUT':'POST' }}">

                        <fieldset>
                            <div class="row">

                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('order', $errors) }}">
                                        <label for="price">Secuencia</label>
                                        <input type="number" class="form-control" id="order" name="order"
                                               placeholder="Please insert the Order"
                                               value="{{ ($errors && $errors->any()? old('order') : (isset($timeline)? $timeline->order : '')) }}"
                                        required>
                                        {!! form_error_message('secuencia', $errors) !!}
                                    </div>
                                </div>

                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('title', $errors) }}">
                                        <label for="id-title">Titulo</label>
                                        <input type="text" class="form-control" id="id-title" name="title"
                                               placeholder="Please insert the Title"
                                               value="{{ ($errors && $errors->any()? old('title') : (isset($timeline)? $timeline->title : '')) }}"
                                               required
                                        >
                                        {!! form_error_message('title', $errors) !!}
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('description', $errors) }}">
                                        <label for="price">Descripcion/Hora</label>
                                        <input type="text" class="form-control" id="order" name="description"
                                               placeholder="Please insert the description"
                                               value="{{ ($errors && $errors->any()? old('order') : (isset($timeline)? $timeline->description : '')) }}"
                                               required
                                        >
                                        {!! form_error_message('description', $errors) !!}
                                    </div>
                                </div>

                            </div>


                        </fieldset>

                        @include('admin.partials.form_footer')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
        $(function () {
            initSummerNote('.summernote');
        });
    </script>
@endsection

