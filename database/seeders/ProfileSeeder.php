<?php

namespace Database\Seeders;

use App\Models\Profile;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
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
                'name' => 'LESTARI JENDELA',
                'no_tlp' => '08125656565',
                'email' => 'lesatrijendela@gmail.com',
                'address' => 'Jababeka',
                'description' => 'Lestari jendela adalah perusahaan yang bergerak dibidang
                                penjualan bahan jendela juga pemasangan jendela UPVC dan aluminium'
            ]
        ];

        Profile::insert($data);
    }
}
