<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompetitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_competitions', function (Blueprint $table) {
            $table->id();
            $table->string('competition_name')->nullable();
            $table->longText('competition_description')->nullable();
            $table->double('competition_needle_tokens')->default(0);
            $table->double('competition_now_tokens')->default(0);
            $table->dateTime('competition_duration')->nullable();
            $table->boolean('competition_type_wins')->default(false);
            $table->boolean('competition_status')->default(false);
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
        Schema::dropIfExists('table_competitions');
    }
}
