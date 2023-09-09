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
        Schema::create('user_otp_verify_tables', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('token'); 
            $table->timestamps();
        });
        Schema::table('consults', function (Blueprint $table) {
            $table->boolean('otp_active')->default(0);    
        });
    }  


    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_otp_verify_tables');
    }
};
