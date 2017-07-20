@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recent posts</div>

                <div class="panel-body">
                    @foreach($posts as $post)
                        <p>
                            {{ $post->created_at }}
                        </p>
                        <p>
                            {{ $post->text }}
                        </p>
                        <br>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
