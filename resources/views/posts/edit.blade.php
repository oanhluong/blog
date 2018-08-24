@extends('main')

@section('title', '| Post Edit')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
        <div class="col-md-8">
            
            {!! Form::label('title', 'Title:') !!}
            
            {!! Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) !!}
            
            {!! Form::label('body', 'Body:') !!}
            
            {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) !!}            
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{ date('d/m/Y H:m:s', strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('d/m/Y H:m:s', strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.index', 'Cancel', null, array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection