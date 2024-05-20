<?php

namespace Database\Factories;
use app\Models\medicine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class medicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this ->faker->word(),
            'dosificacion'=>$this->faker->paragraph(1),
            'usos'=>$this->faker->paragraph(1),
            'contraIndicaciones'=>$this->faker->paragraph(1),
            'administracion'=>$this->faker->paragraph(1),   
        ];
    }
}
