@extends('adminlte.master')

@section('content')
<div class="m-3">
    <h1 class="h3 mb-4 text-gray-800">Ubah Pertanyaan</h1>
    <form action="/pertanyaan/{{ $pertanyaan->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="penanya_id" value="{{ $pertanyaan->penanya_id }}">
        <input type="hidden" name="updated_at" value="{{ \Carbon\Carbon::now() }}">
        <div class="form-group">
            <label for="judul" class="sr-only">Judul</label>
            <input type="text" class="form-control"  id="judul" name="judul" placeholder="Ketik judul" value="{{ $pertanyaan->judul }}" required>
        </div>
        <div class="form-group">
            <label for="isi" class="sr-only">Isi</label>
            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10" placeholder="Tuliskan isi pertanyaan" required>{{ $pertanyaan->isi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
@endsection
