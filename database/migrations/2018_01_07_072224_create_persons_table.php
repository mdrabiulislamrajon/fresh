<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('govt_id')->unique();
            $table->string('name_en');
            $table->string('name_bn');
            $table->string('district');
            $table->timestamp('dob');
            $table->string('rank');
            $table->string('sex');
            $table->boolean('marital_status');
            $table->string('spouse_name')->nullable();
            $table->string('father_name_bn');
            $table->string('father_name_en');
            $table->string('mother_name_bn');
            $table->string('mother_name_en');
            $table->timestamp('lpr_date')->nullable();
            $table->string('religion');
            $table->boolean('freedom_fighter_quta');
            $table->string('child_or_grand_child_of_off');
            $table->timestamp('date_of_confirmation')->nullable();
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
        Schema::dropIfExists('people');
    }
}
