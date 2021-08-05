<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!---->
            <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
                <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Description</label>
                        <input type="text" name="description" id="description" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('description')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-center sm:px-6">
                    <button type="submit" class="inline-flex float-left py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                    </button>
                </div>
                </div>
            </form>
            <!---->
        </div>
    </div>
</x-app-layout>
