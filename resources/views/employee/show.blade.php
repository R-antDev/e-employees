<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-center">
                        <div class="p-4 border dark:border-gray-700">
                            <h3 class="text-lg font-semibold mb-2">{{ $employee->name }}</h3>
                            <p><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
                            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                            <p><strong>Email:</strong> {{ $employee->email }}</p>
                            <p><strong>Address:</strong> {{ $employee->address }}</p>
                            <p><strong>Salary:</strong> {{ $employee->salary }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
