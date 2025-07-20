@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('posts._form', ['post' => $post])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
