@extends('layouts.app')

@section('title', 'Tambah data buku')

@section('content')
    <form action= "{{ route('buku.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" class="form-control @error('title')
            is-invalied
            @enderror"
                name="title">
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
                name="pengarang">
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
                name="penerbit">
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
                name="tahun_terbit">
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
                name="description"></textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
            <button type="submit" class="btn btn-primary">Tambah buku</button>
    </form>

@endsection