<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance>
 */
class MaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'site' => $this->faker->name(),
            'reference' => $this->faker->name(),
            'status' => $this->faker->name(),
            'diagnostique' => $this->faker->sentence(),
            'comment' => $this->faker->sentence(),
            'observation' => $this->faker->name(),
            'action' => $this->faker->sentence(),
            'image' => 'monitoring.png' .rand(10, 255) ,
            'leave_code' => $this->faker->numerify(),
            'team_id' => Team::all()->random()->id,
            'date' => $this->faker->date(),
        ];
    }
}
