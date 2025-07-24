<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // ======================
        // 1. Categories 
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->unsignedInteger('ordering')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });

        // ======================
        // 2. Forms 
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'forms', function (Blueprint $table) {
            $table->id();
            
            // Names (multilingual)
            $table->string('name');
           
            
            // Form metadata
            $table->string('slug')->unique();
           
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('ordering')->default(1);
            
            // Form behavior
            $table->string('action')->nullable();
            $table->string('method')->default('POST');
            $table->boolean('accept_files')->default(false);
            $table->boolean('has_decision')->default(false);
            $table->string('target')->nullable();
            $table->boolean('single_submission')->default(false);
            
            // Dates
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            
            // Content blocks
            $table->text('header')->nullable();
            $table->text('footer')->nullable();
            
            // Media
            $table->string('supplementary_image_1')->nullable();
            $table->string('supplementary_image_2')->nullable();
            $table->string('image_1_position')->nullable();
            $table->string('image_2_position')->nullable();
            
            // Response templates
            $table->json('response_template')->nullable();
            $table->text('response_header')->nullable();
            $table->text('response_footer')->nullable();
            
            // Relationships
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('category_id')->nullable()->constrained(config('zeus-bolt.table-prefix').'categories');
            
            // Tracking
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->json('options')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // ======================
        // 3. Sections
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained(config('zeus-bolt.table-prefix').'forms');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('ordering')->default(1);
            $table->unsignedInteger('columns')->default(1);
            $table->string('icon')->nullable();
            $table->boolean('aside')->default(false);
            $table->boolean('compact')->default(false);
            $table->boolean('borderless')->default(false);
            $table->json('options')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // ======================
        // 4. Fields
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'fields', function (Blueprint $table) {
            $table->id();
             
          
            $table->foreignId('section_id')->nullable(false)->constrained(config('zeus-bolt.table-prefix').'sections');
    $table->string('name')->unique();
    $table->string('type');
    $table->string('label');
    $table->string('placeholder')->nullable();
    $table->json('options')->nullable(); 
    $table->string('default_value')->nullable();
     // Field settings
            $table->boolean('is_required')->default(true);
            $table->boolean('is_disabled')->default(false);
            $table->boolean('is_visible')->default(true);
            $table->unsignedInteger('ordering')->nullable();
    $table->timestamps();
    $table->softDeletes();
        });

       

        // ======================
        // 6. Responses
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained(config('zeus-bolt.table-prefix').'forms');
            $table->foreignId('user_id')->nullable()->constrained('users');
            
            // Status tracking
            $table->string('status')->default('NEW');
            $table->string('confirmation_code')->nullable();
            $table->dateTime('submitted_at')->nullable();
            $table->dateTime('processed_at')->nullable();
            $table->text('notes')->nullable();
            $table->text('paper_response')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });

        // ======================
        // 7. Field Responses
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'field_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('response_id')->constrained(config('zeus-bolt.table-prefix').'responses');
            $table->foreignId('field_id')->constrained(config('zeus-bolt.table-prefix').'fields');
             $table->foreignId('form_id')
        ->nullable()
      
        ->constrained(config('zeus-bolt.table-prefix') . 'forms')
        ->onDelete('cascade');
            $table->text('value')->nullable();
             $table->unsignedBigInteger('author_id')->nullable();

             $table->softDeletes();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

        });

        // ======================
        // 8. Workflow Steps 
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'workflow_steps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });

        // ======================
        // 9. Form Workflow (pivot)
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'form_workflow', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained(config('zeus-bolt.table-prefix').'forms');
            $table->foreignId('workflow_step_id')->constrained(config('zeus-bolt.table-prefix').'workflow_steps');
            $table->unsignedInteger('ordre')->nullable();
            $table->timestamps();
             $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->unique(['form_id', 'workflow_step_id']);
        });

        // ======================
        // 10. Response Approvals
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'response_approvals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('response_id')->constrained(config('zeus-bolt.table-prefix').'responses');
            $table->foreignId('workflow_step_id')->constrained(config('zeus-bolt.table-prefix').'workflow_steps');
            $table->unsignedTinyInteger('status')->default(0);
            $table->foreignId('approved_by')->nullable()->constrained('users');
           
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            

        });

        // ======================
        // 11. Form Permissions
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'form_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained(config('zeus-bolt.table-prefix').'forms');
            $table->foreignId('role_id')->constrained('roles');
            $table->timestamps();
            
            $table->unique(['form_id', 'role_id']);
             $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

        });

        // ======================
        // 12. Collections
        // ======================
        Schema::create(config('zeus-bolt.table-prefix').'collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('values')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'form_permissions');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'response_approvals');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'form_workflow');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'workflow_steps');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'field_responses');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'responses');
      
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'fields');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'sections');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'forms');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'categories');
        Schema::dropIfExists(config('zeus-bolt.table-prefix').'collections');
    }
};