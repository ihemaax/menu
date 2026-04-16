@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <section class="hero-card">
        <div>
            <p class="hero-label">مرحبًا بعودتك 👋</p>
            <h3>إدارة كاملة لمنيو مطعم المذاق العربي</h3>
            <p>كل ما تحتاجه لإدارة الأقسام والمنتجات، تحديث رابط المنيو، ومتابعة أداء الصفحة في لوحة واحدة منظمة وسهلة.</p>
        </div>
        <div class="hero-actions">
            <button class="btn btn-primary">إضافة قسم جديد</button>
            <button class="btn btn-soft">إضافة منتج</button>
            <button class="btn btn-soft">معاينة المنيو</button>
        </div>
    </section>

    <section class="stats-grid" aria-label="الإحصائيات">
        @php
            $stats = [
                ['label' => 'عدد الأقسام', 'value' => '12', 'hint' => '+2 هذا الأسبوع'],
                ['label' => 'عدد المنتجات', 'value' => '86', 'hint' => '+9 تمت إضافتها'],
                ['label' => 'الزيارات اليوم', 'value' => '1,254', 'hint' => '+18% عن أمس'],
                ['label' => 'حالة المنيو', 'value' => 'منشور', 'hint' => 'آخر تحديث قبل ساعتين'],
            ];
        @endphp

        @foreach($stats as $stat)
            <article class="stat-card">
                <p>{{ $stat['label'] }}</p>
                <h4>{{ $stat['value'] }}</h4>
                <span>{{ $stat['hint'] }}</span>
            </article>
        @endforeach
    </section>

    <section class="content-grid">
        <article class="panel-card">
            <div class="panel-heading">
                <h4>إجراءات سريعة</h4>
                <p>نفّذ المهام الأساسية بسرعة بدون التنقل بين صفحات كثيرة.</p>
            </div>

            <div class="quick-actions-grid">
                @php
                    $actions = [
                        'إدارة الأقسام',
                        'إدارة المنتجات',
                        'إعدادات المنيو',
                        'رابط المنيو',
                        'توليد QR Code',
                        'نسخ الرابط',
                    ];
                @endphp

                @foreach($actions as $action)
                    <button class="action-card">{{ $action }}</button>
                @endforeach
            </div>
        </article>

        <article class="panel-card">
            <div class="panel-heading">
                <h4>ملخص المطعم</h4>
                <p>بيانات سريعة ومهمة في مكان واحد.</p>
            </div>

            <dl class="summary-list">
                <div><dt>اسم المطعم</dt><dd>مطعم المذاق العربي</dd></div>
                <div><dt>رقم الهاتف</dt><dd dir="ltr">+966 55 123 4567</dd></div>
                <div><dt>رابط المنيو</dt><dd class="mono">menu.example.com/almathaq</dd></div>
                <div><dt>عدد الأقسام</dt><dd>12 قسم</dd></div>
                <div><dt>عدد المنتجات</dt><dd>86 منتج</dd></div>
                <div><dt>حالة النشر</dt><dd><span class="status-pill is-online">منشور</span></dd></div>
            </dl>

            <button class="btn btn-soft">نسخ رابط المنيو</button>
        </article>
    </section>

    <section class="panel-card">
        <div class="panel-heading">
            <h4>النشاط الأخير</h4>
            <p>آخر العمليات والتحديثات المتعلقة بالمنيو.</p>
        </div>

        <div class="empty-state">
            <div class="empty-state-icon">🧾</div>
            <h5>لا يوجد نشاط حديث حاليًا</h5>
            <p>عند تعديل الأقسام أو إضافة منتجات جديدة، ستظهر السجلات هنا بشكل تلقائي.</p>
            <button class="btn btn-soft">بدء إضافة منتج جديد</button>
        </div>
    </section>
@endsection
