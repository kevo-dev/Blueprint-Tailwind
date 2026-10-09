@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Leave & Time Off</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Track paid leave requests, sick notes, and approval queues.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Request Time Off</button>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Annual Leave Balance</span>
            <div class="text-2xl font-bold text-gray-900 dark:text-white mt-2">18 Days</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Sick Leave Balance</span>
            <div class="text-2xl font-bold text-gray-900 dark:text-white mt-2">10 Days</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Pending Requests</span>
            <div class="text-2xl font-bold text-amber-500 mt-2">5 Requests</div>
        </div>
    </div>

    <!-- Leave Requests Table -->
    <div class="bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 overflow-hidden shadow-sm">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 font-bold text-gray-900 dark:text-white">Recent Requests</div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50 dark:bg-gray-900/50 text-gray-500 uppercase text-[11px] font-semibold">
                    <tr>
                        <th class="px-6 py-3">Employee</th>
                        <th class="px-6 py-3">Leave Type</th>
                        <th class="px-6 py-3">Dates</th>
                        <th class="px-6 py-3">Duration</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 text-gray-700 dark:text-gray-300">
                    <tr>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Alex Morgan</td>
                        <td class="px-6 py-4">Annual Leave</td>
                        <td class="px-6 py-4">Nov 12 - Nov 15</td>
                        <td class="px-6 py-4">4 Days</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-amber-100 text-amber-800 dark:bg-amber-950 dark:text-amber-400 rounded-full">Pending</span></td>
                        <td class="px-6 py-4 text-right space-x-2">
                            <button class="px-2.5 py-1 text-xs font-medium text-white bg-emerald-600 rounded">Approve</button>
                            <button class="px-2.5 py-1 text-xs font-medium text-white bg-rose-600 rounded">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">Emily Watson</td>
                        <td class="px-6 py-4">Sick Leave</td>
                        <td class="px-6 py-4">Oct 24 - Oct 25</td>
                        <td class="px-6 py-4">2 Days</td>
                        <td class="px-6 py-4"><span class="px-2.5 py-1 text-xs font-semibold bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400 rounded-full">Approved</span></td>
                        <td class="px-6 py-4 text-right text-gray-400">Completed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
