<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBestellungen extends Model
{
  protected $table = 'bestellungen' ;
  public $timestamps=false;


  protected $fillable = ['User','Haupt','Neben'];



    use HasFactory;
}
