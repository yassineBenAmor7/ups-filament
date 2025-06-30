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
        Schema::create('laureates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->nullable()->default(null)->constrained('years')->onDelete('set null');
            $table->string('name')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->string('sector')->nullable()->default(null);
            $table->double('score')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laureates');
    }
};
