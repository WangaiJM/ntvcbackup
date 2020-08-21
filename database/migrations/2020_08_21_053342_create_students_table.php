<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('idNumber')->unique();
            $table->string('address');
            $table->string('postalcode');
            $table->string('town');
            $table->string('email')->unique();
            $table->string('contacts');
            $table->string('dateofbirth');
            $table->string('gender');
            $table->string('lastschool');
            $table->string('religion');
            $table->string('course');
            $table->string('gsurname');
            $table->string('gfirstname');
            $table->string('glastname');
            $table->string('gaddress');
            $table->string('gpostalcode');
            $table->string('gtown');
            $table->string('gcontacts');
            $table->string('ggender');
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
        Schema::dropIfExists('students');
    }
}
