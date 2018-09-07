@extends('main')

@section('title', '| All Tags')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <h1>All Tags</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="well">
                {!! Form::open(['route' => 'tags.store', 'data-parsley-validate' => '']) !!}
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => 255]) !!}
                    {!! Form::submit('Create', ['class' => 'btn btn-sm btn-primary btn-block', 'style' =>'margin-top: 20px']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection