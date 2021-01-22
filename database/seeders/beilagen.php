<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class beilagen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('neben')->insertOrIgnore([
      ['Gericht' => 'Pommes','Preis'=>2.5],
      ['Gericht' => 'Reis','Preis'=>3.5],
      ['Gericht' => 'Gemuese','Preis'=>4],
      ['Gericht' => 'Salat','Preis'=>3],


      ]);
    }
}
