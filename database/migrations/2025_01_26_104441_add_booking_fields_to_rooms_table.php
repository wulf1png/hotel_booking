<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('price', 10, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
   public function down()
   {
        Schema::table('rooms', function (Blueprint $table) {
        $table->dropColumn(['start_date', 'end_date', 'price']);
        });
    }
};
