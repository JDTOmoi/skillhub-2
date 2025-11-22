<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([ //Semua nama tersebut PALSU.
            'name' => "Desain Grafis",
            'description' => "Kelas tersebut mempelajari semua hal tentang teori warna, vector, dan semua hal menggunakan Adobe Illustrator.",
            'instructor' => "Adi Helvista Mulyono",
        ]);

        DB::table('kelas')->insert([
            'name' => "Pemrograman Dasar",
            'description' => "Kelas tersebut mempelajari coding yang di level fundamental melalui Java.",
            'instructor' => "Natasha Saratov"
        ]);

        DB::table('kelas')->insert([
            'name' => "Editing Video",
            'description' => "Kelas tersebut mempelajari para peserta tentang cara edit video untuk instagram reels, YouTube gaming, dan post-production menggunakan Adobe Premiere Pro CS6.",
            'instructor' => "Muhammad Naseer bin Abdul Razak"
        ]);

        DB::table('kelas')->insert([
            'name' => "Public Speaking",
            'description' => "Kelas tersebut mempersiapkan para peserta dengan sikap baik dan keterampilan fundamental diatas panggung",
            'instructor' => "Nur"
        ]);
    }
}
