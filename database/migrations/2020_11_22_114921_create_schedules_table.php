<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id')->index();
            $table->unsignedBigInteger('department_id')->index();
            $table->string('available_days');
            $table->integer('morning_shift')->nullable();
            $table->integer('evening_shift')->nullable();
            $table->boolean('status');
            $table -> foreign ( 'doctor_id' )
                    -> references ( 'id' )-> on ( 'doctors' )
                    -> onDelete ( 'cascade' );
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
        Schema::dropIfExists('schedules');
    }
}
