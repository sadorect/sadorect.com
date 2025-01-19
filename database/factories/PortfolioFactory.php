<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
{
    protected $model = Portfolio::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'image' => 'portfolio/default.jpg',
            'project_url' => $this->faker->url,
            'category' => $this->faker->randomElement(['web', 'app', 'network']),
            'client' => $this->faker->company,
            'completion_date' => $this->faker->dateThisYear(),
            'is_active' => true,
        ];
    }
}
