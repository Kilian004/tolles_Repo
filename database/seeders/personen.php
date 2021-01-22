<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class personen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('personen')->insertOrIgnore([
      ['Name' => 'Hans'],
      ['Name' => 'Bernd'],
      ['Name' => 'Guenter']

      ]);
    }
}
