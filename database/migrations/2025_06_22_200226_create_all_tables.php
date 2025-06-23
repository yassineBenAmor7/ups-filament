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
        // filament_v1.drawio diagram
        schema::create('users', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('role_id')->references('id')->on('roles')->onDelete('cascade')->nullable()->default(null);
           $table->unsignedBigInteger('role_id')->nullable();
            $table->string('name')->nullable()->default(null);
            $table->string('name_ar')->nullable()->default(null)->unique();
            $table->string('phone')->nullable()->default(null);
            $table->string('email')->nullable()->default(null)->unique();
            $table->string('password')->nullable();
            $table->string('cin')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->string('nationalite')->nullable()->default(null);
            $table->string('genre')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('cnss')->nullable()->default(null);
            $table->date('date_naissance')->nullable()->default(null);
            $table->string('lieu_naissance')->nullable()->default(null);
            $table->text('cv')->nullable()->default(null);
            $table->string('description_ar')->nullable()->default(null);
            $table->string('description_en')->nullable()->default(null);
            $table->string('description_fr')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('folder_name')->nullable()->default(null);
        });

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

        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->integer('affichage_in_front')->nullable()->default(null);
            $table->string('grade_name')->nullable()->default(null);
            $table->foreignId('grade_id')->references('id')->on('grades')->onDelete('cascade')->nullable()->default(null);
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


        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable()->default(null);
            $table->string('cin')->nullable()->default(null);
            $table->string('nom')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->integer('nb_max_encadement')->nullable()->default(0);
            $table->string('nb_surveillance')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->integer('affichage_in_front')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('indentifiant_unique')->nullable()->default(null);
            $table->string('poste')->nullable()->default(null);
            $table->string('statut_ar')->nullable()->default(null);
            $table->string('statut_en')->nullable()->default(null);
            $table->string('statut_fr')->nullable()->default(null);
            $table->string('specialite_ar')->nullable()->default(null);
            $table->string('specialite_en')->nullable()->default(null);
            $table->string('specialite_fr')->nullable()->default(null);
            $table->foreignId('grade_id')->references('id')->on('grades')->onDelete('cascade')->nullable()->default(null);
            $table->string('grade_name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('nom_ar')->nullable()->default(null);
            $table->string('prenom')->nullable()->default(null);
            $table->string('prenom_ar')->nullable()->default(null);
        });

        Schema::create('students_predefined_lists', function (Blueprint $table) {
            $table->id();
            $table->string('numero_inscription')->nullable()->default(null);
            $table->string('cin')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null);
            $table->foreignId('groupe_tp_id')->nullable()->default(null);
            $table->foreignId('groupe_td_id')->nullable()->default(null);
            $table->foreignId('groupe_id')->nullable()->default(null);
            $table->foreignId('sector_id')->nullable()->default(null);
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
        //

    }
};