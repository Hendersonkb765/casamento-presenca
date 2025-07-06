<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\Guest;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
      for ($i = 0; $i < 3; $i++) {
        $family = Family::factory()->create();

    
        $responsibleGuest = Guest::factory()->create(['family_id' => $family->id]);

   
        $family->update(['responsible_id' => $responsibleGuest->id]);

     
        Guest::factory(4)->create(['family_id' => $family->id]);
        }


        Guest::factory(20)->create();
        

        
    }
}
