<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $buku =Buku::create([
        //     "judul"=> "John Doe",
        //     "penulis"=> "eko",
        //     "harga"=> 120000,
        //     "tgl_terbit"=>now()
        // ]);
        Buku::factory(10)->create();
    }
}
