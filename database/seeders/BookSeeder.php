<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The WereWolf',
            'pengarang' => 'A.P.Gunawan',
            'penerbit' => 'Gosindo',
            'tahun_terbit' => '2023',
            'cover' => 'https://img.freepik.com/premium-photo/scary-black-werewolf-illustration-full-body-3d-rendering_691560-3275.jpg',
            'description' => 'Manusia Serigala yang tanpan, namun selalu di campakan oleh para wanita manusia karena sebab di anggap aneh, hingga dia menemukan satu wanita cantik yg menerimanya apa adanya',
        ]);
    }
}
