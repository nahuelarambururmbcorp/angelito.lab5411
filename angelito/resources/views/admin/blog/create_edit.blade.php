@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <span><i class="fa fa-edit"></i></span>
                        <span>{{ isset($item)? 'Edit the ' . $item->title . ' entry': 'Create a new Article' }}</span>
                    </h3>
                </div>

                <div class="box-body no-padding">

                    @include('admin.partials.info')

					<form method="POST" action="{{$selectedNavigation->url . (isset($item)? "/{$item->id}" : '')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="{{isset($item)? 'PUT':'POST'}}">

                        <fieldset>
                            <div class="row">
                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('title', $errors) }}">
                                        <label for="id-title">Title</label>
                                        <input type="text" class="form-control input-generate-slug" id="id-title" name="title" placeholder="Please insert the Title" value="{{ ($errors && $errors->any()? old('title') : (isset($item)? $item->title : '')) }}">
                                        {!! form_error_message('title', $errors) !!}
                                    </div>
                                </div>

                                <div class="col col-6">
                                    <div class="form-group {{ form_error_class('category_id', $errors) }}">
                                        <label for="category">Category</label>
                                        {!! form_select('category_id', ([0 => 'Please select a Category'] + $categories), ($errors && $errors->any()? old('category_id') : (isset($item)? $item->category_id : '')), ['class' => 'select2 form-control']) !!}
                                        {!! form_error_message('category_id', $errors) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group {{ form_error_class('content', $errors) }}">
                                <label for="article-content">Content 1</label>
                                <textarea class="form-control summernote" id="article-content" name="content" rows="18">{{ ($errors && $errors->any()? old('content') : (isset($item)? $item->content : '')) }}</textarea>
                                {!! form_error_message('content', $errors) !!}
                            </div>
                            <div class="form-group {{ form_error_class('content1', $errors) }}">
                                <label for="article-content">Content 2</label>
                                <textarea class="form-control summernote" id="article-content" name="content1" rows="18">{{ ($errors && $errors->any()? old('content1') : (isset($item)? $item->content1 : '')) }}</textarea>
                                {!! form_error_message('content1', $errors) !!}
                            </div>

                            <div class="form-group {{ form_error_class('content2', $errors) }}">
                                <label for="article-content">Content 3</label>
                                <textarea class="form-control summernote" id="article-content" name="content2" rows="18">{{ ($errors && $errors->any()? old('content2') : (isset($item)? $item->content2 : '')) }}</textarea>
                                {!! form_error_message('content2', $errors) !!}
                            </div>

                            <div class="form-group {{ form_error_class('content3', $errors) }}">
                                <label for="article-content">Content 4</label>
                                <textarea class="form-control summernote" id="article-content" name="content3" rows="18">{{ ($errors && $errors->any()? old('content3') : (isset($item)? $item->content3 : '')) }}</textarea>
                                {!! form_error_message('content3', $errors) !!}
                            </div>

                            <div class="form-group {{ form_error_class('content4', $errors) }}">
                                <label for="article-content">Content 5</label>
                                <textarea class="form-control summernote" id="article-content" name="content4" rows="18">{{ ($errors && $errors->any()? old('content4') : (isset($item)? $item->content4 : '')) }}</textarea>
                                {!! form_error_message('content4', $errors) !!}
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
    <script type="text/javascript" charset="utf-8">
        $(function ()
        {
            setDateTimePickerRange('#active_from', '#active_to');

            initSummerNote('.summernote');
            $('#form-edit').on('submit', function ()
            {
                $('#article-content').html($('.summernote').val());
                return true;
            });
        })
    </script>
@endsection