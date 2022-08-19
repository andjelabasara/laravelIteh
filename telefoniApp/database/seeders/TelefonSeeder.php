<?php

namespace Database\Seeders;

use App\Models\Telefon;
use Illuminate\Database\Seeder;

class TelefonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Telefon::factory(10)->create();
    }
}
