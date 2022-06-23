<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //To add data
        // Teacher::factory(1000)->create();

        //delete data
        // Teacher::truncate();

        Comment::factory(100)->create();

    }
}
