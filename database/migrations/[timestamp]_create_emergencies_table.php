<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('emergencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users');
            $table->text('description');
            $table->foreignId('doctor_id')->nullable()->constrained('doctors');
            $table->foreignId('location_id')->constrained('locations');
            $table->string('status', 50)->default('Pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('emergencies');
    }
};