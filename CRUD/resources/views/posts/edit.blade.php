@extends("layouts.app")
@section("title" , " edit post")
@section("content")
<div class="pp">
<form action="/post/{{$post->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">
        title
        </label>
        <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">
            description
        </label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>

    </div>
    <div class="mb-3">
        <label for="image" class="form-label">
        image
        </label>
        <img src="/images/{{$post->image}}" alt="">
        <input type="file" id="image" name="image" class="form-control">
    </div>
    <div>
        <input type="submit" value="send" class="btn btn-primary">
    </div>
    </form></div>
@endsection
