<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
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
        $books = Book::paginate(10); 
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        // Lưu dữ liệu
        Book::create($validated);

        // Quay lại trang danh sách sách
        return redirect()->route('books.index')->with('success', 'Sách đã được thêm thành công!');

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
        $book = Book::findOrFail($id);
       return view('books.edit' , ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'year' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        // Tìm sách theo ID và cập nhật
        $book = Book::findOrFail($id);
        $book->update($validated);

        // Quay lại trang danh sách sách
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    $book = Book::findOrFail($id);
    // Xóa sách
    $book->delete();
    return redirect()->route('books.index')->with('success', 'Sách đã được xóa thành công.');
    }
}
