@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="col-auto">
    <a href="{{ route('exportpdf') }}" class="btn btn-danger">Export PDF</a>
    <a href="{{ route('export_excel') }}" class="btn btn-success my-3" target="_blank">Export EXCEL</a>
		
</div>

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
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection