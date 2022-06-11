<?php

namespace Database\Factories;

use App\Models\SalesPerson;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesPersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SalesPerson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->e164PhoneNumber,
            'current_routes' => $this->faker->streetName,
            'joined_date' => $this->faker->date('Y-m-d'),
            'comments' => $this->faker->text()
        ];
    }
}
