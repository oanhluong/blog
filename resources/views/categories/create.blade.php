@extends('main')
@section('title', ' | Create a new category')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(array('route' => 'categories.store', 'data-parsley-validate' => '')) !!}
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => '255', 'minlength' => '1']) !!}
                {!! Form::submit('Create New Category', ['class' => 'btn btn-primary btn-sm btn-block', 'style' => 'margin-top:20px']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection