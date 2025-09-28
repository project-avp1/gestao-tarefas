<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'titulo'=> $this->faker->unique()->word,
           'descricao'=> $this->faker->text(200),
           'status'=> $this->faker->randomElement(['pendente','em_andamento','concluida']),
           'data_vencimento'=> $this->faker->dateTimeBetween('now','+1 year')->format('Y-m-d'),
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()
        ];
    }
}
