<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory(10)->create();

        $ts = new TelefonSeeder();
        $ts->run();

        $rs = new RacunSeeder();
        $rs ->run();


        $srs = new StavkaRacunaSeeder();
        $srs ->run();
    }
}
