<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    	$judul="<i style='color :#62f442'><u>Smk Assalaam</i></u>";
    	$tanggal='<i>09-01-2020</i>';
    	return view('about',compact('judul','tanggal'));
    }
}
