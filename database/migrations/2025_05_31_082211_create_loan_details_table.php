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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id();
            $table->string('loan_number');
            $table->string('book_code');
            $table->year('publication_year');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('loan_number')->references('loan_number')->on('loans')->onDelete('cascade');
            $table->foreign('book_code')->references('book_code')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_details');
    }
};
