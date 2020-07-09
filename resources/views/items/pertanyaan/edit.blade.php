@extends('adminlte.master')

@section('content')
<div class="m-3">
    <h1 class="h3 mb-4 text-gray-800">Buat Pertanyaan</h1>
    <form action="/pertanyaan" method="POST">
        @csrf
        <input type="hidden" name="penanya_id" value="1">
        <input type="hidden" name="created_at" value="{{ \Carbon\Carbon::now() }}">
        <input type="hidden" name="updated_at" value="{{ \Carbon\Carbon::now() }}">
        <div class="form-group">
            <label for="judul" class="sr-only">Judul</label>
            <input type="text" class="form-control"  id="judul" name="judul" placeholder="Ketik judul" required>
        </div>
        <div class="form-group">
            <label for="isi" class="sr-only">Isi</label>
            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10" placeholder="Tuliskan isi pertanyaan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
@endsection
