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
        Schema::create('job_user', function (Blueprint $table) {
            $table->id(); // BIGINT PK
            $table->foreignId('job_id')
                  ->constrained('jobs')
                  ->cascadeOnDelete(); // FK ke jobs
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete(); // FK ke users
            $table->timestamp('assigned_at')->useCurrent();

            // Optional index untuk performa
            $table->unique(['job_id', 'user_id']); // prevent duplicate assignment
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_user');
    }
};
