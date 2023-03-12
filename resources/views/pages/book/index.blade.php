@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun_terbit</th>
      <th scope="col">Cover</th>
      <th scope="col">Description</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->title }}</td>
      <td>{{ $book->pengarang }}</td>
      <td>{{ $book->penerbit }}</td>
      <td>{{ $book->tahun_terbit }}</td>
      <td>
        <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title}}" width="100px">
      </td>
      <td>{{ $book->description }}</td>
      <td nowrap>
        <a href="{{ route('buku.edit', $book->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('buku.destroy', $book->id) }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{ route('buku.create')}}">
    <button class="btn btn-primary ">Tambah Buku</button>
</a>

@endsection