<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(1,4));
        $datetime = $this->faker->dateTimeBetween('-1 month', 'now');
        $description = "";
        for($i = 0; $i < 5; $i++){
            $description .= '<p class="mb-3">'. $this->faker->sentence(rand(5,10)) .'</p>';
        }
        return [
            'title' => $title,
            'work_type_id' => rand(1,5),
            'slug' => Str::slug($title) . '-'.rand(1111,9999),
            'business_name' => $this->faker->company,
            'description' => $description,
            'location' => $this->faker->city,
            'wage' => rand(0, 2500),
            'contact' => $this->faker->phoneNumber,
            'is_active' => true,
            'urgent' => (rand(1, 9) > 4),
            'number_of_workers' => rand(1, 5),
            'created_at' => $datetime,
            'updated_at' => $datetime
        ];
    }
}
