<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSubCategorySeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
