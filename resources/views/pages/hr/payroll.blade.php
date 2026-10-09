@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Payroll & Salaries</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Process monthly pay, statutory taxes, benefits withholding, and pay slips.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Run October Payroll</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Total Monthly Payroll</span>
            <div class="text-3xl font-bold text-gray-900 dark:text-white mt-2">$285,400</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">154 active employees</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Taxes & Benefits Withheld</span>
            <div class="text-3xl font-bold text-gray-900 dark:text-white mt-2">$62,150</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Healthcare, 401(k), state tax</p>
        </div>
        <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Next Payday</span>
            <div class="text-3xl font-bold text-emerald-600 dark:text-emerald-400 mt-2">Oct 31, 2024</div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Direct deposit scheduled</p>
        </div>
    </div>
</div>
@endsection
