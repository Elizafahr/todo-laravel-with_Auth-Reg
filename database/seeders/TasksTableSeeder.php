<?php

namespace Database\Seeders;
use App\Models\Task;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create(['title' => 'Task 1', 'description' => 'Description 1']);
        Task::create(['title' => 'Task 2', 'description' => 'Description 2']);
    }
}
