<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('fax')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('location')->nullable()->default(null);
            $table->string('responsable_name')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            $table->foreignId('domaine_id')->nullable()->default(null)->constrained('domaines')->onDelete('set null');
            $table->string('slug')->nullable()->default(null);
            $table->integer('validation')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
