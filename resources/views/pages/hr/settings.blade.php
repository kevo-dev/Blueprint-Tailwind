@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">HR Portal Settings</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Configure HR preferences, working hours, leave policies, and notification rules.</p>
    </div>

    <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm space-y-6">
        <div>
            <h3 class="font-bold text-gray-900 dark:text-white mb-3">Company Preferences</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 dark:text-gray-400 mb-1">Company Name</label>
                    <input type="text" value="TeamPulseHR Inc." class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-500 dark:text-gray-400 mb-1">Standard Work Week Hours</label>
                    <input type="number" value="40" class="w-full px-3 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                </div>
            </div>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Save Changes</button>
    </div>
</div>
@endsection
