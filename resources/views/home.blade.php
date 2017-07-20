@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recent posts
                    @if ($user->isAdmin)
                        <span>
                            <a style="text-align: right; float: right;" href="{{ action('PostsController@create') }}">
                                    <button>Create new post</button>
                                </a>
                        </span>
                    @endif
                </div>
                <div class="panel-body">
                    @foreach($posts as $post)
                        <p><h2>{{ $post->title }}</h2> {{ $post->created_at }}</p>
                        <p>{{ $post->text }}</p>
                        @if ($user->isAdmin)
                            <p>
                                <a href="{{ action('PostsController@edit', ['id' => $post->id]) }}">
                                    <button>Edit</button>
                                </a>
                                <a href="{{ action('PostsController@delete', ['id' => $post->id]) }}">
                                    <button>Delete</button>
                                </a>
                            </p>
                        @endif
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
