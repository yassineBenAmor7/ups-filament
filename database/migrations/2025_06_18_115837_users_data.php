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

        schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('annee_bac')->nullable()->default(null);
            $table->string('section_bac')->nullable()->default(null);
            $table->string('session_bac')->nullable()->default(null);
            $table->string('mention_bac')->nullable()->default(null);
            $table->float('moyenne_bac')->nullable()->default(null);
            $table->text('pays_bac')->nullable()->default(null);
            $table->text('mon_pere')->nullable()->default(null);
            $table->text('premon_pere')->nullable()->default(null);
            $table->text('prefession_pere')->nullable()->default(null);
            $table->text('etablissement_prof_pere')->nullable()->default(null);
            $table->text('nom_mere')->nullable()->default(null);
            $table->text('prenom_mere')->nullable()->default(null);
            $table->text('etablissement_prof_mere')->nullable()->default(null);
            $table->text('nom_jeune_fille')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->string('diploma')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
        });

        schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->integer('affichage_in_front')->nullable()->default(null);
            $table->string('grade_name')->nullable()->default(null);
            $table->foreignId('grade_id')->nullable()->constrained('grades')->onDelete('set null');
            $table->string('service_fr')->nullable()->default(null);
            $table->string('service_en')->nullable()->default(null);
            $table->string('service_ar')->nullable()->default(null);
            $table->string('fonction_fr')->nullable()->default(null);
            $table->string('fonction_ar')->nullable()->default(null);
            $table->string('fonction_en')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('cin')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
        });

        Schema::create('students_predefined_lists', function (Blueprint $table) {
            $table->id();
            $table->string('numero_inscription')->nullable()->default(null);
            $table->string('cin')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->constrained('years')->onDelete('set null');
            $table->foreignId('groupe_tp_id')->nullable()->constrained('group_tps')->onDelete('set null');
            $table->foreignId('groupe_td_id')->nullable()->constrained('group_tds')->onDelete('set null');
            $table->foreignId('groupe_id')->nullable()->constrained('groups')->onDelete('set null');
            $table->foreignId('sector_id')->nullable()->constrained('sectors')->onDelete('set null');
            $table->string('nom')->nullable()->default(null);
            $table->string('prenom')->nullable()->default(null);
            $table->string('nom_ar')->nullable()->default(null);
            $table->string('prenom_ar')->nullable()->default(null);
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

        Schema::dropIfExists('students');
        Schema::dropIfExists('personals');
        Schema::dropIfExists('students_predefined_lists');
    }
};
