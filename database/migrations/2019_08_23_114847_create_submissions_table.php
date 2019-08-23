<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('residence');
            $table->string('nationality');
            $table->string('marital_status');
            $table->string('major');
            $table->string('degree');
            $table->string('university');
            $table->string('years_of_experience');
            $table->string('employment_status');
            $table->string('expected_salary');
            $table->string('phone_number');
            $table->string('email');
            $table->string('visa_status');
            $table->text('bio')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}
