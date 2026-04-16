<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'لوحة الإدارة') - Menu Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-body">
    <div class="admin-shell" id="admin-shell">
        <button class="admin-sidebar-overlay" id="admin-overlay" aria-label="إغلاق القائمة الجانبية"></button>

        @include('admin.partials.sidebar')

        <div class="admin-content">
            @include('admin.partials.topbar')

            <main class="admin-main" id="main-content">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
