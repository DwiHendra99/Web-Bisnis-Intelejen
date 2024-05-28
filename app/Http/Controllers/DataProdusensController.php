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
    public function edit(DataProdusens $dataProdusens)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataProdusens $dataProdusens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataProdusens $dataProdusens)
    {
        //
    }
}
