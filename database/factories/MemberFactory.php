<?php

namespace Database\Factories;
use App\Models\Member;
use App\Models\User;
use App\Models\Family;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
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
            'role' =>fake()->randomElement(['father', 'mother', 'son', 'daughter', 'grandfather', 'grandmother', 'grandson', 'granddaughter', 'uncle', 'aunt', 'nephew', 'niece', 'cousin', 'friend']),
            'user_id' => 1,
            'family_id' => 1,
        ];
    }
}
