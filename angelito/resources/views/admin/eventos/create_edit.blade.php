@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <span><i class="fa fa-edit"></i></span>
                        <span>{{ isset($event)? 'Edit the ' . $event->title . ' Event' : 'Create a new Event' }}</span>
                    </h3>
                </div>

                <div class="box-body no-padding">

                    @include('admin.partials.info')

                    <form method="POST" action="{{ $selectedNavigation->url . (isset($event)? "/eventos/{$event->id}" : '/eventos') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="{{ isset($event)? 'PUT':'POST' }}">

                        <fieldset>
                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('nombre', $errors) }}">
                                        <label for="id-title">Title</label>
                                        <input type="text" class="form-control" id="id-title" name="nombre" placeholder="Please insert the Title" value="{{ ($errors && $errors->any()? old('nombre') : (isset($event)? $event->nombre : '')) }}">
                                        {!! form_error_message('nombre', $errors) !!}
                                    </div>
                                </div>

                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('price', $errors) }}">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="precio" placeholder="Please insert the Price" value="{{ ($errors && $errors->any()? old('precio') : (isset($event)? $event->precio : '')) }}">
                                        {!! form_error_message('precio', $errors) !!}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('transporte', $errors) }}">
                                        <label for="transporte">Transport</label>
                                        <textarea class="form-control" id="transport" name="transporte" placeholder="Please insert the Transport details">{{ ($errors && $errors->any()? old('transporte') : (isset($event)? $event->transporte : '')) }}</textarea>
                                        {!! form_error_message('transporte', $errors) !!}
                                    </div>
                                </div>

                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('cena', $errors) }}">
                                        <label for="cena">Cena</label>
                                        <textarea class="form-control" id="cena" name="cena" placeholder="Please insert the cena details">{{ ($errors && $errors->any()? old('cena') : (isset($event)? $event->cena : '')) }}</textarea>
                                        {!! form_error_message('cena', $errors) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('bebidas', $errors) }}">
                                        <label for="bebidas">Drinks</label>
                                        <textarea class="form-control" id="bebidas" name="bebidas" placeholder="Please insert the Drinks details">{{ ($errors && $errors->any()? old('bebidas') : (isset($event)? $event->bebidas : '')) }}</textarea>
                                        {!! form_error_message('bebidas', $errors) !!}
                                    </div>
                                </div>

                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('show', $errors) }}">
                                        <label for="show">Show</label>
                                        <textarea class="form-control" id="show" name="show" placeholder="Please insert the Show details">{{ ($errors && $errors->any()? old('show') : (isset($event)? $event->show : '')) }}</textarea>
                                        {!! form_error_message('show', $errors) !!}
                                    </div>
                                </div>


                            <div class="row">
                                <div class="col col-12">
                                    <div class="form-group {{ form_error_class('menu', $errors) }}">
                                        <label for="menu">Menu</label>
                                        <textarea class="form-control summernote" id="menu" name="menu" rows="18">{{ ($errors && $errors->any()? old('menu') : (isset($event)? $event->menu : '')) }}</textarea>
                                        {!! form_error_message('menu', $errors) !!}
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            <div class="form-group {{ form_error_class('imagen', $errors) }}">
    <label for="imagen">Imagen del Evento</label>
    <input type="file" class="form-control" id="imagen" name="imagen">
    {!! form_error_message('imagen', $errors) !!}
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

