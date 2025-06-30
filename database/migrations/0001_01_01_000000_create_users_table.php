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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('is_validated')->default(false);

            $table->string('name_ar')->nullable()->default(null)->unique();
            $table->string('phone')->nullable()->default(null);
            $table->string('cin')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->string('nationalite')->nullable()->default(null);
            $table->string('genre')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('cnss')->nullable()->default(null);
            $table->date('date_naissance')->nullable()->default(null);
            $table->string('lieu_naissance')->nullable()->default(null);
            $table->text('cv')->nullable()->default(null);
            $table->string('description_ar')->nullable()->default(null);
            $table->string('description_en')->nullable()->default(null);
            $table->string('description_fr')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->boolean('publier')->default(false);
            $table->string('folder_name')->nullable()->default(null);


            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
