<?php

namespace Database\Seeders;

use App\Models\Sbu;
use Illuminate\Database\Seeder;

class SbuSeeder extends Seeder
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
                'nama_sbu' => 'Head Office',
                'alamat' => 'Jl. Raya Kalimalang, RT.2/RW.11, Pd. Klp., Kec. Duren Sawit, 
                             Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450'
            ],

            [
                'nama_sbu' => 'Kalimalang',
                'alamat' => 'Jl. Raya Kalimalang, RT.2/RW.11, Pd. Klp., Kec. Duren Sawit, 
                             Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13450'
            ],

            [
                'nama_sbu' => 'JDC',
                'alamat' => '10, Jakarta Design Center, Jl. Gatot Subroto No.53, RT.10/RW.6, Petamburan, 
                            Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 
                            10260. 
                            2, Jl. Palmerah Barat IV No.50 - 52 G, RT.2/RW.10, Palmerah, Kec. Palmerah, 
                            Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 10260'
            ],  

            [
                'nama_sbu' => 'Fatmawati',
                'alamat' => 'Jl. RS. Fatmawati Raya No.15G, RT.1/RW.6, Gandaria Utara, Kec. Kby. Baru, 
                             Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12140'
            ],

            [
                'nama_sbu' => 'Suryawijaya',
                'alamat' => 'Jl. Tebet Utara IV B No.5, RT.4/RW.2, Tebet Tim., 
                            Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810'
            ],

            [
                'nama_sbu' => 'Bandung',
                'alamat' => 'Jalan Jenderal Ahmad Yani No.296 Plaza IBCC Blok.B3 No.11-12, 
                             Kacapiring, Batununggal, Bandung City, West Java 40271'
            ],

            [
                'nama_sbu' => 'Semarang',
                'alamat' => 'Jl. Boulevard Bukit Kencana Jaya Ruko AD No. 20, Meteseh, 
                            Kec. Tembalang, Kota Semarang, Jawa Tengah 50271'
            ],

            [
                'nama_sbu' => 'Surabaya',
                'alamat' => 'Jl. Rungkut Asri Utara RL 2F no. 1, Kali Rungkut, 
                            Kec. Rungkut, Kota SBY, Jawa Timur 60293'
            ],

            [
                'nama_sbu' => 'Bali',
                'alamat' => 'Jl. Mahendradatta No.129, Padangsambian, 
                            Kec. Denpasar Bar., Kota Denpasar, Bali 80119'
            ],

            [
                'nama_sbu' => 'Asia',
                'alamat' => 'Jl. Asia, Sei Rengas I, Kec. Medan Kota, 
                            Kota Medan, Sumatera Utara 20211'
            ],

            [
                'nama_sbu' => 'sarah',
                'alamat' => 'Jl. Mayjen D.I Panjaitan No.112/25, Babura, 
                            Kec. Medan Baru, Kota Medan, Sumatera Utara 20154'
            ],
        ];

        Sbu::insert($data);

    }
}
