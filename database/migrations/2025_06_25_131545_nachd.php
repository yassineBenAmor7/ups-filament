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
        Schema::create('nachd_etapedecisions', function (Blueprint $table) {
            $table->id();
            $table->string('etapedecision')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('nachd_formulaire_groupements', function (Blueprint $table) {
            $table->id();
            $table->text('designation_fr')->nullable()->default(null);
            $table->text('designation_en')->nullable()->default(null);
            $table->text('designation_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('nachd_formulaires', function (Blueprint $table) {
            $table->id();
            $table->string('name_fr')->nullable()->default(null);
            $table->string('name_en')->nullable()->default(null);
            $table->string('name_ar')->nullable()->default(null);
            $table->string('action')->nullable()->default(null);
            $table->string('method')->nullable()->default(null);
            $table->integer('accept_files')->nullable()->default(null);
            $table->string('code')->nullable()->default(null);
            $table->integer('decision')->default(0);
            $table->string('for')->nullable()->default(null);
            $table->integer('one')->nullable()->default(null);
            $table->date('date_debut')->nullable()->default(null);
            $table->date('date_fin')->nullable()->default(null);
            $table->text('photo_supp_1')->nullable()->default(null);
            $table->text('photo_supp_2')->nullable()->default(null);
            $table->string('position_photo_1')->nullable()->default(null);
            $table->string('position_photo_2')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->text('entete')->nullable()->default(null);
            $table->text('footer')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
            $table->foreignId('nachd_formulaire_groupement_id')->nullable()->default(null)->constrained('nachd_formulaire_groupements')->onDelete('set null');
            $table->text('response_model')->nullable()->default(null);
            $table->text('response_header')->nullable()->default(null);
            $table->text('response_footer')->nullable()->default(null);
        });

        Schema::create('nachd_etapedecision_formulaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nachd_formulaire_id')->nullable()->default(null)->constrained('nachd_formulaires')->onDelete('set null');
            $table->foreignId('nachd_etapedecision_id')->nullable()->default(null)->constrained('nachd_etapedecisions')->onDelete('set null');
            $table->integer('ordre')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('nachd_tentatives', function (Blueprint $table) {
            $table->id();
            $table->string('tentative')->nullable()->default(null);
            $table->string('confirmation')->nullable()->default(null);
            $table->integer('author_id')->nullable()->default(null);
            $table->dateTime('date_acceptation')->nullable()->default(null);
            $table->dateTime('date_reception')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
            $table->text('response_paper')->nullable()->default(null);
        });

        Schema::create('nachd_etapedecision_tentatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nachd_tentative_id')->nullable()->default(null)->constrained('nachd_tentatives')->onDelete('set null');
            $table->foreignId('nachd_etapedecision_id')->nullable()->default(null)->constrained('nachd_etapedecisions')->onDelete('set null');
            $table->integer('etat')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('nachd_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('label_fr')->nullable()->default(null)->unique();
            $table->string('label_en')->nullable()->default(null);
            $table->string('label_ar')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->string('name')->nullable()->default(null)->unique();
            $table->string('value')->nullable()->default(null);
            $table->string('identifiant')->nullable()->default(null);
            $table->string('class_style')->nullable()->default(null);
            $table->string('placeholder')->nullable()->default(null);
            $table->string('zone')->nullable()->default(null);
            $table->text('options')->nullable()->default(null);
            $table->string('model_bd')->nullable()->default(null);
            $table->integer('information_recuperable')->nullable()->default(null);
            $table->string('attribut_to_use')->nullable()->default(null);
            $table->string('table_to_use')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('nachd_formulaire_inputs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nachd_formulaire_id')->nullable()->default(null)->constrained('nachd_formulaires')->onDelete('set null');
            $table->foreignId('nachd_input_id')->nullable()->default(null)->constrained('nachd_inputs')->onDelete('set null');
            $table->integer('etat_required')->default(1);
            $table->integer('etat_disabled')->nullable()->default(null);
            $table->integer('etat_public')->default(1);
            $table->integer('ordre')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('nachd_formulaire_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nachd_formulaire_input_id')->nullable()->default(null)->constrained('nachd_formulaire_inputs')->onDelete('set null');
            $table->foreignId('nachd_formulaire_id')->nullable()->default(null)->constrained('nachd_formulaires')->onDelete('set null');
            $table->foreignId('nachd_input_id')->nullable()->default(null)->constrained('nachd_inputs')->onDelete('set null');
            $table->foreignId('nachd_tentative_id')->nullable()->default(null)->constrained('nachd_tentatives')->onDelete('set null');
            $table->text('value')->nullable()->default(null);
            $table->integer('author_id')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });
        Schema::create('nachd_formulaire_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nachd_formulaire_id')->nullable()->default(null)->constrained('nachd_formulaires')->onDelete('set null');
            $table->foreignId('role_id')->nullable()->default(null)->constrained('roles')->onDelete('set null');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nachd_etapedecisions');
        Schema::dropIfExists('nachd_etapedecision_formulaires');
        Schema::dropIfExists('nachd_etapedecision_tentatives');
        Schema::dropIfExists('nachd_formulaires');
        Schema::dropIfExists('nachd_formulaire_groupements');
        Schema::dropIfExists('nachd_formulaire_inputs');
        Schema::dropIfExists('nachd_formulaire_requests');
        Schema::dropIfExists('nachd_formulaire_roles');
        Schema::dropIfExists('nachd_inputs');
        Schema::dropIfExists('nachd_tentatives');
    }
};
