<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => fake()->title,
            'thumbnail_url' =>'thumbnail/k60nuMbbBz6cz9lqlDHIdeK4kp48kyGC43TT0Ysf.png',
            'video' => 'videos/yC6eJNXLey8ujgxVTrha7rlcmkf5uylWq1BQB0wZ.mp4'
        ];
    }
}
