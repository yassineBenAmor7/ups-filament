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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('cover')->nullable()->default(null);
            $table->string('place')->nullable()->default(null);
            $table->string('organizer')->nullable()->default(null);
            $table->string('date_start')->nullable()->default(null);
            $table->string('date_end')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->foreignId('organism_id')->nullable()->default(null)->constrained('organisms')->onDelete('set null');
            $table->string('slug')->nullable()->default(null);
            $table->text('files')->nullable()->default(null);
            $table->text('planning')->nullable()->default(null);
            $table->string('a_la_une')->nullable()->default(null);
            $table->text('target')->nullable()->default(null);
        });

        Schema::create('events_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->foreignId('parent_id')->nullable()->default(null)->constrained('events_types')->onDelete('set null');
        });

        Schema::create('event_categories', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->foreignId('parent_id')->nullable()->default(null)->constrained('event_categories')->onDelete('set null');
        });

        Schema::create('event_per_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->nullable()->default(null)->constrained('events')->onDelete('set null');
            $table->foreignId('events_categorie_id')->nullable()->default(null)->constrained('event_categories')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('event_per_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->nullable()->default(null)->constrained('events')->onDelete('set null');
            $table->foreignId('events_type_id')->nullable()->default(null)->constrained('events_types')->onDelete('set null');
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
        Schema::dropIfExists('events');
        Schema::dropIfExists('events_types');
        Schema::dropIfExists('event_categories');
        Schema::dropIfExists('event_per_categories');
        Schema::dropIfExists('event_per_types');
    }
};
