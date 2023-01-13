<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('fathername');
            $table->string('email');
            $table->text('address');
            $table->string('phone');
            $table->string('cnic');
            $table->string('department');
            $table->string('salary');
            $table->string('gender');
            $table->string('status');
            $table->text('education');
            $table->string('experience');
            $table->string('religion');
            $table->string('image');
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
        Schema::dropIfExists('employee');
    }
};
