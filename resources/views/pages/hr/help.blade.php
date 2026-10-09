@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">HR Help & Support Desk</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Find answers to common HR questions or open a ticket with People Operations.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-3">Frequently Asked Questions</h3>
            <div class="space-y-3 text-sm">
                <details class="p-3 bg-gray-50 dark:bg-gray-900/50 rounded-xl cursor-pointer">
                    <summary class="font-medium text-gray-800 dark:text-gray-200">How do I request time off?</summary>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Navigate to Time & Leave > Leave menu, click 'Request Time Off', select your dates, and submit for manager approval.</p>
                </details>
                <details class="p-3 bg-gray-50 dark:bg-gray-900/50 rounded-xl cursor-pointer">
                    <summary class="font-medium text-gray-800 dark:text-gray-200">When is payday?</summary>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Salaries are paid via direct deposit on the last business day of every calendar month.</p>
                </details>
            </div>
        </div>
    </div>
</div>
@endsection
