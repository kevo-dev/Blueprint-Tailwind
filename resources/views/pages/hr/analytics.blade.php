@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">HR Insights & Analytics</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Workforce turnover, retention rate, diversity ratios, and growth projections.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Retention Rate</span>
            <div class="text-3xl font-extrabold text-emerald-600 dark:text-emerald-400 mt-2">96.2%</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Above industry average (88%)</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Annual Turnover Rate</span>
            <div class="text-3xl font-extrabold text-blue-600 dark:text-blue-400 mt-2">3.8%</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Down 1.2% from last year</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Avg Time to Hire</span>
            <div class="text-3xl font-extrabold text-purple-600 dark:text-purple-400 mt-2">18 Days</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Fastest in Tech department</p>
        </div>
    </div>
</div>
@endsection
