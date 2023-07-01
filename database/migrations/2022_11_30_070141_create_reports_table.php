<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('farmloc');
            $table->string('areahectare');
            $table->string('insuredcrop');
            $table->string('varietyplanted');
            $table->string('sowingdate');
            $table->string('plantingdate');
            $table->string('causeofloss');
            $table->string('lossdate');
            $table->string('stageofplant');
            $table->string('croplossess');
            $table->string('areadamage');
            $table->string('damagepercent');
            $table->string('harvestdate');
            $table->string('email');
            $table->string('image_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
