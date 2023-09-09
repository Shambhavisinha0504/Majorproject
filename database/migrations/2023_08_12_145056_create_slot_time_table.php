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
        Schema::create('slotdates', function (Blueprint $table) {
            $table->increments('slot_id');
            $table->string('slot_date');
            $table->timestamps();
        });
        Schema::create('slottimes', function (Blueprint $table) {
            $table->increments('time_id');
            $table->string('time_name');
            $table->integer('slot_id');
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
        Schema::dropIfExists('slotdates');
        Schema::dropIfExists('slottimes');
    }
};
