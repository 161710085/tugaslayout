<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class LatihanController extends Controller
{
    public function coba()
	{
	return'Ini Controller Pertama Saya';
	}

	public function about()
		{
			return view('about');
		}	

		public function profil()
		{
			return view('profil');
		}

		public function pertambahan()
		{
			$a=7;
			$b=18;
			$c=$a+$b;
			return view('tambah',compact('c','a','b'));
		}
		public function loop()
		{
			$a=['tatang','ahmad','gilang'];
			return view('pengulangan',compact('a'));
		}
		public function barang()
		{
			//menampilkan data barang secara kesuluruhan
			$a =barang::all();
			return $a;
		}
		public function abarang()
		{
				$a =barang::all();
			return view('barang',compact('a'));
		}
}


