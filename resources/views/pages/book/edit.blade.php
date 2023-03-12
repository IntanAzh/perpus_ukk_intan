@extends('layouts.app')

@section('title', 'Edit data buku')

@section('content')
    <form action= "{{ route('buku.update', $book->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control @error('title')
            is-invalied
            @enderror"
                name="title" value="{{ $book->title}}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Pengarang</label>
            <input type="text" class="form-control @error('pengarang')
            is-invalied
            @enderror"
                name="pengarang" value="{{ $book->pengarang}}">
            @error('pengarang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control @error('penerbit')
            is-invalied
            @enderror"
                name="penerbit" value="{{ $book->penerbit}}">
            @error('penerbit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control @error('tahun_terbit')
            is-invalied
            @enderror"
                name="tahun_terbit" value="{{ $book->tahun_terbit}}">
            @error('tahun_terbit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Cover</label>
            <input type="file" class="form-control @error('cover')
            is-invalied
            @enderror"
                name="cover">
            @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control @error('description')
            is-invalied
            @enderror"
                name="description">{{ $book->description}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
    </form>

@endsection