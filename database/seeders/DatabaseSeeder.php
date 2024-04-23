<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Egresado;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         // Create user
         \App\Models\User::factory()->create([
            'name' => 'ADMINISTRADOR',
            'email' => '123456789',
            'password' => bcrypt('123456789'),

        ]);

        // Create user 2
        \App\Models\User::factory()->create([
            'name' => 'REGIONAL',
            'email' => '0123456789',
            'password' => bcrypt('0123456789'),
        ]);
                // Create user3
        \App\Models\User::factory()->create([
            'name' => 'CENTRO',
            'email' => '987654321',
            'password' => bcrypt('987654321'),

        ]);
        // Create user4
        \App\Models\User::factory()->create([
            'name' => 'EGRESADO',
            'email' => '1234567890',
            'password' => bcrypt('1234567890'),

        ]);

       

        Category::factory(4)->create();
        Tag::factory(8)->create();
        Egresado::factory(10)->create();
        Post::factory(100)->create();
        

        $this->call(Postseeder::class);

        $this->call(RoleSeeder::class);
    }
}
