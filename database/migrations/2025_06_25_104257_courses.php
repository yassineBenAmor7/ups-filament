<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
            $table->foreignId('subject_id')->nullable()->default(null)->constrained('subjects')->onDelete('set null');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->foreignId('teacher_id')->nullable()->default(null)->constrained('teachers')->onDelete('set null');
            $table->string('teacher_cin')->nullable()->default(null);
            $table->string('permission_comment')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('courses_group_tds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_td_id')->nullable()->default(null)->constrained('group_tds')->onDelete('set null');
            $table->foreignId('course_id')->nullable()->default(null)->constrained('courses')->onDelete('set null');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('course_renders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->nullable()->default(null)->constrained('courses')->onDelete('set null');
            $table->foreignId('group_td_id')->nullable()->default(null)->constrained('group_tds')->onDelete('set null');
            $table->string('designation')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->timestamp('expiration_date')->nullable()->default(null);
            $table->text('files')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->string('teacher_cin')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
        });

        Schema::create('course_render_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_render_id')->nullable()->default(null)->constrained('course_renders')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->text('files')->nullable()->default(null);
            $table->integer('description')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->integer('created_by')->nullable()->default(null);
            $table->integer('updated_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('courses_group_tds');
        Schema::dropIfExists('course_renders');
        Schema::dropIfExists('course_render_users');
    }
};
