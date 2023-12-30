<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->default('NOT-SET');
            $table->string('school_phone')->default('NOT-SET');
            $table->string('school_email')->default('NOT-SET');
            $table->string('school_logo_url')->default('NOT-SET');
            $table->string('school_address')->default('NOT-SET');
            $table->string('school_about')->default('NOT-SET');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
