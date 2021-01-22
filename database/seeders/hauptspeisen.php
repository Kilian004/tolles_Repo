<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class hauptspeisen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Haupt')->insertOrIgnore([
      ['Gericht' => 'Huhn','Preis'=>9.50],
      ['Gericht' => 'Schnitzel','Preis'=>12.70],
      ['Gericht' => 'Steak','Preis'=>15.60],
      ['Gericht' => 'Tofu','Preis'=>4.90],
  ]);
    }
}
