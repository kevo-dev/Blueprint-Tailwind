@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Employee Offboarding</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Exit interviews, hardware handover, system revocation, and severance.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Initiate Offboarding</button>
    </div>

    <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm text-center">
        <p class="text-sm font-semibold text-gray-800 dark:text-gray-200">No active offboarding processes at this time.</p>
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">All departing employee tasks have been completed.</p>
    </div>
</div>
@endsection
