<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use WebWhales\LaravelMultilingual\Models\Locale;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locales    = Locale::query()->get();
        $mainLocale = $locales->shift();

        for ($i = 0; $i < 10; $i++) {
            $post = Post::factory(['locale_id' => $mainLocale->id])->createOne();

            foreach ($locales as $locale) {
                $post->attachTranslation(
                    Post::factory(['locale_id' => $locale->id])->createOne()
                );
            }
        }
    }
}
