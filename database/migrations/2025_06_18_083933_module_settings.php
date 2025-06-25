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
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('coordinates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('current_year_id')->nullable()->default(null)
                ->constrained('years')->onDelete('set null');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('abbreviation')->nullable()->default(null);
            $table->string('addresse_fr')->nullable()->default(null);
            $table->string('addresse_en')->nullable()->default(null);
            $table->string('addresse_ar')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('phone_2')->nullable()->default(null);
            $table->string('fax')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('cover')->nullable()->default(null);
            $table->string('university')->nullable()->default(null);
            $table->string('ministere')->nullable()->default(null);
            $table->string('facebook_link')->nullable()->default(null);
            $table->string('youtube_link')->nullable()->default(null);
            $table->string('google_link')->nullable()->default(null);
            $table->string('linkedin_link')->nullable()->default(null);
            $table->string('instagram_link')->nullable()->default(null);
            $table->string('favicon')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);
            $table->string('logo_footer')->nullable()->default(null);
            $table->string('short_description_fr')->nullable()->default(null);
            $table->string('short_description_en')->nullable()->default(null);
            $table->string('short_description_ar')->nullable()->default(null);
            $table->string('description_fr')->nullable()->default(null);
            $table->string('description_en')->nullable()->default(null);
            $table->string('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->date('creation_date')->nullable()->default(null);
            $table->string('white_logo')->nullable()->default(null);
            $table->string('black_logo')->nullable()->default(null);
            $table->string('default_banner')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinates');
        Schema::dropIfExists('years');
    }
};
