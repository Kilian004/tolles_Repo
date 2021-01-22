<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modelneben;

class Modelhaupt extends Model
{
    protected $table = 'haupt';
    public $timestamps = false;

    protected $id = 'id';
    protected $fillable = ['Gericht','Preis'];

    public function neben(){
      return $this->belongsToMany(
              \app\Models\Modelneben::class,
              'haupt_neben',
              'neben_id',
              'haupt_id');
      }
      



    use HasFactory;
}
