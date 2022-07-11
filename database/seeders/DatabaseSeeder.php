<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use App\Models\Listing;
use App\Models\WorkType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //\App\Models\Tag::factory(10)->create();
        //\App\Models\Listing::factory(10)->create();

        $type = [
            1 => 'fulltime',
            2 => 'parttime',
            3 => 'temporaly',
            4 => 'contract',
            5 => 'intenship'
        ];

        WorkType::create([
            'type' => ucwords($type[1]),
            'slug' => Str::slug(ucwords($type[1])),
        ]);

        WorkType::create([
            'type' => ucwords($type[2]),
            'slug' => Str::slug(ucwords($type[2])),
        ]);

        WorkType::create([
            'type' => ucwords($type[3]),
            'slug' => Str::slug(ucwords($type[3])),
        ]);

        WorkType::create([
            'type' => ucwords($type[4]),
            'slug' => Str::slug(ucwords($type[4])),
        ]);

        WorkType::create([
            'type' => ucwords($type[5]),
            'slug' => Str::slug(ucwords($type[5])),
        ]);

        $tags = Tag::factory(10)->create();

        User::factory(20)->create()->each(function($user) use($tags){
            Listing::factory(rand(1,4))->create([
                'user_id' => $user->id
            ])->each(function($listing) use($tags){
                $listing->tags()->attach($tags->random(2));
            });
        });
    }
}
