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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longtext('description')->nullable();
            $table->string('image')->nullable();
            $table->string('buttontext')->nullable();
            $table->string('buttonlink')->nullable();
            $table->integer('mil_people');
            $table->integer('kilometers');
            $table->decimal('price', 8, 2);
            $table->string('buttontext2')->nullable();
            $table->string('buttonlink2')->nullable();
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
       // Schema::dropIfExists('banners');
        Schema::drop('banners');
    }
};
