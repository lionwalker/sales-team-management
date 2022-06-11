<?php

namespace Database\Seeders;

use App\Models\SalesPerson;
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
        SalesPerson::factory(100)->create();
    }
}
