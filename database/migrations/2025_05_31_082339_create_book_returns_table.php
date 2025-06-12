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
        Schema::create('book_returns', function (Blueprint $table) {
            $table->string('return_number')->primary();
            $table->string('loan_number');
            $table->string('member_number');
            $table->enum('member_type', ['student', 'nonstudent']);
            $table->date('return_date');
            $table->decimal('fine', 8, 2)->default(0);
            $table->string('staff_code');

            $table->foreign('loan_number')->references('loan_number')->on('loans')->onDelete('cascade');
            $table->foreign('staff_code')->references('staff_code')->on('staff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_returns');
    }
};
