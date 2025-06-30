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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('plan_etude')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('specialite_id')->nullable()->default(null);
        });

        Schema::create('form_fiche_renseignements', function (Blueprint $table) {
            $table->increments('id');
            $table->text('diplome_prepare')->nullable()->default(null);
            $table->string('specialite')->nullable()->default(null);
            $table->text('etat')->nullable()->default(null);
            $table->integer('niveau_etude')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->foreignId('student_id')->nullable()->default(null)->constrained('students')->onDelete('set null');
            $table->string('etablissement_educatif_precedente')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->string('student_name')->nullable()->default(null);
            $table->string('group_designation')->nullable()->default(null);
            $table->string('group_td_designation')->nullable()->default(null);
            $table->string('group_tp_designation')->nullable()->default(null);
            $table->string('adresse')->nullable()->default(null);
            $table->string('code_postale')->nullable()->default(null);
            $table->string('profession')->nullable()->default(null);
            $table->string('employeur')->nullable()->default(null);
            $table->string('etat_civil')->nullable()->default(null);
            $table->string('etat_militaire')->nullable()->default(null);
            $table->string('besoin_specifique')->nullable()->default(null);
            $table->string('description_besoin_specifique')->nullable()->default(null);
            $table->string('adresse_parents')->nullable()->default(null);
            $table->string('code_postale_parents')->nullable()->default(null);
            $table->string('tel_parents')->nullable()->default(null);
            $table->string('conjoint')->nullable()->default(null);
            $table->string('profession_conjoint')->nullable()->default(null);
            $table->string('etablissement_profession_conjoint')->nullable()->default(null);
            $table->string('nombre_enfants')->nullable()->default(null);
            $table->string('specialite_educatif_precedent')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->string('niveau_etab_educatif_precedent')->nullable()->default(null);
            $table->string('numero_inscription')->nullable()->default(null);
            $table->string('sector_designation')->nullable()->default(null);
        });

        Schema::create('forum_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('file')->nullable()->default(null);
        });

        Schema::create('forum_subject_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_subject_id')->nullable()->default(null)->constrained('forum_subjects')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->text('response')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
        Schema::dropIfExists('form_fiche_renseignements');
        Schema::dropIfExists('forum_subjects');
        Schema::dropIfExists('forum_subject_comments');
    }
};
