<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\books;



class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////for books
        books::factory()->count(100)->create();
        
    }
}
