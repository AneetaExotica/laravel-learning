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
    Schema::table('categories', function (Blueprint $table) {
        $table->text('description')->change();  // Change to TEXT
    });
}

public function down()
{
    Schema::table('categories', function (Blueprint $table) {
        $table->string('description', 255)->change();  // Revert to VARCHAR(255)
    });
}

};
