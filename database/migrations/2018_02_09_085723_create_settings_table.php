<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');

            $table->string('logo');
            $table->string('sitetitle');
            $table->text('meta_des');
            $table->string('meta_key');
            $table->text('chat');

            $table->text('address');
            $table->string('phone');
            $table->string('email');

            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('line');


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
        Schema::dropIfExists('settings');
    }
}
