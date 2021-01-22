<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BestellungenMig extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('bestellungen', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->id();
          $table->unsignedInteger('User');
          $table->unsignedInteger('Haupt');
          $table->unsignedInteger('Neben');
          $table->foreign('User')
          ->references('id')
          ->on('Personen')
          ->unsigned();
          $table->foreign('Haupt')
          ->references('id')
          ->on('Haupt')
          ->unsigned();
          $table->foreign('Neben')
          ->references('id')
          ->on('Neben')
          ->unsigned();
      });


  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('BestellungenMig');
  }
}
