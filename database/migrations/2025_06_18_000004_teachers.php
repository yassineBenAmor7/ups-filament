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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('department_id');
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
            $table->foreignId('grade_id')->nullable()->constrained('grades')->onDelete('set null');
            $table->string('grade_name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('nom_ar')->nullable()->default(null);
            $table->string('prenom')->nullable()->default(null);
            $table->string('prenom_ar')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
