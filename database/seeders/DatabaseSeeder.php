<?php

namespace Database\Seeders;

use App\Models\GeoLoc;
use App\Models\Message;
use App\Models\Tag;
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
        $messages = Message::factory(100)
            ->has(Tag::factory()->count(3))
            ->create();    

        foreach($messages as $message)
        {
            $geolocs = GeoLoc::factory()
                ->for($message)
                ->create();
        }

    }
}
