@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Global Search</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Search across employees, departments, documents, and policies.</p>
    </div>

    <div class="relative max-w-2xl">
        <svg class="w-6 h-6 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" placeholder="Type keywords (e.g. 'Sarah', 'Payroll', 'Handbook')..." class="w-full pl-12 pr-4 py-3 bg-white border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:text-white text-base focus:outline-none focus:border-brand-500 shadow-sm">
    </div>
</div>
@endsection
