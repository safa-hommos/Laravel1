@extends("layouts.app")
@section("title" , " add posts")
@section("content")
<div class="pp">
<form action="./post" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">
        title
        </label>

        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="mb-3" >


        <label for="description" class="form-label">
            description
        </label>
        <textarea name="description" id="description" cols="30" rows="10"  class="form-control"></textarea>

    </div>
    <div class="mb-3">
        <label for="image" class="form-label">
        image
        </label>
        <input type="file" id="image" name="image" class="form-control">
    </div>
    <div>
        <input type="submit" value="send"  class="btn btn-primary">
    </div>
    </div>
    </form> </div>
@endsection
