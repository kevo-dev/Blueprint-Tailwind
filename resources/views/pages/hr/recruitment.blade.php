@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Recruitment & ATS</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Manage job postings, candidate pipelines, interview scheduling, and offer letters.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Create Job Opening</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 text-center shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Applied</span>
            <div class="text-3xl font-extrabold text-gray-900 dark:text-white mt-2">48</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 text-center shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Screening</span>
            <div class="text-3xl font-extrabold text-blue-600 mt-2">12</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 text-center shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Interview Stage</span>
            <div class="text-3xl font-extrabold text-purple-600 mt-2">5</div>
        </div>
        <div class="p-5 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 text-center shadow-sm">
            <span class="text-xs font-semibold text-gray-400 uppercase">Offer Extended</span>
            <div class="text-3xl font-extrabold text-emerald-600 mt-2">2</div>
        </div>
    </div>
</div>
@endsection
