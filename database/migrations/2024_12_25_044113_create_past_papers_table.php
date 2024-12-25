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
        Schema::create('past_papers', function (Blueprint $table) {            
            $table->id();
            $table->string('courseName');
            $table->string('courseCode');
            $table->string('department');
            $table->string('level');
            $table->string('semester');
            $table->string('year');
            $table->string('remark')->nullable();
            $table->string('paper');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('past_papers');
    }
};
