<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'question' => 'Apa itu Jendela Lestari?.',
                'answer' => 'Jendela Lestari adalah tempat menjual bahan jendela dan pintu juga 
                            menawarkan jasa pemasangan jendela dan pintu'
            ],

            [
                'question' => 'Dimana jendela lestari',
                'answer' => 'Jendela lestari beralamat di jababeka'
            ],

            [
                'question' => 'Kenapa harus jendela lestari',
                'answer' => 'Jendela lestari menggunakan profile tonish sebagai bahan dari pada uPVC yang dijual
                            juga melakukan jasa pemasangan dengan sangat baik dari orang yang profesional'
            ],
        ];

        Faq::insert($data);
    }
}
