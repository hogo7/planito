<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId');
            $table->string('taskName')->nullable();
            $table->string('taskScore')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('last_updated_at')->nullable();
        });







    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
