@extends("layouts.app")
@section("title" , "posts")
@section("content")
<a href="/add"
class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">add post</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>image</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
@forelse ($posts as $post )
<tr>
    <td>  {{$post->id}} </td>
    <td> {{$post->title}}</td>
    <td> {{$post->description}}</td>
    <td> <img src="/images/{{$post->image}}" alt=""></td>
        <td > <div class="ss"><a href="/post/{{$post->id}}" class="btn btn-secondary">show</a> <a href="/edit/{{$post->id}}" class="btn btn-warning">edite</a>
            <form action="/post/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
           <input type="submit" value="delete" class="btn btn-info">
            </form></div>
        </td></tr>

@empty
   there is no posts
@endforelse
    </tbody>
</table>
@endsection

