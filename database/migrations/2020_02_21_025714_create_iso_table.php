<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iso', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('iso_9001');
            $table->text('iso_45001');
            $table->text('iso_14001_1');
            $table->text('iso_14001_2');
            $table->text('iso_14001_3');

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
        Schema::dropIfExists('iso');
    }
}
