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
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stage_id')->nullable()->default(null)->constrained('stages')->onDelete('set null');
            $table->text('rapport')->nullable()->default(null);
            $table->text('remarque')->nullable()->default(null);
            $table->string('etat')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->text('avis_encadrant')->nullable()->default(null);
            $table->text('rapport_encadrant')->nullable()->default(null);
            $table->timestamp('rapport_encadrant_created_at')->nullable()->default(null);
            $table->integer('stage_rapport_type_id')->nullable()->default(null);
            $table->text('plagiat_rapport')->nullable()->default(null);
            $table->text('plagiat_note')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapports');
    }
};
