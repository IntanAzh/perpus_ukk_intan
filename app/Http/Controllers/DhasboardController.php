<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use App\Exports\DatabukuExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class DhasboardController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();
         
        if($request->has('search')){
            $books = Book::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);

        } else {
            $books = Book::paginate(5);
        }
        return view('pages.dhasboard',compact('books'));
    }

    public function exportpdf()
    {
    	$books = Book::all();
 
        view()->share('book', $books);
    	$pdf = PDF::loadview('pages.databuku-pdf');
        return $pdf->download('book.pdf');
    }

    public function export_excel()
	{
		return Excel::download(new DatabukuExport, 'databuku.xlsx');
	}

}
