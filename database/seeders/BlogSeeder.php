<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog; // นำเข้า models blog

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //นำเอาตัว factory มาใช้
        Blog::factory()->count(10)->create();
    }
}
