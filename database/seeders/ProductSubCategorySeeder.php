<?php

namespace Database\Seeders;

use App\Models\ProductSubCategory;
use Illuminate\Database\Seeder;

class ProductSubCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_id' => '1',
                'title' => 'Jendela',
                'slug' => 'jendela'
            ],
            [
                'category_id' => '1',
                'title' => 'Pintu',
                'slug' => 'pintu'
            ],
            [
                'category_id' => '1',
                'title' => 'Kusen',
                'slug' => 'kusen'
            ],
        ];

        ProductSubCategory::insert($data);
    }
}
