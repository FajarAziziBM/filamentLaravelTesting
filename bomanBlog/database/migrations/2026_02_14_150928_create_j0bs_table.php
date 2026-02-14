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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED PK

            $table->string('title', 150); // VARCHAR(150) NOT NULL

            $table->text('description')->nullable(); // TEXT NULL

            $table->decimal('wage', 15, 2); // DECIMAL(15,2) NOT NULL

            $table->date('start_date'); // DATE NOT NULL
            $table->date('end_date');   // DATE NOT NULL

            $table->enum('status', ['planned', 'ongoing', 'completed'])
                  ->default('planned');

            $table->foreignId('created_by')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->timestamps();

            // Index tambahan untuk performa
            $table->index('status');
            $table->index(['start_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
