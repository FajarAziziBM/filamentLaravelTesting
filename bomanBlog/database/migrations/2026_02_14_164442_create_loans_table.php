<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id(); // BIGINT PK
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // FK ke users
            $table->decimal('amount', 15, 2); // DECIMAL
            $table->date('loan_date'); // DATE
            $table->enum('status', ['active', 'paid'])->default('active'); // ENUM
            $table->text('notes')->nullable(); // TEXT
            $table->timestamps(); // created_at & updated_at

            // Index tambahan
            $table->index('user_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
