<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHauptNebenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('haupt_neben', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->id();
          $table->unsignedInteger('neben_id');
          $table->foreign('neben_id')
            ->references('id')
            ->on('Neben')
            ->unsigned();
          $table->unsignedInteger('haupt_id');
          $table->foreign('haupt_id')
            ->references('id')
            ->on('Haupt')
            ->unsigned();
          /*$table->unsignedInteger('personen_id');
          $table->foreign('personen_id')
            ->references('id')
            ->on('Personen')
            ->unsigned();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('haupt_neben');
    }
}
