@extends('main')
@section('title', '| All Categories')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Categories</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-block btn-primary">Create New Category</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                    <tr>
                        <td>{{ $cat->id}}</td>
                        <td>{{ $cat->name}}</td>
                        <td>{{ date('d/m/Y', strtotime($cat->created_at)) }}</td>
                        <td>{{Html::linkroute('categories.edit', 'Edit', array($cat->id), array('class'=>'btn btn-sm btn-default'))}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
