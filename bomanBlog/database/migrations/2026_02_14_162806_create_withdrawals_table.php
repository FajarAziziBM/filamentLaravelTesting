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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id(); // BIGINT PK
            $table->foreignId('user_id') // FK ke users
                  ->constrained()
                  ->cascadeOnDelete();
            $table->decimal('amount', 15, 2); // DECIMAL(15,2)
            $table->date('withdrawal_date');
            $table->text('notes')->nullable(); // TEXT NULL
            $table->foreignId('created_by') // FK ke users (admin yg input)
                  ->constrained('users')
                  ->cascadeOnDelete();
            $table->timestamps();

            // Index tambahan
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
