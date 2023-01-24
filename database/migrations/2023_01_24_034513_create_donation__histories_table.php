<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation__histories', function (Blueprint $table) {
            $table->foreignId('history_id');
            $table->foreign('history_id')->references('id')->on('histories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('donation_id');
            $table->foreign('donation_id')->references('id')->on('donations')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('donation__histories');
    }
}
