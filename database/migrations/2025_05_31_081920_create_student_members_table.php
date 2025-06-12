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
        Schema::create('student_members', function (Blueprint $table) {
            $table->string('student_member_number')->primary();
            $table->string('nimnis');
            $table->string('name');
            $table->string('school_origin');
            $table->date('birth_date');
            $table->text('address');
            $table->string('postal_code');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->date('registration_date');
            $table->string('parent_name');
            $table->text('parent_address');
            $table->string('parent_phone');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_members');
    }
};
