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
         Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_cin');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('cover')->nullable()->default(null);
            $table->longtext('description_en')->nullable()->default(null);
            $table->longtext('description_fr')->nullable()->default(null);
            $table->longtext('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

            Schema::create('sector_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
        });
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sector_type_id')->references('id')->on('sector_types')->onDelete('cascade')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('plan_etude')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('educational_coordinator')->nullable()->default(null);
            $table->string('internship_coordinator')->nullable()->default(null);
        });





        Schema::create('plaquette_periodiques', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable()->default(null);
            $table->foreignId('sector_id')->nullable()->default(null)->references('id')->on('sectors')->onDelete('cascade');
            $table->foreignId('year_id')->nullable()->default(null)->references('id')->on('years')->onDelete('cascade');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('coordination_sectors', function (Blueprint $table) {
            $table->id();
            $table->integer('sector_id');
            $table->integer('user_id');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->foreignId('sector_id')->nullable()->default(null)->references('id')->on('sectors')->onDelete('cascade');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('group_tds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->nullable()->default(null)->references('id')->on('groups')->onDelete('cascade');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('group_tds_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_td_id')->nullable()->default(null)->references('id')->on('group_tds')->onDelete('cascade');
            $table->foreignId('teacher_id')->nullable()->default(null)->references('id')->on('teachers')->onDelete('cascade');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('group_tps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_td_id')->nullable()->default(null)->references('id')->on('group_tds')->onDelete('cascade');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sectors');
        Schema::dropIfExists('group_tps');
        Schema::dropIfExists('group_tds_teachers');
        Schema::dropIfExists('group_tds');
        Schema::dropIfExists('groups');
        Schema::dropIfExists('coordination_sectors');
        Schema::dropIfExists('plaquette_periodiques');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('sector_types');
    }
};
