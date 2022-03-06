<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('horse_name');
            $table->string('horse_race');
            $table->string('result');
            $table->decimal('stake',3,2);
            $table->decimal('odds',4,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bet_histories');
    }
};
