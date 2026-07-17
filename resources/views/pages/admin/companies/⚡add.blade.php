<?php

use Livewire\Component;
use App\Models\company;

new class extends Component
{
    //
    public $company_name;
    public $company_registration_no;
    public $company_email;
    public $company_phone;
    public $company_address;
    public $company_city;
    public $company_state;
    public $company_zip;
    public $company_country;
    public $company_website;
    public $company_industry;
    public $company_size;
    public $company_rating;
    public $company_founded_date;
    public $company_owner;
    public $company_tags;
    public $company_notes;
    protected $rules = [
        'company_name' => 'required',
        'company_registration_no' => 'required',
        'company_email' => 'required',
    ];
    // form submit ..
    public function form_submit()
    {
        $this->validate();
    //    dd('wotkr');
        $company = new company;
        $company->company_name = $this->company_name;
        $company->company_registration_no = $this->company_registration_no;
        $company->company_email = $this->company_email;
        $company->company_phone = $this->company_phone;
        $company->company_address = $this->company_address;
        $company->company_city = $this->company_city;
        $company->company_state = $this->company_state;
        $company->company_zip = $this->company_zip;
        $company->company_country = $this->company_country;
        $company->company_website = $this->company_website;
        $company->company_industry = $this->company_industry;
        $company->company_size = $this->company_size;
        $company->company_rating = $this->company_rating;
        $company->company_founded_date = $this->company_founded_date;
        $company->company_owner = $this->company_owner;
        $company->company_tags = $this->company_tags;
        $company->company_notes = $this->company_notes;
        $company->save();
        session()->flash('success', 'Company created successfully');
        $this->reset();
    }
};
?>

<div>
    <div class="dashboard">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h1>Add New Company</h1>
                <p>Create a new company record in your CRM system.</p>
            </div>
            <div class="header-actions">
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to Companies
                </a>
                <button type="button" form="companyForm" wire:click="form_submit" class="btn btn-primary">
                    <i class="fas fa-save" wire:loading.remove></i> <i class="fas fa-spinner fa-spin" wire:loading></i> Save Company
                </button>
            </div>
        </div>

        <!-- Company Form -->
        <div class="card">
            <div class="card-body">
                <form id="companyForm" >
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-lg-8">
                            <!-- Basic Information -->
                            <div class="mb-4">
                                <h5 class="fw-semibold mb-3">
                                    <i class="fas fa-building text-primary me-2"></i>
                                    Basic Information
                                </h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-building me-1 text-muted"></i>
                                            Company Name <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" wire:model.live="company_name" placeholder="Enter company name">
                                        @error('company_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-hashtag me-1 text-muted"></i>
                                            Company Registration No.
                                        </label>
                                        <input type="text" class="form-control" wire:model="company_registration_no" placeholder="Enter registration number">
                                        @error('company_registration_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-globe me-1 text-muted"></i>
                                            Website
                                        </label>
                                        <input type="url" class="form-control" wire:model="company_website" placeholder="https://example.com">
                                        @error('company_website')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-envelope me-1 text-muted"></i>
                                            Company Email
                                        </label>
                                        <input type="email" class="form-control" wire:model="company_email" placeholder="info@company.com">
                                        @error('company_email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-phone me-1 text-muted"></i>
                                            Phone Number
                                        </label>
                                        <input type="tel" class="form-control" wire:model="company_phone" placeholder="+1 234 567 8900">
                                        @error('company_phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-industry me-1 text-muted"></i>
                                            Industry
                                        </label>
                                        <select class="form-select" wire:model="company_industry">
                                            <option value="">Select Industry</option>
                                            <option>Technology</option>
                                            <option>Healthcare</option>
                                            <option>Finance</option>
                                            <option>Education</option>
                                            <option>Retail</option>
                                            <option>Manufacturing</option>
                                            <option>Real Estate</option>
                                            <option>Transportation</option>
                                            <option>Other</option>
                                        </select>
                                        @error('company_industry')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-tag me-1 text-muted"></i>
                                            Company Type
                                        </label>
                                        <select class="form-select" wire:model="company_type">
                                            <option value="">Select Type</option>
                                            <option>Public Limited</option>
                                            <option>Private Limited</option>
                                            <option>Partnership</option>
                                            <option>Sole Proprietorship</option>
                                            <option>Non-Profit</option>
                                            <option>Government</option>
                                            <option>Other</option>
                                        </select>
                                        @error('company_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-users me-1 text-muted"></i>
                                            Employee Count
                                        </label>
                                        <select class="form-select" wire:model="company_employee_count">
                                            <option value="">Select Range</option>
                                            <option>1-10</option>
                                            <option>11-50</option>
                                            <option>51-200</option>
                                            <option>201-500</option>
                                            <option>501-1000</option>
                                            <option>1000+</option>
                                        </select>
                                        @error('company_employee_count')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-align-left me-1 text-muted"></i>
                                            Description
                                        </label>
                                        <textarea class="form-control" wire:model="company_description" rows="3" placeholder="Enter company description..."></textarea>
                                        @error('company_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Address Information -->
                            <div class="mb-4">
                                <h5 class="fw-semibold mb-3">
                                    <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                    Address Information
                                </h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-road me-1 text-muted"></i>
                                            Street Address
                                        </label>
                                        <input type="text" class="form-control" wire:model="company_address" placeholder="Enter street address">
                                        @error('company_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-city me-1 text-muted"></i>
                                            City
                                        </label>
                                        <input type="text" class="form-control" wire:model="company_city" placeholder="Enter city">
                                        @error('company_city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-map-pin me-1 text-muted"></i>
                                            State/Province
                                        </label>
                                        <input type="text" class="form-control" wire:model="company_state" placeholder="Enter state">
                                        @error('company_state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-mailbox me-1 text-muted"></i>
                                            Postal Code
                                        </label>
                                        <input type="text" class="form-control" wire:model="company_postal_code" placeholder="Enter postal code">
                                        @error('company_postal_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-flag me-1 text-muted"></i>
                                            Country
                                        </label>
                                        <select class="form-select" wire:model="company_country">
                                            <option value="">Select Country</option>
                                            <option>United States</option>
                                            <option>United Kingdom</option>
                                            <option>Canada</option>
                                            <option>Australia</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                            <option>India</option>
                                            <option>Pakistan</option>
                                            <option>Other</option>
                                        </select>
                                        @error('company_country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="mb-4">
                                <h5 class="fw-semibold mb-3">
                                    <i class="fas fa-share-alt text-primary me-2"></i>
                                    Social Media
                                </h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fab fa-facebook text-primary me-1"></i>
                                            Facebook
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                            <input type="text" class="form-control" wire:model="company_facebook" placeholder="Facebook URL">
                                        </div>
                                        @error('company_facebook')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fab fa-twitter text-info me-1"></i>
                                            Twitter/X
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                            <input type="text" class="form-control" wire:model="company_twitter" placeholder="Twitter URL">
                                        </div>
                                        @error('company_twitter')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fab fa-linkedin text-primary me-1"></i>
                                            LinkedIn
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                            <input type="text" class="form-control" wire:model="company_linkedin" placeholder="LinkedIn URL">
                                        </div>
                                        @error('company_linkedin')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fab fa-instagram text-danger me-1"></i>
                                            Instagram
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            <input type="text" class="form-control" wire:model="company_instagram" placeholder="Instagram URL">
                                        </div>
                                        @error('company_instagram')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fab fa-youtube text-danger me-1"></i>
                                            YouTube
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                            <input type="text" class="form-control" wire:model="company_youtube" placeholder="YouTube URL">
                                        </div>
                                        @error('company_youtube')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label fw-medium">
                                            <i class="fab fa-github text-dark me-1"></i>
                                            GitHub
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fab fa-github"></i></span>
                                            <input type="text" class="form-control" wire:model="company_github" placeholder="GitHub URL">
                                        </div>
                                        @error('company_github')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column - Additional Info -->
                        <div class="col-lg-4">
                            <!-- Company Status -->
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="fw-semibold mb-0">
                                        <i class="fas fa-circle me-2" style="color: #10B981;"></i>
                                        Company Status
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-bolt me-1 text-warning"></i>
                                            Status
                                        </label>
                                        <select class="form-select" wire:model="company_status">
                                            <option value="active" selected>🟢 Active</option>
                                            <option value="inactive">🔴 Inactive</option>
                                            <option value="pending">🟡 Pending</option>
                                            <option value="suspended">⚫ Suspended</option>
                                        </select>
                                        @error('company_status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-star me-1 text-warning"></i>
                                            Rating
                                        </label>
                                        <select class="form-select" wire:model="company_rating">
                                            <option value="">Select Rating</option>
                                            <option>⭐ 1 Star</option>
                                            <option>⭐⭐ 2 Stars</option>
                                            <option selected>⭐⭐⭐ 3 Stars</option>
                                            <option>⭐⭐⭐⭐ 4 Stars</option>
                                            <option>⭐⭐⭐⭐⭐ 5 Stars</option>
                                        </select>
                                        @error('company_rating')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-calendar-alt me-1 text-muted"></i>
                                            Founded Date
                                        </label>
                                        <input type="date" wire:model="company_founded_date" class="form-control">
                                        @error('company_founded_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Assigned Information -->
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h6 class="fw-semibold mb-0">
                                        <i class="fas fa-user-tie me-2"></i>
                                        Assignment
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-user me-1 text-muted"></i>
                                            Owner
                                        </label>
                                        <select class="form-select" wire:model="company_owner">
                                            <option value="">Select Owner</option>
                                            <option>John Doe</option>
                                            <option selected>Sarah Smith</option>
                                            <option>Mike Johnson</option>
                                            <option>Emily Brown</option>
                                        </select>
                                        @error('company_owner')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="form-label fw-medium">
                                            <i class="fas fa-tags me-1 text-muted"></i>
                                            Tags
                                        </label>
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-primary p-2">
                                                <i class="fas fa-times-circle me-1" style="cursor: pointer;"></i>
                                                Technology
                                            </span>
                                            <span class="badge bg-success p-2">
                                                <i class="fas fa-times-circle me-1" style="cursor: pointer;"></i>
                                                Enterprise
                                            </span>
                                            <span class="badge bg-warning text-dark p-2">
                                                <i class="fas fa-times-circle me-1" style="cursor: pointer;"></i>
                                                B2B
                                            </span>
                                            <button class="btn btn-sm btn-outline-secondary rounded-pill">
                                                <i class="fas fa-plus"></i> Add Tag
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Actions -->
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h6 class="fw-semibold mb-0">
                                        <i class="fas fa-bolt me-2"></i>
                                        Quick Actions
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-plus-circle me-2"></i>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>