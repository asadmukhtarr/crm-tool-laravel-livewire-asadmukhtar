<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="dashboard">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h1>Dashboard</h1>
                <p>Welcome back, Admin! Here's what's happening with your CRM.</p>
            </div>
            <div class="header-actions">
                <button class="btn btn-secondary">
                    <i class="fas fa-calendar-alt"></i> Today: {{ date('M d, Y') }}
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New
                </button>
                <button class="btn btn-secondary">
                    <i class="fas fa-download"></i> Export
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3>Total Contacts</h3>
                    <p class="stat-number">1,247</p>
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">
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

            <div class="stat-card">
                <div class="stat-icon purple">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-info">
                    <h3>Active Deals</h3>
                    <p class="stat-number">156</p>
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 23.7%
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="stat-info">
                    <h3>Pending Tasks</h3>
                    <p class="stat-number">67</p>
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 5.2%
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon red">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="stat-info">
                    <h3>Unread Emails</h3>
                    <p class="stat-number">28</p>
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 2.1%
                    </span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon teal">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="stat-info">
                    <h3>Revenue</h3>
                    <p class="stat-number">$48,250</p>
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 15.8%
                    </span>
                </div>
            </div>
        </div>

        <!-- Charts & Activity Section -->
        <div class="dashboard-grid">
            <!-- Activity Chart -->
            <div class="card">
                <div class="card-header">
                    <h3>Activity Overview</h3>
                    <select class="form-select">
                        <option>Last 7 Days</option>
                        <option>Last 30 Days</option>
                        <option>Last 3 Months</option>
                    </select>
                </div>
                <div class="card-body">
                    <div class="chart-placeholder">
                        <div class="chart-bars">
                            <div class="bar-group">
                                <div class="bar" style="height: 60%"></div>
                                <span>Mon</span>
                            </div>
                            <div class="bar-group">
                                <div class="bar" style="height: 75%"></div>
                                <span>Tue</span>
                            </div>
                            <div class="bar-group">
                                <div class="bar" style="height: 45%"></div>
                                <span>Wed</span>
                            </div>
                            <div class="bar-group">
                                <div class="bar" style="height: 90%"></div>
                                <span>Thu</span>
                            </div>
                            <div class="bar-group">
                                <div class="bar" style="height: 70%"></div>
                                <span>Fri</span>
                            </div>
                            <div class="bar-group">
                                <div class="bar" style="height: 55%"></div>
                                <span>Sat</span>
                            </div>
                            <div class="bar-group">
                                <div class="bar" style="height: 80%"></div>
                                <span>Sun</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="card">
                <div class="card-header">
                    <h3>Recent Activity</h3>
                    <a href="#" class="view-all">View All</a>
                </div>
                <div class="card-body">
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon blue">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>John Doe</strong> added a new contact</p>
                                <span class="activity-time">2 minutes ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon green">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>Sarah Smith</strong> updated a deal</p>
                                <span class="activity-time">15 minutes ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon purple">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>Mike Johnson</strong> completed a task</p>
                                <span class="activity-time">1 hour ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon orange">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>Emily Brown</strong> sent an email</p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon red">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="activity-info">
                                <p><strong>David Wilson</strong> made a call</p>
                                <span class="activity-time">3 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deal Pipeline Preview -->
        <div class="card full-width">
            <div class="card-header">
                <h3>Deal Pipeline</h3>
                <a href="#" class="view-all">View Full Pipeline</a>
            </div>
            <div class="card-body">
                <div class="pipeline-grid">
                    <div class="pipeline-stage">
                        <h4>Lead <span class="stage-count">12</span></h4>
                        <div class="pipeline-items">
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>Acme Corp</span>
                                    <span class="fw-semibold">$5,000</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>TechStart Inc</span>
                                    <span class="fw-semibold">$3,200</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>Global Solutions</span>
                                    <span class="fw-semibold">$8,500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pipeline-stage">
                        <h4>Qualified <span class="stage-count">18</span></h4>
                        <div class="pipeline-items">
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>Innovate Labs</span>
                                    <span class="fw-semibold">$12,000</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>Cloud Systems</span>
                                    <span class="fw-semibold">$7,500</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>DataFlow Corp</span>
                                    <span class="fw-semibold">$9,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pipeline-stage">
                        <h4>Proposal <span class="stage-count">8</span></h4>
                        <div class="pipeline-items">
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>Enterprise Solutions</span>
                                    <span class="fw-semibold">$25,000</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>SmartTech Inc</span>
                                    <span class="fw-semibold">$15,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pipeline-stage">
                        <h4>Negotiation <span class="stage-count">5</span></h4>
                        <div class="pipeline-items">
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>Future Systems</span>
                                    <span class="fw-semibold">$30,000</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>AI Dynamics</span>
                                    <span class="fw-semibold">$18,500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pipeline-stage">
                        <h4>Closed <span class="stage-count">7</span></h4>
                        <div class="pipeline-items">
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>InfoTech</span>
                                    <span class="fw-semibold">$22,000</span>
                                </div>
                            </div>
                            <div class="pipeline-card">
                                <div class="d-flex justify-content-between">
                                    <span>CloudNine</span>
                                    <span class="fw-semibold">$14,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Row -->
        <div class="row g-3 mt-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">New Contacts This Week</h6>
                                <h3 class="mb-0">43</h3>
                            </div>
                            <div class="stat-icon blue" style="width: 48px; height: 48px; border-radius: 12px;">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Deals Won This Month</h6>
                                <h3 class="mb-0">18</h3>
                            </div>
                            <div class="stat-icon green" style="width: 48px; height: 48px; border-radius: 12px;">
                                <i class="fas fa-trophy"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Upcoming Meetings</h6>
                                <h3 class="mb-0">12</h3>
                            </div>
                            <div class="stat-icon purple" style="width: 48px; height: 48px; border-radius: 12px;">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>