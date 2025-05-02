<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('emergencies', function (Blueprint $table) {
            $table->integer('response_time')->nullable(); // Add this line
        });
    }

    public function down()
    {
        Schema::table('emergencies', function (Blueprint $table) {
            $table->dropColumn('response_time');
        });
    }
};