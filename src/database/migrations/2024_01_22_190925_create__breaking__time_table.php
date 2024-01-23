<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreakingTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breaking_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('working_time_id')->constrained()->cascadeOnDelete();
            $table->timestamp('breaking_start');
            $table->timestamp('breaking_end');
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
        Schema::dropIfExists('breaking_times');
    }
}
