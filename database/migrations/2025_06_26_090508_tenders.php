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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->text('files')->nullable()->default(null);
            $table->text('cdc')->nullable()->default(null);
            $table->text('resultat')->nullable()->default(null);
            $table->text('avis')->nullable()->default(null);
            $table->string('start_date')->nullable()->default(null);
            $table->string('end_date')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('consultation_number')->nullable()->default(null);
        });

        Schema::create('tender_enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('url_file')->nullable()->default(null);
            $table->foreignId('tender_id')->nullable()->default(null)->constrained('tenders')->onDelete('set null');
            $table->foreignId('entreprise_id')->nullable()->default(null)->constrained('entreprises')->onDelete('set null');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('tender_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tender_id')->nullable()->default(null)->constrained('tenders')->onDelete('set null');
            $table->foreignId('entreprise_id')->nullable()->default(null)->constrained('entreprises')->onDelete('set null');
            $table->text('files')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
        Schema::dropIfExists('tender_enterprises');
        Schema::dropIfExists('tender_submissions');
    }
};
