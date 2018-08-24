@extends('main')

@section('title', '| Post Edit')

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
        <div class="col-md-8">
            
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}            
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
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.update', 'Save Changes', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection