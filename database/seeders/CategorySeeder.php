<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Work',
                'color' => '#3B82F6', // Blue
            ],
            [
                'name' => 'Personal',
                'color' => '#10B981', // Green
            ],
            [
                'name' => 'Urgent',
                'color' => '#EF4444', // Red
            ],
            [
                'name' => 'Shopping',
                'color' => '#8B5CF6', // Purple
            ],
            [
                'name' => 'Health',
                'color' => '#F59E0B', // Yellow
            ],
            [
                'name' => 'Learning',
                'color' => '#06B6D4', // Cyan
            ],
            [
                'name' => 'Meeting',
                'color' => '#EC4899', // Pink
            ],
            [
                'name' => 'Travel',
                'color' => '#84CC16', // Lime
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $this->command->info('Created ' . count($categories) . ' categories successfully!');
    }
}
