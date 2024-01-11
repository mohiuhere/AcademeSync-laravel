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
        Schema::create('mark_grades', function (Blueprint $table) {
            $table->id();
            $table->string('mark_grade_name');
            $table->decimal('point', 3, 2);
            $table->integer('percent_from');
            $table->integer('percent_upto');
            $table->string('remark');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mark_grades');
    }
};
