<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
</head>

<body>

    {{-- Top Nav --}}
    <nav class="topnav">
        <div class="topnav-brand">
        </div>
    </nav>

    <div class="layout">

        {{-- Sidebar --}}
        <aside class="sidebar">
            <div class="sidebar-label">Menu</div>

            <a href="{{ route('logs') }}" class="nav-item {{ request()->routeIs('logs') ? 'active' : '' }}">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M2 4h12M2 8h8M2 12h10" />
                </svg>
                Logs
            </a>

            <a href="{{ route('settings') }}" class="nav-item {{ request()->routeIs('settings') ? 'active' : '' }}">
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="8" cy="8" r="2.5" />
                    <path d="M8 1v1.5M8 13.5V15M1 8h1.5M13.5 8H15M3.2 3.2l1.1 1.1M11.7 11.7l1.1 1.1M11.7 3.2l-1.1 1.1M4.3 11.7l-1.1 1.1" />
                </svg>
                Settings
            </a>

            <div class="sidebar-spacer"></div>
            <hr class="sidebar-divider">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M6 2H3a1 1 0 00-1 1v10a1 1 0 001 1h3M11 11l3-3-3-3M6 8h8" />
                    </svg>
                    Sign out
                </button>
            </form>
        </aside>

        {{-- Main Content --}}
        <main class="content">

            <div class="page-header">
                <h1>Settings</h1>
                <p>Update your profile information</p>
            </div>

            <div class="section-card" style="padding:30px; max-width:600px;">

                @if(session('success'))
                <p style="color:green; margin-bottom:15px;">{{ session('success') }}</p>
                @endif

                <form method="POST" action="{{ route('settings') }}">
                    @csrf
                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Full Name" required>
                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" required>
                    <input type="text" name="course" value="{{ $user->course }}" placeholder="Course" required>
                    <input type="text" name="year_level" value="{{ $user->year_level }}" placeholder="Year Level" required>
                    <input type="text" name="section" value="{{ $user->section }}" placeholder="Section" required>
                    <input type="text" name="contact_no" value="{{ $user->contact_no }}" placeholder="Contact No" required>
                    <input type="text" name="address" value="{{ $user->address }}" placeholder="Address" required>

                    <div class="form-actions-right">
                        <button type="submit" class="update-btn">Update Profile</button>
                    </div>
                </form>

            </div>

        </main>

    </div>

</body>

</html>