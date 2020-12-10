<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->text('description');
                $table->string('link')->nullable();
                $table->integer('start_coast');
                $table->integer('step_bids');
                $table->unsignedBigInteger('author_id')->unsigned();
                $table->foreign('author_id')->references('id')->on('users');
                $table->unsignedBigInteger('winner_id')->unsigned();
                $table->foreign('winner_id')->references('id')->on('users')->nullable();
                $table->unsignedBigInteger('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('categories');
                $table->timestamp('end_date')->nullable();
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
        Schema::dropIfExists('lots');
    }
}
