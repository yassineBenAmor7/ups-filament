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
        Schema::create('stage_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->integer('is_required')->nullable()->default(null);
            $table->integer('is_supervised')->nullable()->default(null);
            $table->integer('is_company')->nullable()->default(null);
            $table->integer('nb_candidate')->nullable()->default(null);
            $table->text('appui_model')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->text('assignment_model')->nullable()->default(null);
            $table->text('company_request_sheet_model')->nullable()->default(null);
            $table->integer('duration_min')->nullable()->default(null);
            $table->integer('duration_max')->nullable()->default(null);
            $table->foreignId('sector_type_id')->nullable()->default(null)->constrained('sector_types')->onDelete('set null');
            $table->integer('level')->nullable()->default(null);
            $table->text('convention_model')->nullable()->default(null);
            $table->date('from')->nullable()->default(null);
            $table->date('to')->nullable()->default(null);
            $table->integer('etranger')->nullable()->default(null);
            $table->date('request_from')->nullable()->default(null);
            $table->date('request_to')->nullable()->default(null);
            $table->string('prefix')->nullable()->default(null);
            $table->text('convention_model_en')->nullable()->default(null);
        });

        Schema::create('stage_categories', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->integer('candidat_1_id')->nullable()->default(null);
            $table->integer('candidat_2_id')->nullable()->default(null);
            $table->integer('candidat_3_id')->nullable()->default(null);
            $table->integer('entreprise_id')->nullable()->default(null);
            $table->string('candidat_1_name')->nullable()->default(null);
            $table->string('candidat_2_name')->nullable()->default(null);
            $table->string('candidat_3_name')->nullable()->default(null);
            $table->string('encadrant_name')->nullable()->default(null);
            $table->text('sujet')->nullable()->default(null);
            $table->string('domaine')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('duree')->nullable()->default(null);
            $table->string('start')->nullable()->default(null);
            $table->string('end')->nullable()->default(null);
            $table->text('rapport')->nullable()->default(null);
            $table->string('level')->nullable()->default(null);
            $table->string('etat')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('encadrant_id')->nullable()->default(null);
            $table->integer('avis_encadrant')->nullable()->default(null);
            $table->integer('avis_jury')->nullable()->default(null);
            $table->text('remarque_jury')->nullable()->default(null);
            $table->float('resultat_jury')->nullable()->default(null);
            $table->text('remarque_encadrant')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->integer('responsible_id')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('type_stage')->default('stage');
            $table->text('motivation_letter')->nullable()->default(null);
            $table->foreignId('offer_id')->nullable()->default(null)->constrained('offers')->onDelete('set null');
            $table->integer('company_acceptation')->nullable()->default(null);
            $table->integer('teacher_acceptation')->nullable()->default(null);
            $table->integer('acceptation')->nullable()->default(null);
            $table->integer('company_validation')->nullable()->default(null);
            $table->integer('teacher_validation')->nullable()->default(null);
            $table->integer('validation')->nullable()->default(null);
            $table->text('assignment_file')->nullable()->default(null);
            $table->text('internship_certificate')->nullable()->default(null);
            $table->text('activities_file')->nullable()->default(null);
            $table->foreignId('stage_type_id')->nullable()->default(null)->constrained('stage_types')->onDelete('set null');
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('other_file')->nullable()->default(null);
            $table->text('company_request_sheet')->nullable()->default(null);
            $table->text('appui_request')->nullable()->default(null);
            $table->string('responsible_name')->nullable()->default(null);
            $table->string('responsible_email')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
            $table->text('convention_file')->nullable()->default(null);
            $table->foreignId('department_id')->nullable()->default(null)->constrained('departments')->onDelete('set null');
            $table->string('signed_by')->nullable()->default(null);
            $table->text('convention_html')->nullable()->default(null);
            $table->foreignId('stage_category_id')->nullable()->default(null)->constrained('stage_categories')->onDelete('set null');
            $table->text('signed_convention_file')->nullable()->default(null);
            $table->string('code')->nullable()->default(null);
        });

        Schema::create('stage_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stage_id')->nullable()->default(null)->constrained('stages')->onDelete('set null');
            $table->integer('candidat_id')->nullable()->default(null);
            $table->date('activity_date')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('stage_document_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->integer('is_required')->default(0);
            $table->string('slug')->nullable()->default(null);
            $table->integer('order')->nullable()->default(null);
        });

        Schema::create('stage_etes', function (Blueprint $table) {
            $table->id();
            $table->string('test')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
        Schema::dropIfExists('stage_activities');
        Schema::dropIfExists('stage_categories');
        Schema::dropIfExists('stage_document_types');
        Schema::dropIfExists('stage_etes');
    }
};
