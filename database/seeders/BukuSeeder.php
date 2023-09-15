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
        //     ""
        // ]);
        // $buku = new Buku();
        // $buku->name ='Belajar Laravel';
        // $buku->category ='Pemrograman';
        // $buku->save();
        Buku::factory(2)->create();
    }
}
