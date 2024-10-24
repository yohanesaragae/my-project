<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Ubah Postingan</title>
    {{--  CSS   --}}
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{--  JS  --}}
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1>Ubah Postingan</h1>
    <form method="POST" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('PATCH')
        @csrf

        <div class="mb-3">
            <label for="ini-title" class="form-label">Judul</label>
            <input type="title" class="form-control" id="ini-title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <form method="POST" action="{{ url("posts/$post->id") }}"
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</body>

</html>
