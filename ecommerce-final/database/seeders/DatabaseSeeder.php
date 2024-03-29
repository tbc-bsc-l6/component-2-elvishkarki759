<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        $this->call([
            booksSeeder::class,
        ]);

        //cds
// cds::factory(20)->create();
        //games
// games::factory(20)->create();

    }
}
