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
        Schema::table('soutenance_teachers', function (Blueprint $table) {
   
    $table->dropForeign(['teacher_id']);
    $table->dropForeign(['soutenance_id']);
    

    $table->foreignId('teacher_id')->nullable(false)->change();
    $table->foreignId('soutenance_id')->nullable(false)->change();
    
    
    $table->foreign('teacher_id')
          ->references('id')
          ->on('teachers')
          ->onDelete('cascade');
          
    $table->foreign('soutenance_id')
          ->references('id')
          ->on('soutenances')
          ->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('soutenance_teachers', function (Blueprint $table) {
        $table->dropForeign(['teacher_id']);
        $table->dropForeign(['soutenance_id']);
        
        $table->foreignId('teacher_id')->nullable()->change();
        $table->foreignId('soutenance_id')->nullable()->change();
        
        $table->foreign('teacher_id')
              ->references('id')
              ->on('teachers')
              ->onDelete('set null');
              
        $table->foreign('soutenance_id')
              ->references('id')
              ->on('soutenances')
              ->onDelete('set null');
    });
    }
};
