@extends('adminlte.master')

@section('content')
<div class="m-3">
    <h1 class="h1 mb-3 text-gray-800">{{ $pertanyaan->judul }}</h1>
    <hr>
    <p>
        {{ $pertanyaan->isi }}
    </p>
    <small>Written on {{ $pertanyaan->created_at }} </small>
    <small>Updated on {{ $pertanyaan->updated_at }} </small>
    <br>
    <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-secondary">Edit</a>
    <form action="/pertanyaan/{id}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Hapus</button>
    </form>
    <h1 class="h4 mb-2 mt-4 text-gray-800"><a href="/jawaban/{{ $pertanyaan->id }}">Jawaban</a></h1>
    @if (count($jawaban) > 0)
        @foreach ($jawaban as $item)
            <p>
                {{ $item->isi }}
            </p>
            <small>Written on {{ $item->created_at }} </small>
            <small>Updated on {{ $item->updated_at }} </small>
            <hr>
        @endforeach
    @else
        <p>No answer found</p>
    @endif
    <h1 class="h6 mt-4 mb-2 text-gray-800">Jawab Pertanyaan</h1>
    <form action="/jawaban/{{ $pertanyaan->id }}" method="POST">
        @csrf
        <input type="hidden" name="penjawab_id" value="1">
        <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->id }}">
        <input type="hidden" name="is_selected" value="0">
        <input type="hidden" name="created_at" value="{{ \Carbon\Carbon::now() }}">
        <input type="hidden" name="updated_at" value="{{ \Carbon\Carbon::now() }}">
        <div class="form-group">
            <label for="isi" class="sr-only">Isi</label>
            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10" placeholder="Tuliskan isi jawaban" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>
@endsection
