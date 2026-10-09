@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Company Directory</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Full staff contact phone numbers, extensions, and seating plan.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @php
            $contacts = [
                ['name' => 'Sarah Connor', 'title' => 'Head of HR', 'ext' => 'x101', 'email' => 'sarah.c@company.com'],
                ['name' => 'David Chen', 'title' => 'Senior Developer', 'ext' => 'x204', 'email' => 'david.c@company.com'],
                ['name' => 'Alex Morgan', 'title' => 'Product Manager', 'ext' => 'x305', 'email' => 'alex.m@company.com'],
            ];
        @endphp
        @foreach ($contacts as $c)
            <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 flex items-center justify-center font-bold text-lg">
                    {{ substr($c['name'], 0, 1) }}
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 dark:text-white">{{ $c['name'] }}</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ $c['title'] }} • {{ $c['ext'] }}</p>
                    <p class="text-xs text-brand-500 mt-1">{{ $c['email'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
