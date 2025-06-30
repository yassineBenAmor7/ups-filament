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
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->string('cover')->nullable()->default(null);
            $table->text('folder')->nullable()->default(null);
            $table->string('lieu')->nullable()->default(null);
            $table->string('date')->nullable()->default(null);
            $table->text('short_description_fr')->nullable()->default(null);
            $table->text('short_description_ar')->nullable()->default(null);
            $table->longText('description_fr')->nullable()->default(null);
            $table->longText('description_en')->nullable()->default(null);
            $table->longText('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->text('short_description_en')->nullable()->default(null);
            // Assuming 'organism_id' refers to organism table, which is not defined in this migration
            $table->integer('organism_id')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('short_code')->nullable()->default(null);
            $table->text('links')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
