<?php

namespace Database\Factories;

use App\Models\SiteContato;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteContato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create('pt_BR');
        $texto = $faker->text(20);

        return [
            'nome' => $faker->name,
            'telefone' => $faker->phoneNumber,
            'email' => $faker->email,
            'motivo_contato' => $faker->numberBetween(1, 3),
            'mensagem' => $texto,
        ];
    }
}