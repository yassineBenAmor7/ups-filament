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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('cover')->nullable()->default(null);
            $table->text('short_description_fr')->nullable()->default(null);
            $table->text('short_description_en')->nullable()->default(null);
            $table->text('short_description_ar')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('for')->nullable()->default(null);
            $table->foreignId('organism_id')->nullable()->default(null)->constrained('organisms')->onDelete('set null');
            $table->string('slug')->nullable()->default(null);
            $table->text('files')->nullable()->default(null);
            $table->string('a_la_une')->nullable()->default(null);
            $table->text('target')->nullable()->default(null);
        });

        Schema::create('newsletters', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->foreignId('parent_id')->nullable()->default(null)->constrained('news_categories')->onDelete('set null');
        });

        Schema::create('news_departments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->nullable()->default(null)->constrained('news')->onDelete('set null');
            $table->foreignId('department_id')->nullable()->default(null)->constrained('departments')->onDelete('set null');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('news_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->nullable()->default(null)->constrained('news')->onDelete('set null');
            $table->foreignId('group_id')->nullable()->default(null)->constrained('groups')->onDelete('set null');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('news_per_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->nullable()->default(null)->constrained('news')->onDelete('set null');
            $table->foreignId('news_category_id')->nullable()->default(null)->constrained('news_categories')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('news_sectors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->nullable()->default(null)->constrained('news')->onDelete('set null');
            $table->foreignId('sector_id')->nullable()->default(null)->constrained('sectors')->onDelete('set null');
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('news_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->nullable()->default(null)->constrained('news')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
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
        Schema::dropIfExists('news');
        Schema::dropIfExists('newsletters');
        Schema::dropIfExists('news_categories');
        Schema::dropIfExists('news_departments');
        Schema::dropIfExists('news_groups');
        Schema::dropIfExists('news_per_categories');
        Schema::dropIfExists('news_sectors');
        Schema::dropIfExists('news_users');
    }
};
