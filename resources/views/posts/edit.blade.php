@extends('main')

@section('title', '| Post Edit')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '5')) }}
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category', $categories, $post->category_id, ['class' => 'form-control']) !!}
            {!! Form::label('tags', 'Tags:') !!}
            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multiple', 'multiple' => 'multiple']) !!}
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class ="dl-horizontal">
                    <label>Url Slug:</label>
                    <p><a href="{{ route('blog.single', $post->slug) }}">{{ url($post->slug) }}</a></p>
                </dl>
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
    {!! Html::script('js/select2.min.js') !!}
    <script type="text/javascript">
        $(".select2-multiple").select2();
    </script>
@endsection