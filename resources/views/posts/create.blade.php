@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts._form', ['post' => null])
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
