@extends('layouts.app')

@section('content')

{{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}

@foreach ($posts as $post)
    <p>{{ $post->judul }}</p>
@endforeach

<a href="{{ route('post.create') }}" class="btn btn-primary">Create a post</a>

@include('sweetalert::alert')

@endsection