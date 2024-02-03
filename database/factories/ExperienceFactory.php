<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\JobTitle;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->paragraph(4, true),
            'current' => $current = $this->faker->boolean(),
            'started_at' => $this->faker->date(),
            'finished_at' => $current ? null : $this->faker->date(),
            'job_title_id' => JobTitle::factory(),
            'company_id' => Company::factory(),
            'profile_id' => Profile::factory(),

        ];
    }
}
