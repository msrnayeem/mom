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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_open')->default(true);


            $table->foreignId('teacher_id')->nullable()->constrained('users')->onDelete('set null'); // Link to teacher (assuming it's a user)
            $table->integer('course_duration');
            $table->decimal('fee', 8, 2);

            $table->integer('capacity'); // Capacity of the batch
            $table->integer('enrolled')->default(0); // Number of students enrolled
            $table->date('admission_end_date');
            $table->date('start_date'); // Start date of the batch
            $table->date('end_date'); // End date of the batch


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
