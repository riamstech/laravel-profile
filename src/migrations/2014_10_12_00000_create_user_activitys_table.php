<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActivitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activitys', function (Blueprint $table) {
            $table->string('trackable_type');
            $table->string('trackable_id');
            $table->string('ip');
            $table->integer('user_id');
            $table->string('action');
            $table->string('record_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_activitys');
    }
}
