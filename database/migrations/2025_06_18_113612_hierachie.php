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
        Schema::create('sectors', function (Blueprint $table) {
            $table->id();
            $table->integer('sector_type_id')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->integer('department_id')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->string('educational_coordinator')->nullable()->default(null);
            $table->string('internship_coordinator')->nullable()->default(null);
            $table->text('cibles')->nullable()->default(null);
            // Add any additional fields as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
