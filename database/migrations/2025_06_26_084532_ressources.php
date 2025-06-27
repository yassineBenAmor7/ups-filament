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
        Schema::create('ressource_categories', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });

        Schema::create('ressource_suppliers', function (Blueprint $table) {
            $table->id();
            $table->text('logo')->nullable()->default(null);
            $table->string('raison_social')->nullable()->default(null);
            $table->string('mf')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('phone1')->nullable()->default(null);
            $table->string('phone2')->nullable()->default(null);
            $table->text('website')->nullable()->default(null);
            $table->text('domaine')->nullable()->default(null);
            $table->string('responsable_name')->nullable()->default(null);
            $table->string('responsable_email')->nullable()->default(null);
            $table->string('responsable_phone')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ressource_category_id')->nullable()->default(null)->constrained('ressource_categories')->onDelete('set null');
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->text('cover')->nullable()->default(null);
            $table->float('pu')->nullable()->default(null);
            $table->integer('quantity')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->foreignId('supplier_id')->nullable()->default(null)->constrained('ressource_suppliers')->onDelete('set null');
            $table->text('description_fr')->nullable()->default(null);
            $table->text('description_en')->nullable()->default(null);
            $table->text('description_ar')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
        });

        Schema::create('ressource_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->default(null)->constrained('users')->onDelete('set null');
            $table->integer('product_id')->nullable()->default(null);
            $table->string('user_name')->nullable()->default(null);
            $table->string('user_cin')->nullable()->default(null);
            $table->string('product')->nullable()->default(null);
            $table->string('product_category')->nullable()->default(null);
            $table->string('etat')->nullable()->default(null);
            $table->string('etat_deadline')->nullable()->default(null);
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
        Schema::dropIfExists('ressources');
        Schema::dropIfExists('ressource_categories');
        Schema::dropIfExists('ressource_reservations');
        Schema::dropIfExists('ressource_suppliers');
    }
};
