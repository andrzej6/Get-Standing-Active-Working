<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGbsRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gbs_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',5);
            $table->string('fname',100);
            $table->string('lname',100);
            $table->string('email',100);
            $table->string('workphone',20);
            $table->string('mobilephone',20)->nullable();
            $table->string('ename',80);
            $table->string('address1',100);
            $table->string('address2',100)->nullable();
            $table->string('postcode',100);
            $table->string('city',100);
            $table->string('county',100)->nullable();
            $table->string('country',10);
            $table->string('jpos',100)->nullable();
            $table->string('dep',100)->nullable();
            $table->string('behalf',100);
            $table->string('fquest')->nullable();
            $table->string('extras',100)->nullable();

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
        Schema::drop('gbs_regs');
    }
}
