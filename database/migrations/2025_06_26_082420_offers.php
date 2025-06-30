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
        Schema::create('offer_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('cover_fr')->nullable()->default(null);
            $table->string('cover_en')->nullable()->default(null);
            $table->string('cover_ar')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable()->default(null);
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('responsible')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('cover')->nullable()->default(null);
            $table->foreignId('entreprise_id')->nullable()->default(null)->constrained('entreprises')->onDelete('set null');
            $table->integer('publier')->nullable()->default(null);
            $table->timestamp('expiration_date')->nullable()->default(null);
            $table->integer('mode')->nullable()->default(null);
            $table->foreignId('offer_type_id')->nullable()->default(null)->constrained('offer_types')->onDelete('set null');
        });

        Schema::create('offer_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->foreignId('type_id')->nullable()->default(null)->constrained('offer_types')->onDelete('set null');
            $table->string('domaine')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->date('start_date')->nullable()->default(null);
            $table->date('end_date')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('offer_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id')->nullable()->default(null)->constrained('offers')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->text('note')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('seen')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
        Schema::dropIfExists('offer_requests');
        Schema::dropIfExists('offer_types');
        Schema::dropIfExists('offer_users');
    }
};
