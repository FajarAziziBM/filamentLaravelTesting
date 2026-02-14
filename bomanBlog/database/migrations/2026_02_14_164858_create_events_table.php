<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // BIGINT PK
            $table->string('title', 150); // VARCHAR(150)
            $table->enum('type', ['panen', 'pupuk', 'maintenance']); // ENUM type
            $table->date('start_date'); // DATE
            $table->date('end_date');   // DATE
            $table->text('description')->nullable(); // TEXT

            $table->timestamps(); // created_at & updated_at

            // Index tambahan
            $table->index('type');
            $table->index('start_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
