@extends('layout.app')

@section('title', 'Buat Postingan')

@section('content')

    <h1>buat Postingan Baru</h1>
    <form method="POST" action="{{ url('posts') }}" class="form-control">
        @csrf

        <div class="mb-3">
            <label for="ini-title" class="form-label">Judul</label>
            <input type="title" class="form-control" id="ini-title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
