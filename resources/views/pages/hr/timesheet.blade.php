@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Employee Timesheets</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Weekly billable hours, project allocation, and submission tracking.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Submit Timesheet</button>
    </div>

    <div class="bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 p-6 shadow-sm">
        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Current Week Summary (Oct 21 - Oct 27)</h3>
        <p class="text-xs text-gray-500 dark:text-gray-400 mb-6">Total Recorded: <span class="font-bold text-brand-500">40.0 Hours</span></p>
        <div class="space-y-3">
            <div class="flex justify-between items-center text-sm p-3 bg-gray-50 dark:bg-gray-900/50 rounded-lg">
                <span class="font-medium text-gray-800 dark:text-gray-200">Monday (Oct 21)</span>
                <span class="font-bold text-gray-900 dark:text-white">8.0 hrs</span>
            </div>
            <div class="flex justify-between items-center text-sm p-3 bg-gray-50 dark:bg-gray-900/50 rounded-lg">
                <span class="font-medium text-gray-800 dark:text-gray-200">Tuesday (Oct 22)</span>
                <span class="font-bold text-gray-900 dark:text-white">8.0 hrs</span>
            </div>
            <div class="flex justify-between items-center text-sm p-3 bg-gray-50 dark:bg-gray-900/50 rounded-lg">
                <span class="font-medium text-gray-800 dark:text-gray-200">Wednesday (Oct 23)</span>
                <span class="font-bold text-gray-900 dark:text-white">8.0 hrs</span>
            </div>
            <div class="flex justify-between items-center text-sm p-3 bg-gray-50 dark:bg-gray-900/50 rounded-lg">
                <span class="font-medium text-gray-800 dark:text-gray-200">Thursday (Oct 24)</span>
                <span class="font-bold text-gray-900 dark:text-white">8.0 hrs</span>
            </div>
            <div class="flex justify-between items-center text-sm p-3 bg-gray-50 dark:bg-gray-900/50 rounded-lg">
                <span class="font-medium text-gray-800 dark:text-gray-200">Friday (Oct 25)</span>
                <span class="font-bold text-gray-900 dark:text-white">8.0 hrs</span>
            </div>
        </div>
    </div>
</div>
@endsection
