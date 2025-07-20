@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">Add New Post</a>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-header">{{ $post->title }}</div>
            <div class="card-body">
                <p>{{ $post->content }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
