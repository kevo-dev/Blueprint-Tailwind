@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Teams & Departments</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Department structures, team leads, and cross-functional groups.</p>
        </div>
        <button class="px-4 py-2 text-sm font-medium text-white bg-brand-500 hover:bg-brand-600 rounded-lg shadow-sm">Create Team</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $teamsList = [
                ['name' => 'Frontend Engineering', 'lead' => 'David Chen', 'members' => '14 members', 'desc' => 'Responsible for Web UI, Alpine components, and client performance.'],
                ['name' => 'Backend Core Services', 'lead' => 'Michael Brown', 'members' => '22 members', 'desc' => 'APIs, Laravel microservices, database optimization, and cloud architecture.'],
                ['name' => 'Product Design & UX', 'lead' => 'Emily Watson', 'members' => '12 members', 'desc' => 'User research, prototyping, Tailwind design system, and accessibility.'],
                ['name' => 'Growth & Marketing', 'lead' => 'Jessica Taylor', 'members' => '18 members', 'desc' => 'Customer acquisition, content strategy, SEO, and paid ad campaigns.'],
                ['name' => 'People & HR Ops', 'lead' => 'Sarah Connor', 'members' => '8 members', 'desc' => 'Talent acquisition, payroll, employee engagement, and compliance.'],
                ['name' => 'Customer Success', 'lead' => 'John Doe', 'members' => '16 members', 'desc' => 'Client onboarding, technical support, and user satisfaction.'],
            ];
        @endphp
        @foreach ($teamsList as $team)
            <div class="p-6 bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-bold text-lg text-gray-900 dark:text-white">{{ $team['name'] }}</h3>
                        <span class="px-2.5 py-1 text-xs font-semibold bg-gray-100 text-gray-600 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ $team['members'] }}</span>
                    </div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-4">{{ $team['desc'] }}</p>
                </div>
                <div class="pt-4 border-t border-gray-100 dark:border-gray-700 flex items-center justify-between text-xs">
                    <span class="text-gray-400">Team Lead:</span>
                    <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $team['lead'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
