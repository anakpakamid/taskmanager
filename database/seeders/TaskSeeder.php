<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $users = User::all();
        $categories = Category::all();

        if ($users->isEmpty()) {
            $this->command->info('No users found. Please run UserSeeder first.');
            return;
        }

        if ($categories->isEmpty()) {
            $this->command->info('No categories found. Please run CategorySeeder first.');
            return;
        }

        $taskTitles = [
            'Complete project documentation',
            'Review code changes',
            'Meeting with client',
            'Update website content',
            'Fix bug in authentication',
            'Design new landing page',
            'Test mobile application',
            'Write unit tests',
            'Deploy to production',
            'Backup database',
            'Update user manual',
            'Create marketing materials',
            'Schedule team meeting',
            'Review quarterly reports',
            'Optimize database queries',
            'Implement new features',
            'Security audit',
            'Performance testing',
            'User feedback analysis',
            'Plan next sprint',
        ];

        $statuses = ['Pending', 'In_progress', 'Completed'];

        // Create tasks with predefined titles
        foreach ($taskTitles as $title) {
            Task::create([
                'title' => $title,
                'description' => $faker->paragraph(2),
                'status' => $faker->randomElement($statuses),
                'category_id' => $categories->random()->id,
                'assigned_to' => $users->random()->id,
                'created_at' => $faker->dateTimeBetween('-2 months', 'now'),
                'updated_at' => now(),
            ]);
        }

        // Create additional random tasks
        for ($i = 0; $i < 30; $i++) {
            Task::create([
                'title' => $faker->sentence(4),
                'description' => $faker->optional(0.8)->paragraph(1),
                'status' => $faker->randomElement($statuses),
                'category_id' => $categories->random()->id,
                'assigned_to' => $users->random()->id,
                'created_at' => $faker->dateTimeBetween('-3 months', 'now'),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('Created ' . (count($taskTitles) + 30) . ' tasks successfully!');
    }
}
