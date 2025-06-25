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
        Schema::create('candidature_masters', function (Blueprint $table) {
            $table->id();
            $table->text('choix1')->nullable()->default(null);
            $table->text('choix2')->nullable()->default(null);
            $table->string('cin_passport', 20)->nullable()->default(null);
            $table->string('nom', 100)->nullable()->default(null);
            $table->string('prenom', 100)->nullable()->default(null);
            $table->string('nom_jeune_fille', 100)->nullable()->default(null);
            $table->text('sexe')->nullable()->default(null);
            $table->date('date_naissance')->nullable()->default(null);
            $table->string('nationalite', 50)->nullable()->default(null);
            $table->text('adresse')->nullable()->default(null);
            $table->string('pays', 100)->nullable()->default(null);
            $table->string('gouvernorat', 100)->nullable()->default(null);
            $table->string('ville', 100)->nullable()->default(null);
            $table->string('code_postal', 20)->nullable()->default(null);
            $table->string('telephone', 20)->nullable()->default(null);
            $table->string('email', 150)->nullable()->default(null);
            $table->year('annee_bac')->nullable()->default(null);
            $table->float('moyenne_bac')->nullable()->default(null);
            $table->integer('nb_redoublement')->nullable()->default(null);
            $table->text('reussite_3ans')->nullable()->default(null);
            $table->integer('retrait_inscription')->nullable()->default(null);
            $table->float('moyenne_diplome')->nullable()->default(null);
            $table->string('type_etablissement', 100)->nullable()->default(null);
            $table->string('nature_diplome', 100)->nullable()->default(null);
            $table->string('specialite', 150)->nullable()->default(null);
            $table->year('annee_diplome')->nullable()->default(null);
            $table->string('situation_pro', 100)->nullable()->default(null);
            $table->integer('nb_stages')->nullable()->default(null);
            $table->text('etudes_superieures')->nullable()->default(null);
            $table->timestamp('date_soumission')->nullable()->useCurrent();
            $table->timestamps();
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
            $table->foreignId('year_id')->nullable()->default(null)->on('years')->onDelete('set null');
            $table->float('score')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidature_masters');
    }
};
