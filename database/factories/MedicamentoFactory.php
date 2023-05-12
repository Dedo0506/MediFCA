<?php

namespace Database\Factories;

use App\Models\medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\medicamento>
 */
class MedicamentoFactory extends Factory
{
/**
     * the name of the corresponding model
     * 
     * @var string
     */
    protected $model = medicamento::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            //
            'nombre'=>$this->faker->randomElement(['paracetamol','diclofenaco', 'ketorolaco']),
            'tipo'=>$this->faker->randomElement(['tabletas','capsulas','ampolla']),
            'presentacion'=>$this->faker->randomElement(['caja','solucion']),
            'fecha'=>$this->faker->dateTimeBetween('-2 months', 'now'),
            'gramaje'=>$this->faker->numberBetween(150,800),
            'fecha_caducidad'=>$this->faker->dateTimeBetween('now', '+2 years'),
            'unidades'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
