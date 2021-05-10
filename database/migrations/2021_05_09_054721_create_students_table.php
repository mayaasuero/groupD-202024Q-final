<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
   // use DatabaseRefresh;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students')){
            Schema::create('students', function (Blueprint $table) {
                $table->string('id_number')->unique();
                $table->string('firstname',45);
                $table->string('middlename',45);
                $table->string('lastname',45);
                $table->date('birthdate');  
                $table->string('address',100);
                $table->integer('year_level');
                $table->string('course',10);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
