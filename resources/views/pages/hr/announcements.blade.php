@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Announcements & News</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Broadcast company updates, policy updates, and team news.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Post Announcement</button>
    </div>

    <div class="space-y-4">
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <div class="flex items-center justify-between mb-2">
                <span class="px-2.5 py-1 text-xs font-semibold bg-brand-100 text-brand-800 dark:bg-brand-950 dark:text-brand-300 rounded-full">Company Policy</span>
                <span class="text-xs text-gray-400">Posted Oct 20, 2024</span>
            </div>
            <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-2">Annual Wellness Allowance Increased</h3>
            <p class="text-sm text-gray-600 dark:text-gray-300">We are excited to announce that starting November 1st, all full-time employees will receive a $1,200 annual wellness stipend usable for gym memberships, mental health apps, and sports equipment.</p>
        </div>
    </div>
</div>
@endsection
