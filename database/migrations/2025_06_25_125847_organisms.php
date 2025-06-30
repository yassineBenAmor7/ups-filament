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
        Schema::create('organism_types', function (Blueprint $table) {
            $table->id();
            $table->text('designation_fr')->nullable()->default(null);
            $table->text('designation_en')->nullable()->default(null);
            $table->text('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('organisms', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('cover')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);
            $table->string('facebook')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->text('domaine')->nullable()->default(null);
            $table->foreignId('organism_type_id')->nullable()->default(null)->constrained('organism_types')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->date('creation_date')->nullable()->default(null);
        });

        Schema::create('organism_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('organism_id')->nullable()->default(null)->constrained('organisms')->onDelete('set null');
            $table->text('poste')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('responsible')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('organization_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->integer('parent_id')->nullable()->default(null);
            $table->string('title_fr')->nullable()->default(null);
            $table->string('title_en')->nullable()->default(null);
            $table->string('title_ar')->nullable()->default(null);
            $table->string('subtitle_fr')->nullable()->default(null);
            $table->string('subtitle_en')->nullable()->default(null);
            $table->string('subtitle_ar')->nullable()->default(null);
            $table->integer('validation')->nullable()->default(null);
            $table->string('color')->nullable()->default(null);
            $table->integer('order')->nullable()->default(null);
            $table->string('target')->nullable()->default(null);
            $table->text('cover')->nullable()->default(null);
            $table->text('link')->nullable()->default(null);
            $table->string('align')->nullable()->default(null);
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
        Schema::dropIfExists('organisms');
        Schema::dropIfExists('organism_types');
        Schema::dropIfExists('organism_users');
        Schema::dropIfExists('organization_charts');
    }
};
