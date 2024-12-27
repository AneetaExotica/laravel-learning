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
            $table->string('image1')->after('buttonlink2');  
            $table->string('image2')->after('image1');      
            $table->decimal('image3')->after('image2');  // Decide if this is decimal or string
            $table->string('image4')->after('image3');  // Add image4 before referencing it
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('image1');
            $table->dropColumn('image2');
            $table->dropColumn('image3');
            $table->dropColumn('image4');
        });
    }
};
