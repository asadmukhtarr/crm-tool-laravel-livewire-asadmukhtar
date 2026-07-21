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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            
            // Basic Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            
            // Company Relation
            $table->foreignId('company_id')->nullable()->constrained()->onDelete('set null');
            $table->string('job_title')->nullable();
            $table->string('department')->nullable();
            
            // Contact Details
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            
            // Social Media
            $table->json('social_media')->nullable(); // {"facebook":"url","linkedin":"url","twitter":"url"}
            
            // Additional Information
            $table->string('source')->nullable(); // Website, Referral, Social Media, etc.
            $table->string('lead_source')->nullable();
            $table->string('lead_status')->default('new'); // new, contacted, qualified, lost, customer
            $table->integer('lead_score')->default(0);
            
            // Communication Preferences
            $table->boolean('email_opt_in')->default(true);
            $table->boolean('sms_opt_in')->default(false);
            $table->boolean('call_opt_in')->default(true);
            
            // Personal Information
            $table->date('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            
            // Notes & Tags
            $table->text('notes')->nullable();
            $table->json('tags')->nullable(); // ["vip", "enterprise", "priority"]
            
            // Assignment
            $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            
            // Status
            $table->enum('status', ['active', 'inactive', 'blocked'])->default('active');
            
            // Timestamps
            $table->timestamps();
            $table->timestamp('last_contacted_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            
            // Indexes for better performance
            $table->index(['first_name', 'last_name']);
            $table->index('email');
            $table->index('phone');
            $table->index('company_id');
            $table->index('lead_status');
            $table->index('status');
            $table->index('assigned_to');
            $table->index('created_by');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};