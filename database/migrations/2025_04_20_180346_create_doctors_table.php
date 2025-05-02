<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up()
{
    Schema::create('doctors', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone');
        $table->unsignedBigInteger('hospital_id')->nullable();
        $table->unsignedBigInteger('specialty_id')->nullable();
        $table->timestamps();
    });
}

// Add this new migration for foreign keys
// Create file: database/migrations/2025_04_20_180347_add_foreign_keys_to_doctors.php

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};

