<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelneben extends Model
{
  protected $table = 'neben';
  public $timestamps=false;

  protected $id = 'id';
  protected $fillable = ['Gericht','Preis'];


  public function haupt(){
    return $this->belongsToMany(
            \app\Models\Modelhaupt::class,
            'haupt_neben',
            'haupt_id',
            'neben_id');
    }
  





  use HasFactory;


}
