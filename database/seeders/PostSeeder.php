<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'id' => 2,
            'title' => "PPKMB Unimma",
            'deskripsi' => "Tahun ajaran baru 2020",
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Post::insert($data);
    }
}
