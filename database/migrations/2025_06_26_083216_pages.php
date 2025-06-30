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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('author_id')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('slug')->unique();
            $table->text('meta_description')->nullable()->default(null);
            $table->text('meta_keywords')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->integer('publier')->default(1);
            $table->text('pdf')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('short_description_fr')->nullable()->default(null);
            $table->string('short_description_en')->nullable()->default(null);
            $table->string('short_description_ar')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->text('target')->nullable()->default(null);
            $table->integer('parent_id')->nullable()->default(null);
            $table->text('display_type')->nullable()->default(null);
            $table->text('link')->nullable()->default(null);
            $table->text('files')->nullable()->default(null);
        });

        Schema::create('page_categories', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('page_per_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->nullable()->default(null)->constrained('pages')->onDelete('set null');
            $table->foreignId('page_category_id')->nullable()->default(null)->constrained('page_categories')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
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
        Schema::dropIfExists('pages');
        Schema::dropIfExists('page_categories');
        Schema::dropIfExists('page_per_categories');
    }
};
