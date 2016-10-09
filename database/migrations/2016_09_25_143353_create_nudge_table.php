<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNudgeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nudge_regs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fname',100);
            $table->string('lname',100);
            $table->string('jpos',100)->nullable();
            $table->string('email',100);
            $table->string('workphone',20);
            $table->string('address1',100);
            $table->string('address2',100)->nullable();
            $table->string('postcode',100);
            $table->string('city',100);
            $table->string('country',10);
            $table->string('licnum',10);
            $table->string('years',10);
            $table->string('ordercost',20);
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
        Schema::drop('nudge_regs');
    }
}
