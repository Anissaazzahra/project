<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ortu;

class nisaaa extends Controller
{
    //
    public function index()
    {
    	$a = "Anissaaz";
    	return $a;
    }

    public function tampilmodel()
    {
    	$ortu = ortu::all();
    	return $ortu;
    }

    public function tampilmodel1()
    {
    	return view('about');
    }

    public function percobaan()
    {
    	$ortu = ortu::all();
    	return view('index',compact('ortu'));
    }

    public function percobaan2()
    {
    	$ortu = ortu::all();
    	return view('index',compact('ortu'));
    }
}
