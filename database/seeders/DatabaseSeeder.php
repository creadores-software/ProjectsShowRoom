<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        \App\Models\User::factory(2)->create();

        \App\Models\Keyword::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategorySeeder::class);

        \App\Models\Event::factory(10)->create();

        \App\Models\Version::factory(25)->create();

        // \App\Models\Presentation::factory(35)->create();
        $this->call(PresentationSeeder::class);
    }
}