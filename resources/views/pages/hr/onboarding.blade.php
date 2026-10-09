@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">New Hire Onboarding</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Manage onboarding workflows, account provisioning, and welcome tasks.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Start Onboarding</button>
    </div>

    <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
        <h3 class="font-bold text-gray-900 dark:text-white mb-4">Active Onboarding Candidates (2)</h3>
        <div class="space-y-4">
            <div class="p-4 bg-gray-50 dark:bg-gray-900/50 rounded-xl flex items-center justify-between">
                <div>
                    <h4 class="font-bold text-sm text-gray-900 dark:text-white">David Chen</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Senior Frontend Developer - Joining Oct 28</p>
                    <div class="w-48 bg-gray-200 dark:bg-gray-700 h-2 rounded-full mt-2 overflow-hidden">
                        <div class="bg-emerald-500 h-2 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <button class="px-3 py-1.5 text-xs font-semibold text-brand-600 border border-brand-300 dark:border-brand-800 rounded-lg">View Checklist</button>
            </div>
        </div>
    </div>
</div>
@endsection
