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
        Schema::create('config_keywords', function (Blueprint $table) {
            $table->id();
            $table->string('keyword')->nullable()->default(null);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->text('created_by')->nullable()->default(null);
            $table->text('updated_by')->nullable()->default(null);
        });

        Schema::create('config_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('route')->nullable()->default(null);
            $table->string('display_type')->nullable()->default(null);
            $table->string('title')->nullable()->default(null);
            $table->text('title_bg_banner')->nullable()->default(null);
            $table->string('widgets')->nullable()->default(null);
            $table->string('specific_data')->nullable()->default(null);
            $table->timestamps();
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
        });

        Schema::create('config_modules', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
        });

        Schema::create('config_module_keywords', function (Blueprint $table) {
            $table->id();
            $table->foreignId('config_module_id')->nullable()->default(null)->constrained('config_modules')->onDelete('set null');
            $table->foreignId('config_keyword_id')->nullable()->default(null)->constrained('config_keywords')->onDelete('set null');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_keywords');
        Schema::dropIfExists('config_layouts');
        Schema::dropIfExists('config_modules');
        Schema::dropIfExists('config_module_keywords');
    }
};
