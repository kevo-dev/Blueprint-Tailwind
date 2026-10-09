@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Pulse Surveys & eNPS</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Anonymous employee satisfaction surveys, feedback, and engagement scores.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Launch Survey</button>
    </div>

    <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm">
        <h3 class="font-bold text-gray-900 dark:text-white mb-2">Q3 Employee Net Promoter Score (eNPS)</h3>
        <div class="text-4xl font-extrabold text-brand-500 mt-2">+68</div>
        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">78% Promoters, 14% Passives, 8% Detractors</p>
    </div>
</div>
@endsection
