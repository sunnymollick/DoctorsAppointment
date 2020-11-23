<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->index();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->date('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('phone');
            $table->string('image');
            $table->boolean('status');
            $table -> foreign ( 'department_id' )
                    -> references ( 'id' )-> on ( 'departments' )
                    -> onDelete ( 'cascade' );
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
        Schema::dropIfExists('doctors');
    }
}
