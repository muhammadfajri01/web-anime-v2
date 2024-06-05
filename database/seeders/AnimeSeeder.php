<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animes')->insert([
            [
                'genre_id' => '1',
                'judul' => 'KAGE NO JITSURYOKUSHA NI NARITAKUTE!',
                'sinopsis' => 'For as long as he can remember, Minoru Kagenou has been fixated on becoming as strong as possible, which has led him to undertake all kinds of rigorous training. This wish, however, does not stem from a desire to be recognized by others; rather, Minoru does everything he can to blend in with the crowd. So, while pretending to be a completely average student during the day, he arms himself with a crowbar and ruthlessly thrashes local biker gangs at night.',
                'tahun_rilis' => '2022',
                'poster' => '1.jpeg'
            ],
            [
                'genre_id' => '1',
                'judul' => 'Black Clover',
                'sinopsis' => 'Black Clover adalah sebuah seri manga shōnen bergenre fantasi asal Jepang yang ditulis dan diilustrasikan oleh Yūki Tabata. Ceritanya mengisahkan tentang seorang anak laki-laki bernama Asta yang lahir tanpa kekuatan sihir, suatu fenomena yang tidak normal di dunia tempatnya tinggal.',
                'tahun_rilis' => '2015',
                'poster' => '2.png'
            ],
            [
                'genre_id' => '1',
                'judul' => 'Bleach',
                'sinopsis' => 'Bleach merupakan sebuah seri manga shōnen Jepang yang ditulis dan diilustrasikan oleh Tite Kubo. Alur ceritanya mengisahkan petualangan remaja keras kepala bernama Ichigo Kurosaki yang mewarisi takdir kedua orangtuanya, setelah dia mendapatkan kekuatan Shinigami.',
                'tahun_rilis' => '2004',
                'poster' => '3.png'
            ],

        ]);
    }
}
