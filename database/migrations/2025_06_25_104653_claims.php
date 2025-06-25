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

        Schema::create('claim_types', function (Blueprint $table) {
            $table->id();
            $table->string('designation_fr')->nullable()->default(null);
            $table->string('designation_en')->nullable()->default(null);
            $table->string('designation_ar')->nullable()->default(null);
            $table->integer('order')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->string('module')->nullable()->default(null);
            $table->foreignId('responsible_id')->nullable()->default(null)->on('users')->onDelete('set null');
            $table->foreignId('claim_destination_id')->nullable()->default(null)->on('destinations')->onDelete('set null');
        });

        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable()->default(null);
            $table->text('message')->nullable()->default(null);
            $table->string('file')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
            $table->integer('publier')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->foreignId('destination_id')->nullable()->default(null)->on('destinations')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->default(null)->on('users')->onDelete('set null');
            $table->string('status')->nullable()->default(null);
            $table->string('priority')->nullable()->default(null);
            $table->foreignId('claim_type_id')->nullable()->default(null)->on('claim_types')->onDelete('set null');
            $table->foreignId('responsible_id')->nullable()->default(null)->on('users')->onDelete('set null');
            $table->integer('frigidaire')->nullable()->default(null);
            $table->integer('ref_id')->nullable()->default(null);
            $table->text('feedback')->nullable()->default(null);
        });

        Schema::create('claim_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('claim_id')->nullable()->default(null)->on('claims')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->default(null)->on('users')->onDelete('set null');
            $table->text('message')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
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
        Schema::dropIfExists('claim_types');
        Schema::dropIfExists('claims');
        Schema::dropIfExists('claim_users');
    }
};
