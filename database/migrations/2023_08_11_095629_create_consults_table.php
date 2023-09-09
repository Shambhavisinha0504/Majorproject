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
        Schema::create('consults', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phonenumber');
            $table->string('email_id');
            $table->string('aadharnumber');
            $table->string('address');
            $table->string('category');
            $table->string('consultant');
            $table->string('payment_type');
            $table->string('result');
            $table->string('date');
            $table->string('time');
           // $table->string('otp_active');
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
        Schema::dropIfExists('consults');
    }
};
