<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_holes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tee_id');
            $table->foreignId('user_id');
            $table->foreignId('round_id');
            $table->integer('strokes');
            $table->integer('putts');
            $table->integer('chips');
            $table->integer('mulligans');
            $table->integer('penalties');
            $table->integer('fir');
            $table->integer('gir');
            $table->string('notes');
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
        Schema::dropIfExists('user_holes');
    }
}
