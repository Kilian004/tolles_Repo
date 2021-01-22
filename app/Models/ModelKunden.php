<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKunden extends Model
{
  protected $table = 'personen';
  public $timestamps=false;


  protected $fillable = ['Name'];

  

    use HasFactory;
}
