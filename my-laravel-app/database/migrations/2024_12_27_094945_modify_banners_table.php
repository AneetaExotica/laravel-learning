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
    Schema::table('banners', function (Blueprint $table) {
        // Change the columns to allow NULL values
        $table->string('image1')->nullable()->change();
        $table->string('image2')->nullable()->change();
        $table->string('image3')->nullable()->change();
        $table->string('image4')->nullable()->change();
    });
}

public function down()
{
    Schema::table('banners', function (Blueprint $table) {
        // Drop the columns if rolling back
        $table->dropColumn('image1');
        $table->dropColumn('image2');
        $table->dropColumn('image3');
        $table->dropColumn('image4');
    });
}

};
