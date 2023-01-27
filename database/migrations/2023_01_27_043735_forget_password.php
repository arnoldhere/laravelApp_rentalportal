<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForgetPassword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forgetPasswords', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements("id");
            $table->bigInteger("userId")->unsigned();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->string("otp");
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
        Schema::dropIfExists('forgetPasswords');
    }
}
