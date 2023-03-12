<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class UserController extends Controller
{
      public function dashboard(Request $request){

       
            if ($request->has('search')) {
                  $books = book::where('title','LIKE','%'.$request->search.'%')
                                      ->orWhere('pengarang', 'like', '%'.$request->search.'%')
                                      ->orWhere('penerbit', 'like', '%'.$request->search.'%')->paginate(10);
                                      
                  Session::put('halaman_url',request()->fullUrl());
                  // halaman_url manggil mana ya
              }else {
                  
                  $books = book::paginate(10);
                  Session::put('halaman_url',request()->fullUrl());
              }
      
          //   menampilkan halaman databuku
             return view('user/dashboard',compact('books'));

     
      }

      public function detail($id){
            $books = book::find($id);
    
            return view('user/detail_buku', compact('books'));
        }
}
