@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Expense Claims</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Employee reimbursement requests, travel expenses, and receipt verification.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Submit Claim</button>
    </div>

    <div class="bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 p-6 shadow-sm">
        <h3 class="font-bold text-gray-900 dark:text-white mb-4">Pending Reimbursements</h3>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-900/50 rounded-xl text-sm">
                <div>
                    <span class="font-bold text-gray-900 dark:text-white">Alex Morgan</span>
                    <span class="text-gray-500 dark:text-gray-400 text-xs block">Client Dinner & Tech Conference Flight</span>
                </div>
                <div class="text-right">
                    <span class="font-bold text-gray-900 dark:text-white">$450.00</span>
                    <span class="px-2 py-0.5 text-xs font-semibold bg-amber-100 text-amber-800 dark:bg-amber-950 dark:text-amber-400 rounded-full ml-2">Pending</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
