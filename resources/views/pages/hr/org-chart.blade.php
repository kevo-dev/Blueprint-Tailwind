@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Organizational Chart</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Visual corporate hierarchy and reporting lines.</p>
    </div>

    <div class="p-8 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm overflow-x-auto">
        <div class="min-w-[700px] flex flex-col items-center gap-8">
            <!-- CEO / Top level -->
            <div class="p-4 bg-brand-500 text-white rounded-xl shadow-md w-64 text-center">
                <div class="font-bold text-base">Sarah Connor</div>
                <div class="text-xs text-brand-100">Chief Executive Officer</div>
            </div>

            <!-- Connector line -->
            <div class="w-0.5 h-6 bg-gray-300 dark:bg-gray-600"></div>

            <!-- Department Heads Level -->
            <div class="grid grid-cols-3 gap-8 w-full">
                <!-- Dept 1 -->
                <div class="flex flex-col items-center">
                    <div class="p-4 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-700 w-full text-center shadow-sm">
                        <div class="font-bold text-sm text-gray-900 dark:text-white">Michael Brown</div>
                        <div class="text-xs text-brand-500 font-medium">VP of Engineering</div>
                        <div class="text-[11px] text-gray-400 mt-1">58 team members</div>
                    </div>
                </div>

                <!-- Dept 2 -->
                <div class="flex flex-col items-center">
                    <div class="p-4 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-700 w-full text-center shadow-sm">
                        <div class="font-bold text-sm text-gray-900 dark:text-white">Alex Morgan</div>
                        <div class="text-xs text-brand-500 font-medium">VP of Product</div>
                        <div class="text-[11px] text-gray-400 mt-1">24 team members</div>
                    </div>
                </div>

                <!-- Dept 3 -->
                <div class="flex flex-col items-center">
                    <div class="p-4 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-700 w-full text-center shadow-sm">
                        <div class="font-bold text-sm text-gray-900 dark:text-white">Jessica Taylor</div>
                        <div class="text-xs text-brand-500 font-medium">Head of Sales</div>
                        <div class="text-[11px] text-gray-400 mt-1">36 team members</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
