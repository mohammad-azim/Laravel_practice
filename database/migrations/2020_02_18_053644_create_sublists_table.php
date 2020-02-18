<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSublistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sublists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('details');
            $table->string('priority');
            $table->unsignedBigInteger("memolist_id");
            $table->timestamps();
            $table->foreign('memolist_id')
                  ->references('id')->on('memolists')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sublists');
    }
}
