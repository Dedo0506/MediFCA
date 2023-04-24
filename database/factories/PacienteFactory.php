<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class PacienteFactory extends Factory
{
    /**
     * the name of the corresponding model
     * 
     * @var string
     */
   protected $model = Paciente::class;
    
    /**
     * Define the model's default state.
     *
     * @return array, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' =>$this->faker->firstName(),
            'appaterno' =>$this->faker->lastName(),
            'apmaterno' =>$this->faker->lastName(),
            'nocuenta' =>$this->faker->unique()->numberBetween(100000000,900000000),
            'sexo'=>$this->faker->randomElement(['M','F']),
            'fecNac'=>$this->faker->dateTimeBetween('1995-00-01', '2004-12-31'),
            'carrera' =>$this->faker->randomElement(['Administracion', 'Contaduria', 'Informatica', 'Negocios internacionales']),
            'semestre' =>$this->faker->numberBetween(1, 8),
            'grupo' =>$this->faker->numberBetween(1000,3000),
        ];
    }
}
