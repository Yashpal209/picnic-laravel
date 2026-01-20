@extends('admin.layouts.admin')

@section('title', 'Admin - Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-orange"></div>
            <div class="metric-label">Sliders</div>
            <div class="metric-value">{{ $sliders_count }}</div>
            <a href="{{ route('admin.sliders.index') }}" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-pink"></div>
            <div class="metric-label">Categories</div>
            <div class="metric-value">{{ $categories_count }}</div>
            <a href="{{ route('admin.categories.index') }}" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-blue"></div>
            <div class="metric-label">Products</div>
            <div class="metric-value">{{ $products_count }}</div>
            <a href="{{ route('admin.products.index') }}" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-orange"></div>
            <div class="metric-label">Stores</div>
            <div class="metric-value">{{ $stores_count }}</div>
            <a href="{{ route('admin.stores.index') }}" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-pink"></div>
            <div class="metric-label">Leads</div>
            <div class="metric-value">{{ $leads_count }}</div>
            <a href="{{ route('admin.leads.index') }}" class="metric-link">View all</a>
        </div>
    </div>
</div>

<div class="card admin-card">
    <div class="card-header bg-white">
        <h6 class="mb-0">Recent Leads</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-modern">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Source</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($recent_leads as $lead)
                    <tr>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>{{ $lead->email }}</td>
                        <td><span class="badge bg-secondary">{{ $lead->source }}</span></td>
                        <td>{{ $lead->created_at?->format('M d, Y') }}</td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted">No leads yet.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
