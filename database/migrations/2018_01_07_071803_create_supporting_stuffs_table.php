<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportingStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporting_stuffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_id')->unique();
            $table->string('name');
            $table->string('designation');
            $table->string('organization');
            $table->float('honorarium_amount');
            $table->boolean('staff_type');
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
        Schema::dropIfExists('supporting_stuffs');
    }
}
