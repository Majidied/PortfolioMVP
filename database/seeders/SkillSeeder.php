<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        skills::factory()->count(10)->create();
    }
}
