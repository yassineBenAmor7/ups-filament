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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->default(null);
            $table->text('file')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->foreignId('department_id')->nullable()->default(null)->constrained('departments')->onDelete('set null');
            $table->string('teacher_cin')->nullable()->default(null);
            $table->foreignId('sector_id')->nullable()->default(null)->constrained('sectors')->onDelete('set null');
            $table->foreignId('group_id')->nullable()->default(null)->constrained('groups')->onDelete('set null');
            $table->foreignId('group_td_id')->nullable()->default(null)->constrained('group_tds')->onDelete('set null');
            $table->timestamp('created_at')->nullable()->default(null);
            $table->timestamp('updated_at')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->integer('publier')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
