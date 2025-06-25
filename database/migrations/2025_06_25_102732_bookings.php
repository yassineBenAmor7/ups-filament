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

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // Assuming 'theme_id' refers to theme table, which is not defined in this migration
            $table->integer('theme_id')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('cover')->nullable()->default(null);
            $table->string('isbn')->nullable()->default(null);
            $table->string('author')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('book_id')->nullable()->default(null)->constrained('books')->onDelete('set null');
            $table->string('user_name')->nullable()->default(null);
            $table->string('user_cin')->nullable()->default(null);
            $table->string('book')->nullable()->default(null);
            $table->string('book_theme')->nullable()->default(null);
            $table->string('etat')->nullable()->default(null);
            $table->string('etat_deadline')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->date('date_pris')->nullable()->default(null);
            $table->date('date_retour')->nullable()->default(null);
            $table->date('date_limite')->nullable()->default(null);
        });

        Schema::create('booking_configs', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->default(null);
            $table->string('duration_reservation')->nullable()->default(null);
            $table->string('duration_pret')->nullable()->default(null);
            $table->string('max_reservation')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('booking_configs');
    }
};
