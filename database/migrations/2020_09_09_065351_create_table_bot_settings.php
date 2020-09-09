<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBotSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bot_settings', function (Blueprint $table) {
            $table->id();
            $table->double('advertising_cost')->default(0);
            $table->double('reward_once')->default(0);
            $table->double('reward_percent')->default(0);
            $table->double('range_from')->default(0);
            $table->double('range_to')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_bot_settings');
    }
}
