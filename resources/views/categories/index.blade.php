@extends('main')

@section('title', ' | All categories')

@section('stylesheets')
{!! Html::style('css/parsley.css')!!} 
@endsection

@section('content')
<div class="row">
    <h1>All Cateogries</h1>
    <hr>
</div>
<div class="row">
    <div class="col-md-8">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Name</th>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->id}}</td>
                    <td>{{ $cat->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <div class="well">
            {!! Form::open(array('route' => 'categories.store', 'data-parsley-validate' => '')) !!} 
            {!! Form::label('name', 'Name:')!!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) !!}
            {!! Form::submit('CreateNew Category', ['class' => 'btn btn-primary btn-sm btn-block', 'style' => 'margin-top:20px']) !!} {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection