<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandiseHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandise__histories', function (Blueprint $table) {
            $table->foreignId('history_id');
            $table->foreign('history_id')->references('id')->on('histories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('merchandise_id');
            $table->foreign('merchandise_id')->references('id')->on('merchandises')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
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
        Schema::dropIfExists('merchandise__histories');
    }
}
