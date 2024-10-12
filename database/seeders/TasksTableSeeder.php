<?php

namespace Database\Seeders;
use App\Models\Task;
use App\Models\User;

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
        $user = User::where('email', 'john@example.com')->first();

        Task::create([
            'title' => 'Task 1',
            'description' => 'Description 1',
            'user_id' => $user->id
        ]);

        Task::create([
            'title' => 'Task 2',
            'description' => 'Description 2',
            'user_id' => $user->id
        ]);
    }
}
