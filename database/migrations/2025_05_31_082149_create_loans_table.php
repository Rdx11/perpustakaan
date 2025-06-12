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
        Schema::create('loans', function (Blueprint $table) {
            $table->string('loan_number')->primary();
            $table->date('loan_date');
            $table->date('return_date');
            $table->string('member_number');
            $table->enum('member_type', ['student', 'nonstudent']);
            $table->string('staff_code');

            $table->foreign('staff_code')->references('staff_code')->on('staff')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
