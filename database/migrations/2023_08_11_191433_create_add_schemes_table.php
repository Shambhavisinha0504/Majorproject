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
        Schema::create('add_schemes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('scheme_name');
            $table->longText('scheme_description');
            $table->string('scheme_start_date');
            $table->string('scheme_end_date');
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
        Schema::dropIfExists('add_schemes');
    }
};
