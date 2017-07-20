@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit post</div>

                <div class="panel-body">
                    <form role="form" method="post" action="{{ action('PostsController@update', ['id' => $post->id]) }}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <p><input type="text" style="width: 100%" name="title" value="{{ old('title') ? old('title') : $post->title }}" placeholder="Title"></p>
                        <p><textarea type="text" style="width: 100%" name="text" rows=8 placeholder="Text">{{ old('text') ? old('text') : $post->text }}</textarea></p>
                        <br>
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
