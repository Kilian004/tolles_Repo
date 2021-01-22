<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;
use App\Models\Modelneben;
use App\Models\ModelKunden;
use App\Models\ModelBestellungen;

class UserController extends Controller
{
    public function index()
    {
      /*echo \App\Models\Modelhaupt::find(1);
      echo "<br>";
      echo \App\Models\Modelhaupt::find(2);
      echo "<br>";
      echo \App\Models\Modelhaupt::find(3); */

      $this->add('kiko','Steak','Reis');
      //$this->printBestellungen();
      return $this->mTm();

    }

    public function add($name,$haupt,$neben)
    {
      $hauptT=\App\Models\Modelhaupt::where('Gericht',$haupt)->get();
      $nebenT=\App\Models\Modelneben::where('Gericht',$neben)->get();

      $user = \App\Models\ModelKunden::where('Name', '=', $name)->first();
        if ($user === null) {
            \App\Models\ModelKunden::create([
              'Name'=>$name,
            ]);
          }
      $nameT=\App\Models\ModelKunden::where('Name',$name)->get();
      //echo $nameT;

        $idh= $hauptT[0] -> id ;
        $idn= $nebenT[0] -> id ;
        $idu= $nameT[0]-> id ;

        //echo '<br>' . $idh . '  ' . $idn;
        \App\Models\ModelBestellungen::create([
          'User'=>$idu,
          'Haupt'=>$idh,
          'Neben'=>$idn
        ]);

    }

    public function printBestellungen(){
      $var=DB::table('bestellungen')
      ->join('personen', 'bestellungen.user', '=', 'personen.id')
      ->join('neben', 'bestellungen.Neben', '=', 'neben.id')
      ->join('haupt', 'bestellungen.Haupt', '=', 'haupt.id')
      ->select('haupt.Gericht', 'haupt.Preis', 'neben.Gericht as nebengericht', 'personen.Name')
      ->get();

      echo "<pre>" . DB::table('neben')->get();
      echo "<pre>";
      print_r($var);
      echo "done!";


    }




    public function mTm(){
      $hauptM = \app\Models\Modelhaupt::find(3);
      $hauptM->neben()->attach(3);

      $out=\app\Models\Modelhaupt::find(3)->neben;
      //echo "<pre>";
      echo \app\Models\Modelhaupt::find(3);
      echo "<br>";
      echo "<br>";
      echo "->";
      echo "<br>";
      echo "<br>";
      echo $out;

      return View('test',['test'=>'KLAPPT']);




    }
}
