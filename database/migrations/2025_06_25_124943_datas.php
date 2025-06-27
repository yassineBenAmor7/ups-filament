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
        Schema::create('data_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('display_name_singular');
            $table->string('display_name_plural');
            $table->string('icon')->nullable()->default(null);
            $table->string('model_name')->nullable()->default(null);
            $table->string('policy_name')->nullable()->default(null);
            $table->string('controller')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->boolean('generate_permissions')->default(0);
            $table->boolean('server_side')->default(0);
            $table->text('details')->nullable()->default(null);
            $table->timestamps();
            $table->text('modele_excel')->nullable()->default(null);
            $table->integer('auto_filter')->nullable()->default(null);
            $table->string('unique_columns1')->nullable()->default(null);
            $table->string('unique_columns2')->nullable()->default(null);
            $table->string('required_columns')->nullable()->default(null);
            $table->string('statistiques_route')->nullable()->default(null);
            $table->integer('is_import')->nullable()->default(null);
        });

        Schema::create('data_rows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_type_id')->constrained('data_types')->onDelete('cascade')->onUpdate('cascade');
            $table->string('field');
            $table->string('type');
            $table->string('display_name');
            $table->boolean('required')->default(0);
            $table->boolean('browse')->default(1);
            $table->boolean('read')->default(1);
            $table->boolean('edit')->default(1);
            $table->boolean('add')->default(1);
            $table->boolean('delete')->default(1);
            $table->text('details')->nullable()->default(null);
            $table->integer('order')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_rows');
        Schema::dropIfExists('data_types');
    }
};
