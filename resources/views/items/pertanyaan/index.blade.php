@extends('adminlte.master')

@section('content')
<div class="m-3">
    <h1 class="h3 mb-4 text-gray-800">Pertanyaan</h1>
    @if (count($pertanyaan) > 0)
        @foreach ($pertanyaan as $item)
            <div class="well">
                <h3><a href="/jawaban/{{ $item->id }}">{{ $item->judul }}</a></h3>
                <p>{{ \Illuminate\Support\Str::limit($item->isi, 100, $end='...') }}</p>
                <small>Written on {{ $item->created_at }}</small>
            </div>
            <hr>
        @endforeach
    @else
        <p>No post found</p>
    @endif
</div>
@endsection
