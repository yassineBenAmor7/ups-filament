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
        Schema::create('soutenance_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->date('start_date')->nullable()->default(null);
            $table->date('end_date')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->boolean('publier')->default(false);
            $table->string('slug')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('soutenances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stage_id')->nullable()->default(null)->constrained('stages')->onDelete('set null');
            $table->string('date')->nullable()->default(null);
            $table->string('horaire_start')->nullable()->default(null);
            $table->string('horaire_end')->nullable()->default(null);
            $table->string('salle')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->boolean('publier')->default(false);
            $table->text('result')->nullable()->default(null);
            $table->foreignId('department_id')->nullable()->default(null)->constrained('departments')->onDelete('set null');
            $table->foreignId('soutenance_session_id')->nullable()->default(null)->constrained('soutenance_sessions')->onDelete('set null');
            $table->text('pv')->nullable()->default(null);
        });

        Schema::create('soutenance_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id') ->nullable()->default(null) ->constrained('teachers')->onDelete('set null');    
            $table->foreignId('soutenance_id')->nullable()->default(null)->constrained('soutenances')->onDelete('set null');
            $table->string('poste')->nullable()->default(null);
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
        Schema::dropIfExists('soutenances');
        Schema::dropIfExists('soutenance_sessions');
        Schema::dropIfExists('soutenance_teachers');
    }
};
