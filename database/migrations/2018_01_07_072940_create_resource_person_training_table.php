<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcePersonTrainingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_person_training', function (Blueprint $table) {
             
            $table->integer('training_id')->unique();
            $table->integer('resource_person_in')->unique();
            $table->integer('session');
            $table->float('honorariume_per_session');
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
        Schema::dropIfExists('resource_person_training');
    }
}
