<?php

use Livewire\Component;
use App\Models\company;

new class extends Component
{
    //
    public $company;
    public function mount($id){
        $this->company = company::find($id);
      //  dd($this->company);
    }
    
};
?>

<div>
    <div class="dashboard">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <div class="d-flex align-items-center gap-3">
                    <div class="company-logo-large">
                        <i class="fas fa-building fa-3x text-primary"></i>
                    </div>
                    <div>
                        <h1 class="mb-0">TechCorp Solutions</h1>
                        <p class="mb-0">
                            <span class="badge bg-success">
                                <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                Active
                            </span>
                            <span class="text-muted ms-2">TC-2024-001</span>
                            <span class="text-muted ms-2">|</span>
                            <span class="text-muted ms-2">Founded: Jan 15, 2024</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="header-actions">
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <button class="btn btn-primary">
                    <i class="fas fa-envelope"></i> Send Email
                </button>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Total Contacts</h3>
                        <p class="stat-number">24</p>
                        <a href="#" class="text-primary" style="font-size: 12px;">View all contacts</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Active Deals</h3>
                        <p class="stat-number">12</p>
                        <a href="#" class="text-primary" style="font-size: 12px;">View pipeline</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Open Tasks</h3>
                        <p class="stat-number">8</p>
                        <a href="#" class="text-primary" style="font-size: 12px;">View tasks</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Communications</h3>
                        <p class="stat-number">45</p>
                        <a href="#" class="text-primary" style="font-size: 12px;">View activity</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Left Column - Company Details -->
            <div class="col-lg-8">
                <!-- Company Information -->
                <!-- Company Information -->
<div class="card mb-4">
    <div class="card-header">
        <h5 class="fw-semibold mb-0">
            <i class="fas fa-info-circle text-primary me-2"></i>
            Company Information
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="text-muted small fw-medium">Company Name</label>
                <p class="fw-semibold">{{ $company->company_name ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">Registration No.</label>
                <p class="fw-semibold">{{ $company->company_registration_no ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-globe me-1"></i> Website
                </label>
                <p>
                    @if($company->company_website)
                        <a href="{{ $company->company_website }}" target="_blank" class="text-primary">
                            {{ $company->company_website }}
                        </a>
                    @else
                        <span class="text-muted">N/A</span>
                    @endif
                </p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-envelope me-1"></i> Email
                </label>
                <p>
                    @if($company->company_email)
                        <a href="mailto:{{ $company->company_email }}" class="text-primary">
                            {{ $company->company_email }}
                        </a>
                    @else
                        <span class="text-muted">N/A</span>
                    @endif
                </p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-phone me-1"></i> Phone
                </label>
                <p>{{ $company->company_phone ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-industry me-1"></i> Industry
                </label>
                <p>{{ $company->company_industry ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-tag me-1"></i> Company Type
                </label>
                <p>{{ $company->company_type ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-users me-1"></i> Employee Count
                </label>
                <p>{{ $company->company_size ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-calendar-alt me-1"></i> Founded Date
                </label>
                <p>{{ $company->company_founded_date ? \Carbon\Carbon::parse($company->company_founded_date)->format('M d, Y') : 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-star me-1"></i> Rating
                </label>
                <p>
                    <span class="text-warning">
                        {{ $company->company_rating ?? 'No description available.' }}
                    </span>
                </p>
            </div>
            <div class="col-12">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-align-left me-1"></i> Description
                </label>
                <p class="mb-0">{{ $company->company_notes ?? 'No description available.' }}</p>
            </div>
        </div>
    </div>
</div>

                <!-- Address Information -->
                <!-- Address Information -->
<div class="card mb-4">
    <div class="card-header">
        <h5 class="fw-semibold mb-0">
            <i class="fas fa-map-marker-alt text-primary me-2"></i>
            Address Information
        </h5>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-road me-1"></i> Street Address
                </label>
                <p>{{ $company->company_address ?? 'N/A' }}</p>
            </div>
            <div class="col-md-6">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-city me-1"></i> City
                </label>
                <p>{{ $company->company_city ?? 'N/A' }}</p>
            </div>
            <div class="col-md-4">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-map-pin me-1"></i> State
                </label>
                <p>{{ $company->company_state ?? 'N/A' }}</p>
            </div>
            <div class="col-md-4">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-mailbox me-1"></i> Postal Code
                </label>
                <p>{{ $company->company_zip ?? 'N/A' }}</p>
            </div>
            <div class="col-md-4">
                <label class="text-muted small fw-medium">
                    <i class="fas fa-flag me-1"></i> Country
                </label>
                <p>{{ $company->company_country ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
</div>

                <!-- Social Media -->
                <!-- Social Media -->
<div class="card mb-4">
    <div class="card-header">
        <h5 class="fw-semibold mb-0">
            <i class="fas fa-share-alt text-primary me-2"></i>
            Social Media
        </h5>
    </div>
    <div class="card-body">
        <div class="d-flex flex-wrap gap-3">
            @php
                $socialMedia = json_decode($company->company_social ?? '{}', true);
            @endphp
            
            @if(isset($socialMedia['facebook']))
                <a href="{{ $socialMedia['facebook'] }}" target="_blank" class="btn btn-outline-primary">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
            @endif
            
            @if(isset($socialMedia['twitter']))
                <a href="{{ $socialMedia['twitter'] }}" target="_blank" class="btn btn-outline-info">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
            @endif
            
            @if(isset($socialMedia['linkedin']))
                <a href="{{ $socialMedia['linkedin'] }}" target="_blank" class="btn btn-outline-primary">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            @endif
            
            @if(isset($socialMedia['instagram']))
                <a href="{{ $socialMedia['instagram'] }}" target="_blank" class="btn btn-outline-danger">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            @endif
            
            @if(isset($socialMedia['youtube']))
                <a href="{{ $socialMedia['youtube'] }}" target="_blank" class="btn btn-outline-danger">
                    <i class="fab fa-youtube"></i> YouTube
                </a>
            @endif
            
            @if(isset($socialMedia['github']))
                <a href="{{ $socialMedia['github'] }}" target="_blank" class="btn btn-outline-secondary">
                    <i class="fab fa-github"></i> GitHub
                </a>
            @endif
            
            @if(empty($socialMedia))
                <p class="text-muted">No social media links available.</p>
            @endif
        </div>
    </div>
</div>

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="fw-semibold mb-0">
                            <i class="fas fa-history text-primary me-2"></i>
                            Recent Activity
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="activity-list">
                            <div class="activity-item">
                                <div class="activity-icon blue">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>John Doe</strong> added a new contact</p>
                                    <span class="activity-time">2 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon green">
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Sarah Smith</strong> updated company information</p>
                                    <span class="activity-time">5 hours ago</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon purple">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Mike Johnson</strong> completed a task</p>
                                    <span class="activity-time">1 day ago</span>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-icon orange">
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="activity-info">
                                    <p><strong>Emily Brown</strong> sent an email</p>
                                    <span class="activity-time">2 days ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Additional Info -->
            <div class="col-lg-4">
                <!-- Tags -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="fw-semibold mb-0">
                            <i class="fas fa-tags text-primary me-2"></i>
                            Tags
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary p-2">
                                <i class="fas fa-tag me-1"></i>
                                Technology
                            </span>
                            <span class="badge bg-success p-2">
                                <i class="fas fa-tag me-1"></i>
                                Enterprise
                            </span>
                            <span class="badge bg-info p-2">
                                <i class="fas fa-tag me-1"></i>
                                B2B
                            </span>
                            <span class="badge bg-warning text-dark p-2">
                                <i class="fas fa-tag me-1"></i>
                                Startup
                            </span>
                            <span class="badge bg-secondary p-2">
                                <i class="fas fa-tag me-1"></i>
                                SaaS
                            </span>
                            <span class="badge bg-danger p-2">
                                <i class="fas fa-tag me-1"></i>
                                High Priority
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Assigned Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="fw-semibold mb-0">
                            <i class="fas fa-user-tie text-primary me-2"></i>
                            Assignment
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="text-muted small fw-medium">Company Owner</label>
                            <div class="d-flex align-items-center mt-1">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Smith&background=4F46E5&color=fff" 
                                     class="rounded-circle me-2" width="40" height="40">
                                <div>
                                    <p class="fw-semibold mb-0">Sarah Smith</p>
                                    <small class="text-muted">Senior Account Manager</small>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="text-muted small fw-medium">Team Members</label>
                            <div class="d-flex mt-1">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=10B981&color=fff" 
                                     class="rounded-circle me-1" width="32" height="32" title="John Doe">
                                <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=8B5CF6&color=fff" 
                                     class="rounded-circle me-1" width="32" height="32" title="Mike Johnson">
                                <img src="https://ui-avatars.com/api/?name=Emily+Brown&background=F59E0B&color=fff" 
                                     class="rounded-circle me-1" width="32" height="32" title="Emily Brown">
                                <button class="btn btn-sm btn-outline-secondary rounded-circle" style="width: 32px; height: 32px;">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="fw-semibold mb-0">
                            <i class="fas fa-bolt text-primary me-2"></i>
                            Quick Actions
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-user-plus me-2"></i>
                                Add Contact
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="fas fa-file-invoice me-2"></i>
                                Create Deal
                            </button>
                            <button class="btn btn-outline-info">
                                <i class="fas fa-calendar-plus me-2"></i>
                                Schedule Meeting
                            </button>
                            <button class="btn btn-outline-warning">
                                <i class="fas fa-envelope me-2"></i>
                                Send Email
                            </button>
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-phone me-2"></i>
                                Log Call
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="fas fa-tasks me-2"></i>
                                Create Task
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>