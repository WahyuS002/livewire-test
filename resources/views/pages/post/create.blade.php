@extends('layouts.app')

@section('content')
    
    <form action="{{ route('post.store') }}" method="post">
        @csrf
    
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul">

        <br>

        <label for="deskripsi">Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>

        <br>

        <button class="btn btn-primary" type="submit">Create</button>

    </form>

    @include('sweetalert::alert')

@endsection