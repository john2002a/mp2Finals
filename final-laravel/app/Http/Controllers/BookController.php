<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function findAll(){
        $data = Book::get();

        return $data;
    }

    public function findById(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        $input=$request->only('id');
        $id=$input['id'];

        $list = Book::select()->where('id', '=', $id)->get();

        return response()->json($list, 200);
    }

    public function findByGenre(Request $request){
        $request->validate([
            'genre' => 'required|string',
        ]);

        $input=$request->only('genre');
        $genre=$input['genre'];

        $list = Book::select()->where('genre', '=', $genre)->get();

        return response()->json($list, 200);
    }
    
}
