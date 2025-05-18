<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Real Estate',
            'HR Consultancy',
            'Loans',
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
