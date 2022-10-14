<?php

namespace Database\Factories;

use App\Models\Crud;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crud>
 */
class CrudFactory extends Factory
{
    protected $model = Crud::class;
    /**
     * Define the model's default state.
     
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre',
            'email',
            'phone',
            'shirt'
        ];
    }
}
