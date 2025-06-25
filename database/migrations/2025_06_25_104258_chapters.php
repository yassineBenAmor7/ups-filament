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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            // Assuming 'course_id' refers to course table, which is not defined in this migration
            $table->integer('course_id')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('files')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->integer('publier')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
