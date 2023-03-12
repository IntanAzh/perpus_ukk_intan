@extends('layout_user.navbar')
@section('content')
<div class="container mt-4">
     
       <div class="card border-secondary mb-3" style="max-width: 30rem;">
              <div class="card-header">DETAIL BUKU</div>
                     <div class="col-md-6 mt-3">
                     <img src="{{ asset('storage/' . $books->cover) }}" alt="" width="100px">
                     </div>

                     <div class="card-body text-secondary">
                     <h2 class="card-title">{{$books->title}}</h2>
                     <h7 class="card-text">Penulis : {{$books->pengarang}}</h7>
                     <br>
                     <h7 class="card-text">Penerbit : {{$books->penerbit}}</h7>
                     <br>
                     <h7 class="card-text">Tahun Terbit : {{$books->tahun_terbit}}</h7>
                     <br>
                     <h7 class="card-text">Deskripsi : {{$books->description}}</h7>
                     <br>
                     <a class="btn btn-dark mt-4" href="/"  style="background-color: #61876E;" >Back</a>
              </div>
       </div>
</div>

@endsection('content')
