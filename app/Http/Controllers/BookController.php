<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('CRUD.create');
    }

    public function showForm(BookRequest $request){
        Book::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun
        ]);
        return redirect(route('home'))->with('success','Buku berhasil ditambahkan');
    }
    public function ViewAll(){
        $books = Book::all();
        return view('CRUD.view', ['datas' => $books]);
    }
    public function UpdateForm($id){
        $book = Book::where('id', '=', $id)->first();
        return view('CRUD.update', ['buku' => $book]);
    }

    public function Update(BookRequest $request, $id){
        $BookIDUpdate = Book::find($id);

        $BookIDUpdate->Update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'tahun' => $request->tahun
        ]);
        return redirect(route('ViewAll'))->with('success', 'Buku berhasil diupdate');

    }
    public function Delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect(route('ViewAll'))->with('success', 'Buku berhasil dihapus');
    }
}
