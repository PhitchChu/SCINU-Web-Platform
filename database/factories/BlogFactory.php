<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [ // ฟิวล์จาก model
            'title'=>fake()->name(), //ทำการจำลองข้อมูล
            'content'=>fake()->text(), //จำลองข้อมูลข้อความ
            'status'=>rand(0,1) // สุ่มตัวเลข
        ];
    }
}
