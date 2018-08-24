@extends('main')
@section('title','| All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Crated At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ substr($item->body, 0, 50) }}{{strlen($item->body) > 50 ? "..." : ""}}</td>
                            <td>{{ date('d/m/Y H:m:s', strtotime($item->created_at))}}</td>
                            <td>{{ Html::linkRoute('posts.show', 'View', array($item->id), array('class'=>'btn btn-sm btn-default'))}}
                                {{ Html::linkRoute('posts.edit', 'Edit', array($item->id), array('class'=>'btn btn-sm btn-default'))}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

