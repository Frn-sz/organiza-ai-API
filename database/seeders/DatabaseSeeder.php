<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TaskPrioritySeeder;
use Database\Seeders\TaskStatusSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(
            [
                UserSeeder::class,
                TaskPrioritySeeder::class,
                TaskStatusSeeder::class,
                TaskSeeder::class,
            ]
        );
    }
}
