<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->index();
            $table->unsignedBigInteger('department_id')->index();
            $table->unsignedBigInteger('doctor_id')->index();
            $table->string('appointment_day');
            $table->boolean('shift');
            $table->boolean('status');
            $table -> foreign ( 'patient_id' )
                    -> references ( 'id' )-> on ( 'patients' )
                    -> onDelete ( 'cascade' );
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
        Schema::dropIfExists('appointments');
    }
}
