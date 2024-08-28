@extends("layouts.app")
@section("title" , " post")
@section("content")
<div class="sh">
<h1>{{$post->title}}</h1>
<p>{{$post->description}} </p>
<img src="/images/{{$post->image}}" alt="">
<a href="/"
class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">back</a>
</div>
@endsection
