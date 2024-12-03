<?php

namespace Database\Seeders;

use App\Models\Author;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $authors = [];
        for ($i = 1; $i <= 1000; $i++) {
            Author::upsert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
            ], ['email']);
        }

    }
}
