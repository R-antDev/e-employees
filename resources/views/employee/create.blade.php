<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('employees.store') }}" method="POST" class="p-6">
                    @csrf
                    <div class="mb-4">
                        <label for="employee_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Employee ID</label>
                        <input type="text" name="employee_id" id="employee_id" class="mt-1 p-2 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" class="mt-1 p-2 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone</label>
                        <input type="text" name="phone" id="phone" class="mt-1 p-2 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
                        <textarea name="address" id="address" rows="3" class="mt-1 p-2 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="salary" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Salary</label>
                        <input type="number" step="0.01" name="salary" id="salary" class="mt-1 p-2 block w-full border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 rounded-md shadow-sm">
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
