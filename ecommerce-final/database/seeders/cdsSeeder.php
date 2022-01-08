<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cds;

class cdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // cds
        cds::factory()->count(100)->create();
    }
}
