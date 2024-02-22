<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'description_i_can_help' => $this->faker->sentence(),
            'description_get_online_and' => $this->faker->sentence(),
            'resume' => $this->faker->url(),
            'projects' => $this->faker->url(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'name' => $this->faker->name(),
            'description_about_me' => $this->faker->paragraph(5),
            'twitter' => $this->faker->url(),
            'linkedin' => $this->faker->url(),
            'github' => $this->faker->url(),
        ];
    }
}
