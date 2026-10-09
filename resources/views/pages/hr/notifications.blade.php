@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Notification Center</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Recent system alerts, leave requests, and pending approvals.</p>
    </div>

    <div class="bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 p-6 shadow-sm space-y-4">
        <div class="p-4 bg-blue-50 dark:bg-blue-950/30 rounded-xl border border-blue-100 dark:border-blue-900/50 flex items-center justify-between">
            <div>
                <h4 class="font-bold text-sm text-blue-900 dark:text-blue-300">Pending Leave Approval</h4>
                <p class="text-xs text-blue-700 dark:text-blue-400 mt-0.5">Alex Morgan requested 4 days of Annual Leave.</p>
            </div>
            <span class="text-xs text-blue-500">10m ago</span>
        </div>
    </div>
</div>
@endsection
