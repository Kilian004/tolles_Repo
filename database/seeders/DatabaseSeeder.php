<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        


         $this->call('Database\Seeders\beilagen');
         $this->call('Database\Seeders\hauptspeisen');
         $this->call('Database\Seeders\personen');
    }
}
