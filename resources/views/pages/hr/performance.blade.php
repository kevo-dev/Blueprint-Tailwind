@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Performance Management</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Quarterly OKRs, peer reviews, and performance evaluation cycles.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Start Review Cycle</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h3 class="font-bold text-gray-900 dark:text-white mb-2">Q4 2024 Performance Cycle</h3>
            <p class="text-xs text-gray-500 dark:text-gray-400 mb-4">Status: In Progress (Ends Nov 30)</p>
            <div class="w-full bg-gray-100 rounded-full h-3 dark:bg-gray-700 overflow-hidden">
                <div class="bg-brand-500 h-3 rounded-full" style="width: 65%"></div>
            </div>
            <span class="text-xs text-gray-400 mt-2 block text-right">65% Reviews Submitted</span>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h3 class="font-bold text-gray-900 dark:text-white mb-2">Average Performance Score</h3>
            <div class="text-3xl font-extrabold text-emerald-600 dark:text-emerald-400">4.6 / 5.0</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Based on 140 completed evaluations</p>
        </div>
    </div>
</div>
@endsection
