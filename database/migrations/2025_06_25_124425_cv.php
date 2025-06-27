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
        Schema::create('cv_education_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->timestamps();
            $table->foreignId('cv_education_type_id')->nullable()->default(null)->constrained('cv_education_types')->onDelete('set null');
            $table->string('start')->nullable()->default(null);
            $table->string('end')->nullable()->default(null);
            $table->integer('is_current')->nullable()->default(null);
            $table->text('place')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
        });

        Schema::create('cv_experience_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('cv_experience_type_id')->nullable()->default(null)->constrained('cv_experience_types')->onDelete('set null');
            $table->date('start')->nullable()->default(null);
            $table->date('end')->nullable()->default(null);
            $table->integer('is_current')->nullable()->default(null);
            $table->string('designation')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('place')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_languages', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_language_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('cv_language_id')->nullable()->default(null)->constrained('cv_languages')->onDelete('set null');
            $table->text('note')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->string('cv_side_bg')->nullable()->default(null);
            $table->string('cv_side_color_text')->nullable()->default(null);
            $table->string('cv_head_bg')->nullable()->default(null);
            $table->string('cv_head_color_text')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->integer('publier')->nullable()->default(null);
            $table->integer('theme')->nullable()->default(null);
        });

        Schema::create('cv_skill_categories', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_skills', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->foreignId('cv_skill_category_id')->nullable()->default(null)->constrained('cv_skill_categories')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('cv_skill_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('cv_skill_id')->nullable()->default(null)->constrained('cv_skills')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_educations');
        Schema::dropIfExists('cv_education_types');
        Schema::dropIfExists('cv_experiences');
        Schema::dropIfExists('cv_experience_types');
        Schema::dropIfExists('cv_languages');
        Schema::dropIfExists('cv_language_users');
        Schema::dropIfExists('cv_settings');
        Schema::dropIfExists('cv_skills');
        Schema::dropIfExists('cv_skill_categories');
        Schema::dropIfExists('cv_skill_users');
    }
};
