@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Attendance Tracking</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Daily check-ins, office logs, and remote work attendance.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Clock In / Out</button>
    </div>

    <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
        <h3 class="font-bold text-gray-900 dark:text-white mb-4">Today's Attendance Overview</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div class="p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                <span class="text-xs text-gray-400 uppercase font-semibold">On Time</span>
                <div class="text-2xl font-bold text-emerald-600 mt-1">142</div>
            </div>
            <div class="p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                <span class="text-xs text-gray-400 uppercase font-semibold">Late Check-in</span>
                <div class="text-2xl font-bold text-amber-500 mt-1">4</div>
            </div>
            <div class="p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                <span class="text-xs text-gray-400 uppercase font-semibold">Remote</span>
                <div class="text-2xl font-bold text-blue-500 mt-1">8</div>
            </div>
            <div class="p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl">
                <span class="text-xs text-gray-400 uppercase font-semibold">Absent</span>
                <div class="text-2xl font-bold text-rose-500 mt-1">0</div>
            </div>
        </div>
    </div>
</div>
@endsection
