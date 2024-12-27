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
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('category')->after('image');  // Add category field
            $table->integer('mil_people')->after('category');  // Add mil_people field
            $table->integer('kilometers')->after('mil_people');  // Add kilometers field
            $table->decimal('price', 8, 2)->after('kilometers');  // Add price field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('category');
            $table->dropColumn('mil_people');
            $table->dropColumn('kilometers');
            $table->dropColumn('price');
        });
    }
};
