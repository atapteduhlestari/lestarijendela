<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Acara',
                'slug' => 'acara'
            ],
            [
                'title' => 'Berita',
                'slug' => 'berita'
            ],
            [
                'title' => 'Edukasi',
                'slug' => 'edukasi'
            ],
        ];

        PostCategory::insert($data);
    }
}
