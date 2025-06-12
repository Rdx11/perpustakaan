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
        Schema::create('books', function (Blueprint $table) {
            $table->string('book_code')->primary();
            $table->string('udc_number');
            $table->string('reg_number');
            $table->string('title');
            $table->string('publisher');
            $table->string('author');
            $table->year('publication_year');
            $table->string('publication_city');
            $table->string('edition')->nullable();
            $table->string('language');
            $table->text('description')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('copies');
            $table->string('main_subject')->nullable();
            $table->string('additional_subject')->nullable();
            $table->text('synopsis')->nullable();
            $table->string('book_cover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
