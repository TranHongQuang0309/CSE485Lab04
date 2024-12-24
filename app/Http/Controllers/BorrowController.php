<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');  

    }
    public function index()
    {
        //
        $borrows = Borrow::with('reader', 'book')->paginate(10);
        return view('borrows.index', ['borrows' => $borrows]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.create', compact('readers', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
        ]);

        Borrow::create($request->all());

        return redirect()->route('borrows.index')->with('success', 'Mượn sách thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $borrow = Borrow::findOrFail($id);
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.edit', compact('borrow', 'readers', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date',
            'status' => 'required|string',
        ]);

        $borrow = Borrow::findOrFail($id);
        $borrow->update($request->all());

        return redirect()->route('borrows.index')->with('success', 'Cập nhật thông tin mượn trả thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $borrow = Borrow::findOrFail($id);  
        $borrow->delete();
        return redirect()->route('borrows.index')->with('success', 'Xóa thanh cong.');
    }
}
