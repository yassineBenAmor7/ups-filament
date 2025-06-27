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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->integer('ordre')->nullable()->default(null);
            $table->text('photo')->nullable()->default(null);
            $table->string('title_fr')->nullable()->default(null);
            $table->string('title_en')->nullable()->default(null);
            $table->string('title_ar')->nullable()->default(null);
            $table->text('link_btn_1')->nullable()->default(null);
            $table->string('btn_text_fr')->nullable()->default(null);
            $table->string('btn_text_en')->nullable()->default(null);
            $table->string('btn_text_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->text('btn_text_fr_2')->nullable()->default(null);
            $table->text('btn_text_en_2')->nullable()->default(null);
            $table->text('btn_text_ar_2')->nullable()->default(null);
            $table->text('link_btn_2')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->text('video')->nullable()->default(null);
            $table->text('type')->nullable()->default(null);
            $table->integer('show_periode')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
