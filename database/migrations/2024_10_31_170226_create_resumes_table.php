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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();  // This creates an auto-incrementing primary key
            $table->string('name');  // Column for the name
            $table->string('email');  // Column for the email
            $table->string('phone');  // Column for the phone number
            $table->text('summary');  // Column for a summary or description
            $table->string('education');  // Column for education details
            $table->string('experience');  // Column for work experience
            $table->string('skills');  // Column for skills
            $table->timestamps();  // Columns for created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');  // Drops the resumes table if it exists
    }
};
