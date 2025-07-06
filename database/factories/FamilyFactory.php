<?php

namespace Database\Factories;

use App\Models\Family;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $guest = Guest::factory()->create();
        return [
            "name"=> fake()->name,
            "responsible_id"=> null,
            "token"=> Str::uuid()
        ];
    }
}
