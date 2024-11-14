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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Job title
            $table->text('description'); // Job description
            $table->string('location')->default('Remote'); // Job location
            $table->string('company'); // Company name
            $table->string('job_type'); // Job type (Full-Time, Part-Time, etc.)
            $table->boolean('expired')->default(false); // Expired status
            $table->timestamp('posted_timestamp')->useCurrent(); // When the job was posted
            $table->timestamps(); // This will create created_at and updated_at columns
        });

        // You can keep other migration definitions as needed
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        // Drop other tables if needed
    }
};
