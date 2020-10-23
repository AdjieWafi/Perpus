<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);

        return view ('frontend.book.index',[
            'books' => $books,
        ]
    );

    }

    public function show(Book $book)
    {
        return view ('frontend.book.show',[
            'title' => $book->title,
            'book' => $book,
        ]);
    }

    public function borrow(Request $request,Book $book)
    {
       $user = $request->user();

       if($user->borrow()->isStillBorrow($book->id)){
           return redirect()->back()->with('toast', 'Kamu sudah meminjam buku dengan judul : ' . $book->title );
       }


       $user->borrow()->attach($book);
       $book->decrement('qty');

        return redirect()->back()->with('toast', 'Berhasil Meminjam Buku');
    }
}
