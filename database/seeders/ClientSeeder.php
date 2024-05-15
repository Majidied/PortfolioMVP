<?php

namespace Database\Seeders;

use App\Models\clients;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        clients::factory()->count(10)->create();
        clients::factory()->create([
            'title' => 'John Doe',
            'url' => 'https://cdn-icons-png.freepik.com/512/2814/2814214.png?ga=GA1.2.1367360965.1710516210']);
    }
}
