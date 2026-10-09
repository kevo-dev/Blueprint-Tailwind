@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">HR Documents & Templates</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Employee handbooks, NDAs, benefits guides, and policy contracts.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Upload Document</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="p-3 bg-red-50 text-red-600 dark:bg-red-950 dark:text-red-400 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900 dark:text-white">Employee Handbook 2024.pdf</h4>
                    <p class="text-xs text-gray-400">Updated Oct 2024 • 2.4 MB</p>
                </div>
            </div>
            <button class="text-brand-500 text-xs font-semibold">Download</button>
        </div>
    </div>
</div>
@endsection
