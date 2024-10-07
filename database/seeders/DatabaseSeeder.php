<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::create(['title' => 'Task 1', 'description' => 'Description 1']);
        Task::create(['title' => 'Task 2', 'description' => 'Description 2']);

    }
}
