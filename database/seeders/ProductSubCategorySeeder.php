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
                'title' => 'Casement',
                'slug' => 'casement'
            ],
            [
                'category_id' => '1',
                'title' => 'Sliding',
                'slug' => 'sliding'
            ],
            [
                'category_id' => '1',
                'title' => 'Tilt n Turn',
                'slug' => 'tilt-n-turn'
            ],
        ];

        ProductSubCategory::insert($data);
    }
}
