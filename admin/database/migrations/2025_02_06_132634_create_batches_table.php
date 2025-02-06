<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the batch
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Link to course
            $table->foreignId('teacher_id')->nullable()->constrained('users')->onDelete('set null'); // Link to teacher (assuming it's a user)
            $table->integer('batch_duration'); // Duration in hours (or minutes)
            $table->decimal('fee', 8, 2); // Fee for the batch
            $table->longText('description')->nullable(); // Description field for the batch
            $table->integer('capacity'); // Capacity of the batch
            $table->integer('enrolled')->default(0); // Number of students enrolled
            $table->date('admission_end_date');
            $table->date('start_date'); // Start date of the batch
            $table->date('end_date'); // End date of the batch
            $table->boolean('is_open')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
