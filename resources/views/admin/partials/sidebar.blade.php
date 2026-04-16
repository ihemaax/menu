<aside class="admin-sidebar" id="admin-sidebar" aria-label="القائمة الجانبية">
    <div class="sidebar-brand">
        <div>
            <p class="sidebar-eyebrow">لوحة التحكم</p>
            <h1>منيو المطعم</h1>
        </div>
        <span class="sidebar-badge">SaaS</span>
    </div>

    <nav class="sidebar-nav">
        @php
            $menuItems = [
                ['label' => 'لوحة المعلومات', 'icon' => 'chart', 'active' => true],
                ['label' => 'إدارة الأقسام', 'icon' => 'layers', 'active' => false],
                ['label' => 'إدارة المنتجات', 'icon' => 'box', 'active' => false],
                ['label' => 'إعدادات المنيو', 'icon' => 'setting', 'active' => false],
                ['label' => 'الطلبات والزيارات', 'icon' => 'pulse', 'active' => false],
            ];
        @endphp

        @foreach($menuItems as $item)
            <a href="#" class="sidebar-link {{ $item['active'] ? 'is-active' : '' }}" aria-current="{{ $item['active'] ? 'page' : 'false' }}">
                <span class="sidebar-icon">
                    @if ($item['icon'] === 'chart')
                        <svg viewBox="0 0 24 24" fill="none"><path d="M5 20V10"/><path d="M12 20V4"/><path d="M19 20v-6"/></svg>
                    @elseif ($item['icon'] === 'layers')
                        <svg viewBox="0 0 24 24" fill="none"><path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 12 9 5 9-5"/><path d="m3 16 9 5 9-5"/></svg>
                    @elseif ($item['icon'] === 'box')
                        <svg viewBox="0 0 24 24" fill="none"><path d="m12 3 8 4.5v9L12 21l-8-4.5v-9L12 3Z"/><path d="M12 12 4 7.5"/><path d="M12 12l8-4.5"/><path d="M12 21v-9"/></svg>
                    @elseif ($item['icon'] === 'setting')
                        <svg viewBox="0 0 24 24" fill="none"><path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/><path d="M19.4 15a1.6 1.6 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.6 1.6 0 0 0-1.8-.3 1.6 1.6 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.2a1.6 1.6 0 0 0-1-1.5 1.6 1.6 0 0 0-1.8.3l-.1.1a2 2 0 0 1-2.8-2.8l.1-.1a1.6 1.6 0 0 0 .3-1.8 1.6 1.6 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.2a1.6 1.6 0 0 0 1.5-1 1.6 1.6 0 0 0-.3-1.8l-.1-.1a2 2 0 0 1 2.8-2.8l.1.1a1.6 1.6 0 0 0 1.8.3h.2a1.6 1.6 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.2a1.6 1.6 0 0 0 1 1.5h.2a1.6 1.6 0 0 0 1.8-.3l.1-.1a2 2 0 0 1 2.8 2.8l-.1.1a1.6 1.6 0 0 0-.3 1.8v.2a1.6 1.6 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.2a1.6 1.6 0 0 0-1.5 1Z"/></svg>
                    @else
                        <svg viewBox="0 0 24 24" fill="none"><path d="M4 12h16"/><path d="M4 6h16"/><path d="M4 18h8"/></svg>
                    @endif
                </span>
                <span>{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="sidebar-user">
        <div class="sidebar-avatar">م</div>
        <div>
            <p class="sidebar-user-name">مدير المطعم</p>
            <p class="sidebar-user-meta">admin@menu.local</p>
        </div>
    </div>
</aside>
