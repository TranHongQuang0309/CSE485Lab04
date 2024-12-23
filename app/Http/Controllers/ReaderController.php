<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reader;

class ReaderController extends Controller
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
        $readers = Reader::paginate(10); 
        return view('readers.index', ['readers' => $readers]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readers.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Reader::create($validated);

        return redirect()->route('readers.index'); 
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
        
        $reader = Reader::findOrFail($id);
        return view('readers.edit', ['reader' => $reader]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);


        $reader = Reader::findOrFail($id);
        $reader->update($validated); 

        return redirect()->route('readers.index')->with('success', 'Độc giả đã được sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
        $reader = Reader::findOrFail($id);
        $reader->delete(); 

        return redirect()->route('readers.index')->with('success', 'Độc giả đã được xóa thành công.');
    }
}
