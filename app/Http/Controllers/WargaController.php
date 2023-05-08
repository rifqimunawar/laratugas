<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWargaRequest;
use App\Http\Requests\UpdateWargaRequest;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = Warga ::latest()->get();
        // dd($warga);
        return view('warga.index', compact('warga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $warga = new Warga ();
        $warga->name = $request->name;
        $warga->alamat = $request->alamat;
        // dd($warga);
        $warga->save();
        return redirect('/warga');
    }

    /**
     * Display the specified resource.
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $edit = Warga::find($id);
        return view('warga.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update($id, Request $request)
     {
         $warga = Warga::find($id);
         $warga->name = $request->name;
         $warga->alamat = $request->alamat;
         $warga->update();

         return redirect('/warga');
     }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy($id)
     {
         $warga = Warga::findOrFail($id);
         $warga->delete();
         return redirect('/warga');
     }
}