<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Feedback;
use App\Models\SocialPlatform;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feedback::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'platform_id' => SocialPlatform::all()->random()->id,
            'brand_id'  => Brand::all()->random()->id,
            'comment' => $this->faker->realText($maxNbChars = 100)
        ];
    }
}
