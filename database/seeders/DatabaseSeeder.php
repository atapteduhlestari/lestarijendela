<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostCategorySeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSubCategorySeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();

        //ary sitepu
        $this->call(ProfileSeeder::class);
        $this->call(FaqSeeder::class);
    }
}
