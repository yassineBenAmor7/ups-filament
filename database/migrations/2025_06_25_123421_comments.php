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
         Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('parent_id')->nullable()->default(null)->constrained('comments')->onDelete('set null');
            $table->text('content')->nullable()->default(null)->default(null);
            $table->string('created_by')->nullable()->default(null)->default(null);
            $table->string('updated_by')->nullable()->default(null)->default(null);
            $table->timestamps();
            $table->foreignId('course_id')->nullable()->default(null)->constrained('courses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
