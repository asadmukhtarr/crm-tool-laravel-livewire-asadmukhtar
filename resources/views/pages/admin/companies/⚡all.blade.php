<?php

use Livewire\Component;
use App\Models\company;

new class extends Component
{
    //
    public $companies;
    public function mount(){
        $this->companies = company::all();
    }
};
?>

<div>
    <div class="dashboard">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h1>All Companies</h1>
                <p>Manage and view all companies in your CRM system.</p>
            </div>
            <div class="header-actions">
                <button class="btn btn-secondary">
                    <i class="fas fa-file-export"></i> Export
                </button>
                <button class="btn btn-secondary">
                    <i class="fas fa-file-import"></i> Import
                </button>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Company
                </a>
            </div>
        </div>

        <!-- Filters & Search -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row g-3 align-items-end">
                    <div class="col-md-3">
                        <label class="form-label fw-medium">
                            <i class="fas fa-search me-1 text-muted"></i>
                            Search
                        </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search companies...">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-medium">
                            <i class="fas fa-industry me-1 text-muted"></i>
                            Industry
                        </label>
                        <select class="form-select">
                            <option value="">All Industries</option>
                            <option>Technology</option>
                            <option>Healthcare</option>
                            <option>Finance</option>
                            <option>Education</option>
                            <option>Retail</option>
                            <option>Manufacturing</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-medium">
                            <i class="fas fa-circle me-1 text-muted"></i>
                            Status
                        </label>
                        <select class="form-select">
                            <option value="">All Status</option>
                            <option value="active">🟢 Active</option>
                            <option value="inactive">🔴 Inactive</option>
                            <option value="pending">🟡 Pending</option>
                            <option value="suspended">⚫ Suspended</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-medium">
                            <i class="fas fa-star me-1 text-muted"></i>
                            Rating
                        </label>
                        <select class="form-select">
                            <option value="">All Ratings</option>
                            <option>⭐ 1 Star</option>
                            <option>⭐⭐ 2 Stars</option>
                            <option>⭐⭐⭐ 3 Stars</option>
                            <option>⭐⭐⭐⭐ 4 Stars</option>
                            <option>⭐⭐⭐⭐⭐ 5 Stars</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label fw-medium">
                            <i class="fas fa-sort me-1 text-muted"></i>
                            Sort By
                        </label>
                        <select class="form-select">
                            <option>Name A-Z</option>
                            <option>Name Z-A</option>
                            <option>Newest First</option>
                            <option>Oldest First</option>
                            <option>Most Contacts</option>
                            <option>Highest Rating</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Summary -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Total Companies</h3>
                        <p class="stat-number">89</p>
                        <span class="stat-change positive">
                            <i class="fas fa-arrow-up"></i> 8.3%
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Active</h3>
                        <p class="stat-number">67</p>
                        <span class="stat-change positive">
                            <i class="fas fa-arrow-up"></i> 5.2%
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Pending</h3>
                        <p class="stat-number">12</p>
                        <span class="stat-change negative">
                            <i class="fas fa-arrow-down"></i> 2.1%
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon red">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Inactive</h3>
                        <p class="stat-number">10</p>
                        <span class="stat-change negative">
                            <i class="fas fa-arrow-down"></i> 1.5%
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Companies Table -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-building me-2"></i>
                    Companies List
                </h3>
                <div>
                    <span class="badge bg-primary me-2">89 Companies</span>
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>
                                    <input type="checkbox" class="form-check-input">
                                </th>
                                <th>Company</th>
                                <th>Industry</th>
                                <th>Contacts</th>
                                <th>Status</th>
                                <th>Rating</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Company 1 -->
                            @foreach ($companies as $company)
                            <tr>
                                <td>
                                    <input type="checkbox" class="form-check-input">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="company-logo me-2">
                                            <i class="fas fa-building fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">{{ $company->company_name }}</h6>
                                            <small class="text-muted">{{ $company->company_registration_no }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $company->company_industry }}</td>
                                <td>
                                    <span class="badge bg-info">24</span>
                                </td>
                                <td>
                                    @if($company->status == 0)
                                    <span class="badge bg-success">
                                        <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                        Active
                                    </span>
                                    @else 
                                     <span class="badge bg-danger">
                                        <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                        Disable
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    {{ $company->company_rating }}
                                </td>
                                <td>
                                    {{ $company->created_at }}
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-outline-secondary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">Showing 1-5 of 89 companies</span>
                    </div>
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>