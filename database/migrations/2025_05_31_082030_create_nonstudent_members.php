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
        Schema::create('nonstudent_members', function (Blueprint $table) {
            $table->string('nonstudent_member_number')->primary();
            $table->string('nik');
            $table->string('name');
            $table->string('occupation');
            $table->date('birth_date');
            $table->text('address');
            $table->string('postal_code');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->date('registration_date');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonstudent_members');
    }
};
