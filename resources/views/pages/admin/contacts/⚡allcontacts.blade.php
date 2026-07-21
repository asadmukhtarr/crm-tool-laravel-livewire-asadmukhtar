<?php

use Livewire\Component;
use App\Models\Contact;

new class extends Component
{
    public $contacts;
    public $search = '';
    public $lead_status = '';
    public $status = '';

    public function mount()
    {
        $this->fetchContacts();
    }

    public function fetchContacts()
    {
        $query = Contact::orderby('id','desc');

        // Search filter
        if (!empty($this->search)) {
            $query->where(function($q) {
                $q->where('first_name', 'like', '%' . $this->search . '%')
                  ->orWhere('last_name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        }

        // Lead status filter
        if (!empty($this->lead_status)) {
            $query->where('lead_status', $this->lead_status);
        }

        // Status filter
        if (!empty($this->status)) {
            $query->where('status', $this->status);
        }

        $this->contacts = $query->orderBy('created_at', 'desc')->get();
    }

    public function updatedSearch()
    {
        $this->fetchContacts();
    }

    public function updatedLeadStatus()
    {
        $this->fetchContacts();
    }

    public function updatedStatus()
    {
        $this->fetchContacts();
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            session()->flash('success', 'Contact deleted successfully!');
            $this->fetchContacts();
        }
    }

    public function render()
    {
        return $this->view()
            ->layout('layouts.app');
    }
};
?>
<div>
    <div class="dashboard">
        <!-- Page Header -->
        <div class="page-header">
            <div>
                <h1>All Contacts</h1>
                <p>Manage and view all contacts in your CRM system.</p>
            </div>
            <div class="header-actions">
                <button class="btn btn-secondary">
                    <i class="fas fa-file-export"></i> Export
                </button>
                <button class="btn btn-secondary">
                    <i class="fas fa-file-import"></i> Import
                </button>
                <a href="{{ route('contacts.add') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Contact
                </a>
            </div>
        </div>

        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="alert-flash alert-flash-success">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
                <button class="alert-flash-close" onclick="this.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        <!-- Filters & Search -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4">
                        <label class="form-label fw-medium">
                            <i class="fas fa-search me-1 text-muted"></i>
                            Search
                        </label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control" 
                                   wire:model.live="search" 
                                   placeholder="Search by name, email, phone...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-medium">
                            <i class="fas fa-circle me-1 text-muted"></i>
                            Lead Status
                        </label>
                        <select class="form-select" wire:model.live="lead_status">
                            <option value="">All Status</option>
                            <option value="new">🟢 New</option>
                            <option value="contacted">🟡 Contacted</option>
                            <option value="qualified">🔵 Qualified</option>
                            <option value="lost">🔴 Lost</option>
                            <option value="customer">✅ Customer</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-medium">
                            <i class="fas fa-bolt me-1 text-muted"></i>
                            Status
                        </label>
                        <select class="form-select" wire:model.live="status">
                            <option value="">All Status</option>
                            <option value="active">🟢 Active</option>
                            <option value="inactive">🔴 Inactive</option>
                            <option value="blocked">⚫ Blocked</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary w-100" wire:click="$set('search', ''); $set('lead_status', ''); $set('status', ''); fetchContacts()">
                            <i class="fas fa-undo"></i> Reset
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
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Total Contacts</h3>
                        <p class="stat-number">{{ $contacts->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Active</h3>
                        <p class="stat-number">{{ $contacts->where('status', 'active')->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-user-clock"></i>
                    </div>
                    <div class="stat-info">
                        <h3>New Leads</h3>
                        <p class="stat-number">{{ $contacts->where('lead_status', 'new')->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="stat-info">
                        <h3>Customers</h3>
                        <p class="stat-number">{{ $contacts->where('lead_status', 'customer')->count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacts Table -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-address-book me-2"></i>
                    Contacts List
                </h3>
                <div>
                    <span class="badge bg-primary me-2">{{ $contacts->count() }} Contacts</span>
                    <button class="btn btn-sm btn-outline-secondary" wire:click="fetchContacts">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th>Lead Status</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="mb-0 fw-semibold">{{ $contact->first_name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:{{ $contact->email }}" class="text-primary">
                                        {{ $contact->email }}
                                    </a>
                                </td>
                                <td>{{ $contact->phone ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('companies.show',$contact->company->id) }}">
                                        {{ $contact->company->company_name }}
                                    </a>
                                </td>
                                <td>
                                    @php
                                        $statusColors = [
                                            'new' => 'bg-primary',
                                            'contacted' => 'bg-warning text-dark',
                                            'qualified' => 'bg-info',
                                            'lost' => 'bg-danger',
                                            'customer' => 'bg-success'
                                        ];
                                        $statusIcons = [
                                            'new' => '🟢',
                                            'contacted' => '🟡',
                                            'qualified' => '🔵',
                                            'lost' => '🔴',
                                            'customer' => '✅'
                                        ];
                                    @endphp
                                    <span class="badge {{ $statusColors[$contact->lead_status] ?? 'bg-secondary' }}">
                                        {{ $statusIcons[$contact->lead_status] ?? '' }} 
                                        {{ ucfirst($contact->lead_status) }}
                                    </span>
                                </td>
                                <td>
                                    @if($contact->status == 'active')
                                        <span class="badge bg-success">
                                            <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                            Active
                                        </span>
                                    @elseif($contact->status == 'inactive')
                                        <span class="badge bg-danger">
                                            <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                            Inactive
                                        </span>
                                    @else
                                        <span class="badge bg-dark">
                                            <i class="fas fa-circle me-1" style="font-size: 8px;"></i>
                                            Blocked
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <small class="text-muted" title="{{ $contact->created_at->format('M d, Y h:i A') }}">
                                        {{ $contact->created_at->diffForHumans() }}
                                    </small>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('contacts.show',$contact->id) }}" class="btn btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('contacts.edit',$contact->id) }}" class="btn btn-outline-secondary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-outline-danger" 
                                                wire:click="delete({{ $contact->id }})" 
                                                wire:confirm="Are you sure you want to delete this contact?">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <i class="fas fa-address-book fa-3x text-muted mb-3 d-block"></i>
                                    <h5 class="text-muted">No contacts found</h5>
                                    <p class="text-muted">Try adjusting your search or filter criteria.</p>
                                    <a href="{{ route('contacts.add') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Add New Contact
                                    </a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted">
                            Showing {{ $contacts->count() }} contact(s)
                            @if($search || $lead_status || $status)
                                <span class="text-muted">(filtered)</span>
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>