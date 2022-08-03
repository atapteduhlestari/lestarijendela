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
                'no_tlp' => '(021)-8646-506',
                'email' => 'lestarijendela@gmail.com',
                'address' => 'Jababeka 1, Jl. Jababeka XVIIB Unit U20A Harja Mekar, Cikarang Utara, Bekasi, 13450 Indonesia.',
                'description' => 'Lestari Jendela merupakan merk dagang untuk produk kusen/frame, daun pintu dan jendela yang diproduksi oleh PT. Atap Teduh Lestari. Lestari Jendela memiliki 2 jenis material yang ditawarkan sebagai pilihan yaitu uPVC dan Aluminium. Dengan beragam tipe kusen/frame standard maupun custom sesuai dengan kebutuhan pelanggan.'
            ]
        ];

        Profile::insert($data);
    }
}
