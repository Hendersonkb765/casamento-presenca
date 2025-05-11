<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\Guest;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $family1= Family::factory()->create();
        $guestFamilys = Guest::factory(5)->create(['family_id'=>$family1->id]);

        $family1= Family::factory()->create();
        $guestFamilys = Guest::factory(5)->create(['family_id'=>$family1->id]);
        
        $family1= Family::factory()->create();
        $guestFamilys = Guest::factory(5)->create(['family_id'=>$family1->id]);

        Guest::factory(20)->create();
      
        

        
    }
}
