<?php

use Illuminate\Database\Seeder;

class barangseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
        ['kode_barang'=>'1.',
    		'nama_barang'=>'NasiGoreng',
    		'harga'=>'1000'],
            ['kode_barang'=>'2.',
            'nama_barang'=>'NasiBagus',
            'harga'=>'2002'],
            ['kode_barang'=>'3.',
            'nama_barang'=>'MieBaso',
            'harga'=>'3003'],
            ['kode_barang'=>'4.',
            'nama_barang'=>'Kwetiauw',
            'harga'=>'4004'],
            ['kode_barang'=>'5.',
            'nama_barang'=>'Capcay',
            'harga'=>'5005'],
            ['kode_barang'=>'6.',
            'nama_barang'=>'MieRebus',
            'harga'=>'6006']

        ];
    		  
       DB::table('barangs')->insert($a); 
   }

}
