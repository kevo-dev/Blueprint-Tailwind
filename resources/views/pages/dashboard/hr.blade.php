@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <!-- Welcome Header & Quick Actions -->
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Welcome back, Sarah.</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Here's what's happening today across your organization.</p>
        </div>
        <div class="flex flex-wrap items-center gap-3">
            <a href="/employees" class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-medium text-white rounded-lg bg-brand-500 hover:bg-brand-600 transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Add Employee
            </a>
            <a href="/recruitment" class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                Post Job
            </a>
            <a href="/leave" class="inline-flex items-center justify-center gap-2 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Approve Leave
            </a>
        </div>
    </div>

    <!-- KPI Cards Grid -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
        <!-- Card 1: Total Employees -->
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Total Employees</span>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full dark:bg-emerald-950 dark:text-emerald-400">
                    +11.1%
                </span>
            </div>
            <div class="mt-4 flex items-baseline justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">154</span>
                <div class="p-2 rounded-xl bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
            </div>
        </div>

        <!-- Card 2: New Hires -->
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">New Hires</span>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full dark:bg-emerald-950 dark:text-emerald-400">
                    +50%
                </span>
            </div>
            <div class="mt-4 flex items-baseline justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">12</span>
                <div class="p-2 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                </div>
            </div>
        </div>

        <!-- Card 3: Open Positions -->
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Open Positions</span>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium text-amber-700 bg-amber-50 rounded-full dark:bg-amber-950 dark:text-amber-400">
                    +25%
                </span>
            </div>
            <div class="mt-4 flex items-baseline justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">8</span>
                <div class="p-2 rounded-xl bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
        </div>

        <!-- Card 4: Attendance Rate -->
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Attendance Rate</span>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full dark:bg-emerald-950 dark:text-emerald-400">
                    +2.3%
                </span>
            </div>
            <div class="mt-4 flex items-baseline justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">95%</span>
                <div class="p-2 rounded-xl bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>

        <!-- Card 5: Pending Leaves -->
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Pending Leaves</span>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium text-amber-700 bg-amber-50 rounded-full dark:bg-amber-950 dark:text-amber-400">
                    +15%
                </span>
            </div>
            <div class="mt-4 flex items-baseline justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">5</span>
                <div class="p-2 rounded-xl bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                </div>
            </div>
        </div>

        <!-- Card 6: Upcoming Reviews -->
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold uppercase text-gray-400">Upcoming Reviews</span>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full dark:bg-emerald-950 dark:text-emerald-400">
                    +8%
                </span>
            </div>
            <div class="mt-4 flex items-baseline justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">7</span>
                <div class="p-2 rounded-xl bg-rose-50 dark:bg-rose-900/30 text-rose-600 dark:text-rose-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics & Breakdown Section -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <!-- Headcount Trend Chart Card -->
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 lg:col-span-2 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="text-lg font-bold text-gray-900 dark:text-white">Headcount Trend</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Monthly total employee growth in 2024</p>
                </div>
                <span class="px-3 py-1 text-xs font-medium text-gray-600 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300">
                    This Year
                </span>
            </div>

            <!-- Visual Chart Simulation -->
            <div class="mt-6 h-64 flex items-end gap-3 pt-6 pb-2 px-2 border-b border-gray-100 dark:border-gray-700">
                @php
                    $months = [
                        ['month' => 'Jan', 'height' => '55%', 'val' => '120'],
                        ['month' => 'Feb', 'height' => '60%', 'val' => '128'],
                        ['month' => 'Mar', 'height' => '62%', 'val' => '132'],
                        ['month' => 'Apr', 'height' => '68%', 'val' => '138'],
                        ['month' => 'May', 'height' => '72%', 'val' => '142'],
                        ['month' => 'Jun', 'height' => '78%', 'val' => '146'],
                        ['month' => 'Jul', 'height' => '82%', 'val' => '149'],
                        ['month' => 'Aug', 'height' => '86%', 'val' => '151'],
                        ['month' => 'Sep', 'height' => '90%', 'val' => '152'],
                        ['month' => 'Oct', 'height' => '96%', 'val' => '154'],
                    ];
                @endphp
                @foreach ($months as $m)
                    <div class="flex-1 flex flex-col items-center gap-2 h-full justify-end group">
                        <span class="text-[10px] font-medium text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity">{{ $m['val'] }}</span>
                        <div style="height: {{ $m['height'] }}" class="w-full bg-brand-500/80 rounded-t-md hover:bg-brand-500 transition-colors"></div>
                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400 mt-1">{{ $m['month'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Department Distribution Card -->
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Department Distribution</h2>
            <div class="space-y-4">
                @php
                    $depts = [
                        ['name' => 'Engineering', 'count' => '58', 'pct' => '38%', 'color' => 'bg-blue-500'],
                        ['name' => 'Sales & Marketing', 'count' => '36', 'pct' => '23%', 'color' => 'bg-emerald-500'],
                        ['name' => 'Product & Design', 'count' => '24', 'pct' => '16%', 'color' => 'bg-purple-500'],
                        ['name' => 'Operations & HR', 'count' => '20', 'pct' => '13%', 'color' => 'bg-amber-500'],
                        ['name' => 'Finance & Legal', 'count' => '16', 'pct' => '10%', 'color' => 'bg-rose-500'],
                    ];
                @endphp
                @foreach ($depts as $dept)
                    <div>
                        <div class="flex items-center justify-between mb-1 text-sm">
                            <span class="font-medium text-gray-700 dark:text-gray-300">{{ $dept['name'] }}</span>
                            <span class="text-xs font-semibold text-gray-500 dark:text-gray-400">{{ $dept['count'] }} ({{ $dept['pct'] }})</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2 rounded-full dark:bg-gray-700 overflow-hidden">
                            <div class="{{ $dept['color'] }} h-2 rounded-full" style="width: {{ $dept['pct'] }}"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Recent Activity & Who's Out Section -->
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <!-- Recent Activity Feed -->
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 lg:col-span-2 shadow-sm">
            <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Recent Activity</h2>
            <div class="space-y-4">
                @php
                    $activities = [
                        ['user' => 'Alex Morgan', 'action' => 'submitted a leave request for Nov 12 - Nov 15', 'time' => '10 minutes ago', 'badge' => 'Leave', 'bg' => 'bg-amber-100 text-amber-800 dark:bg-amber-900/40 dark:text-amber-300'],
                        ['user' => 'David Chen', 'action' => 'joined as Senior Frontend Engineer in Engineering', 'time' => '1 hour ago', 'badge' => 'New Hire', 'bg' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900/40 dark:text-emerald-300'],
                        ['user' => 'HR System', 'action' => 'completed October 2024 Payroll run successfully', 'time' => '3 hours ago', 'badge' => 'Payroll', 'bg' => 'bg-blue-100 text-blue-800 dark:bg-blue-900/40 dark:text-blue-300'],
                        ['user' => 'Sophia Taylor', 'action' => 'updated performance review goals for Q4', 'time' => '5 hours ago', 'badge' => 'Review', 'bg' => 'bg-purple-100 text-purple-800 dark:bg-purple-900/40 dark:text-purple-300'],
                    ];
                @endphp
                @foreach ($activities as $item)
                    <div class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-750 transition-colors">
                        <div class="w-9 h-9 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 flex items-center justify-center font-bold text-sm shrink-0">
                            {{ substr($item['user'], 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between gap-2">
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item['user'] }}</p>
                                <span class="px-2 py-0.5 text-xs font-medium rounded-md {{ $item['bg'] }}">{{ $item['badge'] }}</span>
                            </div>
                            <p class="text-xs text-gray-600 dark:text-gray-300 mt-0.5">{{ $item['action'] }}</p>
                            <span class="text-[11px] text-gray-400 mt-1 block">{{ $item['time'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Sidebar Widgets: Who's Out Today & Upcoming Events -->
        <div class="space-y-6">
            <!-- Who's Out Today Card -->
            <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
                <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Who's Out Today</h2>
                <div class="flex flex-col items-center justify-center p-6 text-center bg-gray-50 dark:bg-gray-900/50 rounded-xl border border-dashed border-gray-200 dark:border-gray-700">
                    <div class="p-3 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 rounded-full mb-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">Everyone is available today!</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">No scheduled leaves or absences recorded.</p>
                </div>
            </div>

            <!-- Upcoming Events Card -->
            <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
                <h2 class="text-lg font-bold text-gray-900 dark:text-white mb-3">Upcoming Events</h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 p-3 bg-blue-50 dark:bg-blue-900/20 rounded-xl border border-blue-100 dark:border-blue-800/30">
                        <div class="text-center px-2 py-1 bg-blue-600 text-white rounded-lg text-xs font-bold shrink-0">
                            OCT<br><span class="text-base">28</span>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-gray-900 dark:text-white">Quarterly All-Hands Meeting</h4>
                            <p class="text-[11px] text-gray-500 dark:text-gray-400">10:00 AM - Main Auditorium / Zoom</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-purple-50 dark:bg-purple-900/20 rounded-xl border border-purple-100 dark:border-purple-800/30">
                        <div class="text-center px-2 py-1 bg-purple-600 text-white rounded-lg text-xs font-bold shrink-0">
                            NOV<br><span class="text-base">01</span>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-gray-900 dark:text-white">New Employee Orientation</h4>
                            <p class="text-[11px] text-gray-500 dark:text-gray-400">09:00 AM - Training Room B</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
