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
        Schema::create('submit_scheme_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->longText('password');
            $table->string('confirmPassword');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone');
            $table->string('email');
            $table->string('dob');
            $table->string('gender');
            $table->string('annual_income');
            $table->string('street');
            $table->string('city');
            $table->string('dist');
            $table->string('state');
            $table->string('countary');
            $table->string('zip');
            $table->string('adhar_number');
            $table->string('category');
            $table->string('account_number');
            $table->string('caccount_number');
            $table->string('ifsc');
            $table->string('account_holder_name');
            $table->string('nick_name');     
            $table->string('scheme_type');
            $table->string('institution');
            $table->string('district');
            $table->string('tahsil');
            $table->string('mohalla');
            $table->string('ward_number');
            $table->string('plot_number');
            $table->string('plot_facing');
            $table->string('plot_area');
            $table->string('khatiyan_number');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('area_detail');
            $table->string('aadhar_card');
            $table->string('residential');
            $table->string('cast');
            $table->string('income');
            $table->string('voter_id');
            $table->string('vanshavali');
            $table->string('khatiyan');
            $table->string('birth_certificate');
            $table->string('photo');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('submit_scheme_forms');
    }
};
