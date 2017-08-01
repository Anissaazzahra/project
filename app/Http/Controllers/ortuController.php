<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ortu;

class ortuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ortus = ortu::with('siswa')->get();
        return view('ortu.index',compact('ortu'));
           }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ortu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ortu = new ortu;
        $ortu->nama_ayah = $request->a;
        $ortu->nama_ibu = $request->b;
        $ortu->umur_ayah = $request->c;
        $ortu->umur_ibu = $request->d;
        $ortu->alamat = $request->e;
        $ortu->save();
        return redirect('ortu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ortu = ortu::findOrFail($id);
        return view('ortu.show',compact('ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ortu = ortu::findOrFail($id);
        return view('ortu.edit',compact('ortu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ortu = ortu::findOrFail($id);
        $ortu->nama_ayah = $request->a;
        $ortu->nama_ibu = $request->b;
        $ortu->umur_ayah = $request->c;
        $ortu->umur_ibu = $request->d;
        $ortu->alamat = $request->e;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
                $ortu = ortu::findOrFail($id);
                $ortu->delete();
                return redirect(' ortu');
    }
}
