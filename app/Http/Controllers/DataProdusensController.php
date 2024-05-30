<?php

namespace App\Http\Controllers;

use App\Models\DataProdusens;
use Illuminate\Http\Request;

class DataProdusensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = DataProdusens::all();
        return view('admin/index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $contents = DataProdusens::all()->first();
        return view('home', compact('contents'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $content = DataProdusens::findOrFail($id);
        return view('admin/update', compact('content'));
    }

    // Metode untuk memperbarui konten
    public function update(Request $request, $id)
    {
        $content = [
            'content' => 'required',
        ];
        // Validasi input
        // $validatedData = $request->validate($content);

        $validatedData = $request->validate([
            'content' => 'required'
        ]);


        // Cari konten berdasarkan ID
        $contents = DataProdusens::find($id);
        // dd($contents);
        // Perbarui deskripsi konten
        $contents->update($validatedData);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('contents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataProdusens $dataProdusens)
    {
        //
    }
}
