<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Employee ID</th>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Phone</th>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Address</th>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Salary</th>
                            <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Action</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach( $employees as $employee)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->employee_id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->name }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->phone }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->email }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->address }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">{{ $employee->salary }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap">
                                <a href="{{ route('employees.show', $employee->id) }}" class="text-indigo-600 hover:text-indigo-900">Show</a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="text-indigo-600 hover:text-indigo-900 ms-2">Edit</a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ms-2">Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
