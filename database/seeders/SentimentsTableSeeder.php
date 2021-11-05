<?php

namespace Database\Seeders;

use App\Models\Sentiments;
use Illuminate\Database\Seeder;

class SentimentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //// Let's truncate our existing records to start from scratch.
        Sentiments::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            $value = ($i * 100) / 2;
            Sentiments::create([
                'groupName' => $faker->sentence,
                'negative' => $value,
                'negative' => $value,
                'positive' => $value,
                'overallPercentage' => $value,

            ]);
            // Sentiments::create([
            //     'groupName' => $faker->name,
            //     'negative' => $faker->paragraph,
            //     'negative' => $faker->paragraph,
            //     'positive' => $faker->paragraph,
            //     'overallPercentage' => $faker->paragraph,

            // ]);
        }
    }
}