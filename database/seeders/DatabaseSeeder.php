<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use WebWhales\LaravelMultilingual\Models\Locale;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Locale::create([
            'locale' => 'en',
            'slug' => 'en',
            'name' => 'English',
            'default_language' => true,
        ]);

        Locale::create([
            'locale' => 'nl',
            'slug' => 'nl',
            'name' => 'Nederlands',
        ]);

        Locale::create([
            'locale' => 'fr',
            'slug' => 'fr',
            'name' => 'France',
        ]);

        $this->call(PostSeeder::class);
    }
}
