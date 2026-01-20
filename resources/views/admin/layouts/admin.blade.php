<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - PICNIC')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    
</head>
<body class="admin-body">
<div class="d-flex h-100 admin-shell">
    <nav class="sidebar d-none d-lg-flex flex-column border-end p-3">
        <h5 class="mb-4 d-flex align-items-center gap-2"><i class="bi bi-shop"></i> PICNIC Admin</h5>
        <div class="nav flex-column nav-pills gap-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.sliders.index') }}" class="nav-link {{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Sliders
            </a>
            <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <i class="bi bi-bookmark"></i> Categories
            </a>
            <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="bi bi-box"></i> Products
            </a>
            <a href="{{ route('admin.stores.index') }}" class="nav-link {{ request()->routeIs('admin.stores.*') ? 'active' : '' }}">
                <i class="bi bi-shop"></i> Stores
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                <i class="bi bi-chat-quote"></i> Testimonials
            </a>
            <a href="{{ route('admin.videos.index') }}" class="nav-link {{ request()->routeIs('admin.videos.*') ? 'active' : '' }}">
                <i class="bi bi-play-circle"></i> Videos
            </a>
            <a href="{{ route('admin.leads.index') }}" class="nav-link {{ request()->routeIs('admin.leads.*') ? 'active' : '' }}">
                <i class="bi bi-chat-dots"></i> Leads
            </a>
            <hr>
            <a href="{{ route('home') }}" class="nav-link" target="_blank">
                <i class="bi bi-globe"></i> View Site
            </a>
        </div>
    </nav>

    <div class="main-content w-100 d-flex flex-column">
        <nav class="navbar navbar-expand-lg navbar-admin">
            <div class="container-fluid">
                <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-light d-lg-none shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#adminMobileNav" aria-controls="adminMobileNav">
                        <i class="bi bi-list"></i>
                    </button>
                    <span class="navbar-brand mb-0 h5 text-white">@yield('header', 'Dashboard')</span>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle shadow-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> <span class="fw-semibold">{{ auth()->user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid py-4 flex-fill">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start admin-offcanvas" tabindex="-1" id="adminMobileNav" aria-labelledby="adminMobileNavLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="adminMobileNavLabel"><i class="bi bi-shop"></i> PICNIC Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="nav flex-column nav-pills gap-2">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.sliders.index') }}" class="nav-link {{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-images"></i> Sliders
            </a>
            <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-bookmark"></i> Categories
            </a>
            <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-box"></i> Products
            </a>
            <a href="{{ route('admin.stores.index') }}" class="nav-link {{ request()->routeIs('admin.stores.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-shop"></i> Stores
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-chat-quote"></i> Testimonials
            </a>
            <a href="{{ route('admin.videos.index') }}" class="nav-link {{ request()->routeIs('admin.videos.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-play-circle"></i> Videos
            </a>
            <a href="{{ route('admin.leads.index') }}" class="nav-link {{ request()->routeIs('admin.leads.*') ? 'active' : '' }}" data-bs-dismiss="offcanvas">
                <i class="bi bi-chat-dots"></i> Leads
            </a>
            <hr>
            <a href="{{ route('home') }}" class="nav-link" target="_blank" data-bs-dismiss="offcanvas">
                <i class="bi bi-globe"></i> View Site
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
