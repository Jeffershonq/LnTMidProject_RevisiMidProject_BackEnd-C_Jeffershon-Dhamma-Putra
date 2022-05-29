<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\books;

class bookController extends Controller
{
    public function index(){
        $books = books::all();
        return view ('books.index')->with('books', $books);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'judul' => 'required|min:5|max:20',
            'penulis' => 'required|min:5|max:20',
            'jumlah' => 'required|integer|min:1',
            'terbit' => 'required|integer|min:2000|max:2021'
        ]);

        $input = $request->all();
        books::create($input);
        return redirect('books')->with('flash_massage', 'Book Added!');
    }

    public function show($id){
        $books = books::find($id);
        return view('books.show')->with('books',$books);
    }

    public function edit($id){
        $books = books::find($id);
        return view('books.edit')->with('books',$books);
    }

    public function update(Request $request, $id){
        $books = books::find($id);
        
        $request->validate([
            'judul' => 'required|min:5|max:20',
            'penulis' => 'required|min:5|max:20',
            'jumlah' => 'required|integer|min:1',
            'terbit' => 'required|integer|min:2000|max:2021'
        ]);
        
        $input = $request->all();
        $books->update($input);
        return redirect('books')->with('flash_massage', 'Book Updated!');
    }

    public function destroy($id){
        books::destroy($id);
        return redirect('books')->with('flash_massage','Book Deleted!');
    }

    
}
