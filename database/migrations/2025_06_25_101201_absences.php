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
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_td_id')->nullable()->default(null)->on('group_tds')->onDelete('cascade');
            $table->foreignId('subject_id')->nullable()->default(null)->on('subjects')->onDelete('cascade');
            $table->foreignId('year_id')->nullable()->default(null)->on('years')->onDelete('cascade');
            $table->string('year_designation')->nullable()->default(null);
            $table->string('subject_designation')->nullable()->default(null);
            $table->string('group_td_designation')->nullable()->default(null);
            $table->string('teacher_name')->nullable()->default(null);
            $table->string('teacher_cin')->nullable()->default(null);
            $table->integer('semestre')->nullable()->default(null);
            $table->date('date')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->foreignId('period_id')->nullable()->default(null)->on('periods')->onDelete('cascade');
            $table->string('slug')->nullable()->default(null);
        });

        Schema::create('absence_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('can_teacher_update')->nullable()->default(null);
            $table->integer('nb_passed_days')->nullable()->default(null);
            $table->integer('nb_update_days')->nullable()->default(null);
            $table->integer('auto_period')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('absence_students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable()->default(null);
            $table->integer('student_cin')->nullable()->default(null);
            $table->integer('reclamation')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->foreignId('absence_id')->nullable()->default(null)->on('absences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
        Schema::dropIfExists('absence_settings');
        Schema::dropIfExists('absence_students');
    }
};
