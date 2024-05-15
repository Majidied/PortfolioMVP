<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement(['Client 1', 'Client 2', 'Client 3']),
            'url' => $this->faker->randomElement([
                'https://cdn-icons-png.freepik.com/512/2814/2814214.png?ga=GA1.2.1367360965.1710516210',
                'https://cdn-icons-png.freepik.com/512/10903/10903984.png?ga=GA1.2.1367360965.1710516210',
                'https://cdn-icons-png.freepik.com/512/3047/3047134.png?ga=GA1.2.1367360965.1710516210'
            ]),
        ];
    }
}
