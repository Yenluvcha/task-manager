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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();

            // Who did it
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // What action
            $table->string('action'); // created, updated, deleted, status_changed, tag_attached, etc

            // What object
            $table->string('subject_type'); // App\Models\Task
            $table->unsignedBigInteger('subject_id'); // task id

            // Human readable
            $table->string('description')->nullable();

            // Before / After state
            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();

            // Audit info
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();

            $table->timestamps();

            // Indexes for performance
            $table->index(['subject_type', 'subject_id']);
            $table->index('action');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
