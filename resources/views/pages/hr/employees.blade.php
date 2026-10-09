@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Employees Directory</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Manage all staff members, positions, departments, and active statuses.</p>
        </div>
        <button class="inline-flex items-center gap-2 px-4 py-2 text-sm font-medium text-white rounded-lg bg-brand-500 hover:bg-brand-600 shadow-sm transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Add New Employee
        </button>
    </div>

    <!-- Filters & Search -->
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center justify-between bg-white p-4 rounded-xl border border-gray-200 dark:bg-gray-800 dark:border-gray-700 shadow-sm">
        <div class="relative flex-1 max-w-md">
            <svg class="w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <input type="text" placeholder="Search by name, role, email..." class="w-full pl-10 pr-4 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg dark:bg-gray-900 dark:border-gray-700 dark:text-white focus:outline-none focus:border-brand-500">
        </div>
        <div class="flex items-center gap-3">
            <select class="px-3 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                <option>All Departments</option>
                <option>Engineering</option>
                <option>Sales & Marketing</option>
                <option>Product & Design</option>
                <option>Operations & HR</option>
            </select>
            <select class="px-3 py-2 text-sm bg-gray-50 border border-gray-200 rounded-lg dark:bg-gray-900 dark:border-gray-700 dark:text-white">
                <option>All Statuses</option>
                <option>Active</option>
                <option>On Leave</option>
                <option>Terminated</option>
            </select>
        </div>
    </div>

    <!-- Employee Table -->
    <div class="bg-white border border-gray-200 rounded-2xl dark:bg-gray-800 dark:border-gray-700 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50 dark:bg-gray-900/50 text-gray-500 dark:text-gray-400 uppercase text-[11px] font-semibold border-b border-gray-200 dark:border-gray-700">
                    <tr>
                        <th class="px-6 py-3.5">Employee Name</th>
                        <th class="px-6 py-3.5">Role & Title</th>
                        <th class="px-6 py-3.5">Department</th>
                        <th class="px-6 py-3.5">Work Email</th>
                        <th class="px-6 py-3.5">Join Date</th>
                        <th class="px-6 py-3.5">Status</th>
                        <th class="px-6 py-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700 text-gray-700 dark:text-gray-300">
                    @php
                        $empList = [
                            ['name' => 'Sarah Connor', 'role' => 'Head of HR', 'dept' => 'Operations & HR', 'email' => 'sarah.c@company.com', 'date' => 'Jan 15, 2021', 'status' => 'Active', 'color' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400'],
                            ['name' => 'Alex Morgan', 'role' => 'Staff Product Manager', 'dept' => 'Product & Design', 'email' => 'alex.m@company.com', 'date' => 'Mar 10, 2022', 'status' => 'Active', 'color' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400'],
                            ['name' => 'David Chen', 'role' => 'Senior Frontend Developer', 'dept' => 'Engineering', 'email' => 'david.c@company.com', 'date' => 'Oct 01, 2024', 'status' => 'Active', 'color' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400'],
                            ['name' => 'Emily Watson', 'role' => 'Senior UI/UX Designer', 'dept' => 'Product & Design', 'email' => 'emily.w@company.com', 'date' => 'May 14, 2023', 'status' => 'On Leave', 'color' => 'bg-amber-100 text-amber-800 dark:bg-amber-950 dark:text-amber-400'],
                            ['name' => 'Michael Brown', 'role' => 'Backend Tech Lead', 'dept' => 'Engineering', 'email' => 'michael.b@company.com', 'date' => 'Aug 20, 2020', 'status' => 'Active', 'color' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400'],
                            ['name' => 'Jessica Taylor', 'role' => 'Account Executive', 'dept' => 'Sales & Marketing', 'email' => 'jessica.t@company.com', 'date' => 'Feb 28, 2024', 'status' => 'Active', 'color' => 'bg-emerald-100 text-emerald-800 dark:bg-emerald-950 dark:text-emerald-400'],
                        ];
                    @endphp
                    @foreach ($empList as $emp)
                        <tr class="hover:bg-gray-50/50 dark:hover:bg-gray-750/50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-600 dark:text-brand-400 flex items-center justify-center font-bold text-sm shrink-0">
                                    {{ substr($emp['name'], 0, 1) }}
                                </div>
                                <div>
                                    <div class="font-semibold">{{ $emp['name'] }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $emp['role'] }}</td>
                            <td class="px-6 py-4">{{ $emp['dept'] }}</td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400">{{ $emp['email'] }}</td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400">{{ $emp['date'] }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 text-xs font-semibold rounded-full {{ $emp['color'] }}">{{ $emp['status'] }}</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-gray-400 hover:text-brand-500 dark:hover:text-brand-400">
                                    <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
