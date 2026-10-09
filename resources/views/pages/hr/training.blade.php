@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Training & Learning</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Employee skill development courses, compliance certifications, and workshops.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Assign Course</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h3 class="font-bold text-gray-900 dark:text-white mb-1">Cybersecurity Essentials 2024</h3>
            <span class="px-2 py-0.5 text-xs font-semibold bg-rose-100 text-rose-800 dark:bg-rose-950 dark:text-rose-400 rounded-full">Mandatory</span>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-3">Compliance training for all engineering and ops employees.</p>
            <div class="mt-4 pt-3 border-t border-gray-100 dark:border-gray-700 text-xs text-gray-400">Enrolled: 154 | Completed: 89%</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h3 class="font-bold text-gray-900 dark:text-white mb-1">Leadership Development</h3>
            <span class="px-2 py-0.5 text-xs font-semibold bg-blue-100 text-blue-800 dark:bg-blue-950 dark:text-blue-400 rounded-full">Optional</span>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-3">Managerial communication and conflict resolution workshop.</p>
            <div class="mt-4 pt-3 border-t border-gray-100 dark:border-gray-700 text-xs text-gray-400">Enrolled: 24 | Completed: 45%</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h3 class="font-bold text-gray-900 dark:text-white mb-1">Advanced Laravel & Vue</h3>
            <span class="px-2 py-0.5 text-xs font-semibold bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400 rounded-full">Technical</span>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-3">Full-stack web application development masterclass.</p>
            <div class="mt-4 pt-3 border-t border-gray-100 dark:border-gray-700 text-xs text-gray-400">Enrolled: 42 | Completed: 92%</div>
        </div>
    </div>
</div>
@endsection
