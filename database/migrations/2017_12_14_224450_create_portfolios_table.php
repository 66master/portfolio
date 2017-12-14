<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->comment('user id');
            $table->string('category')->comment('category of portfolio');
            $table->string('type')->comment('type of category');
            $table->string('title')->comment('title of portfolio');
            $table->longText('description')->comment('description of portfolio')->nullable;
            $table->timestamps();

            $table->foreing('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
