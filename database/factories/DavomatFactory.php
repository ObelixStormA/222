<?php

namespace Database\Factories;

use App\Models\Davomat;
use Illuminate\Database\Eloquent\Factories\Factory;

class DavomatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Davomat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kursant_id' => $this->faker->unique()->numberBetween(1, 15),
            'guruh_id' => '2',
            'teach_id'=> '3',
            'kaf_id'=> '8',
            'fan_id' =>'1',
            'davomat' =>'1',
        ];
    }
}
