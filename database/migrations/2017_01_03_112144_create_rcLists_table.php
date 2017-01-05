<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcLists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stuId');
            $table->enum('status', array('OK', 'delay', 'lack', 'waste', 'ill', 'public', 'thing', 'funeral')); //正常 遲 缺 曠 病 公 事 喪
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
         Schema::drop('rcLists');
    }
}
