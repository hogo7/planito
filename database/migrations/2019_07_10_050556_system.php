<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class System extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('systems', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            /*
             * Fields
             */
            /*
             * Foreign Keys
             */
           
            $table->bigIncrements('id');
            $table->integer('userId')->unsigned()->nullable();
            $table->string('mbtiResult')->nullable();
            $table->string('mbtiScore')->nullable();
            $table->string('mbtiStatus')->nullable();
            $table->string('taskStatus')->nullable();
            $table->string('Plan')->nullable();
            $table->string('Position')->nullable();
            $table->string('belive')->nullable();
            $table->string('userStatus')->nullable();
            $table->string('tasksAlt')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });



        //
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
