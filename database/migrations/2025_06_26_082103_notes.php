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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('student_cin')->nullable()->default(null);
            $table->string('student_name')->nullable()->default(null);
            $table->string('subject')->nullable()->default(null);
            $table->string('note')->nullable()->default(null);
            $table->string('semestre')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->foreignId('subject_id')->nullable()->default(null)->constrained('subjects')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->integer('reclamation')->nullable()->default(null);
            $table->text('desc_reclamation')->nullable()->default(null);
            $table->string('teacher_cin')->nullable()->default(null);
            $table->string('teacher_name')->nullable()->default(null);
            $table->foreignId('group_td_id')->nullable()->default(null)->constrained('groups')->onDelete('set null');
            $table->string('group_td_designation')->nullable()->default(null);
        });

        Schema::create('note_claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('note_id')->nullable()->default(null)->constrained('notes')->onDelete('set null');
            $table->text('description')->nullable()->default(null);
            $table->string('etat')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
        Schema::dropIfExists('note_claims');
    }
};
