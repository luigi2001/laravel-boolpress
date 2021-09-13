@extends('layouts.app')

@section('content')
<form action="{{ route('admin.posts.update', $post->id) }}" method="post">
    @method('PATCH')
    @csrf
  <div class="mb-3">
    <label for="titolo" class="form-label">titolo</label>
    <input type="text" class="form-control" id="titolo" name="title" value="{{$post->title}}">
  </div>
  <div class="mb-3">
    <label for="contenuto" class="form-label">contenuto</label>
    <textarea name="content" id="contenuto" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection