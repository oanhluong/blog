@extends('main')
@section('stylesheets')

@endsection

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is may test website build wit Laravel. Please read my popular post!</p>
                <p><a href="#" class="btn btn-primary btn-lg" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300 )}}{{strlen($post->body) > 300 ? '...' : ''}}</p>
                     <a href="{{url('blog/' . $post->slug)}}" class="btn btn-primary btn-md">Read More</a>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection

@section('scripts')

@endsection