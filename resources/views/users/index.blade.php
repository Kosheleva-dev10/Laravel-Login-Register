<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!---->
                        <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="block mb-8">
                <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add User</a>
            </div>
            <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                {{$users->links()}}
                    <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email Verofied at
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Roles
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                        <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                {{$user->name}}
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                {{$user->email}}
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                {{$user->verified_at}}
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                            @foreach($user->roles as $role)
                                {{$role->title}}
                            @endforeach
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <a href="#" class="text-green-600 hover:text-indigo-900">View</a>
                                <a href="#" class="text-yellow-200 hover:text-indigo-900">Edit</a>
                                <form class="inline-block" action="#" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 py-2 px-4 hover:text-indigo-900 rounded">Delete</button>
                                </form>
                            </div>
                            </div>
                        </td>
                        </tr>
                    @endforeach

                        <!-- More items... -->
                    </tbody>
                    </table>
                    {{$users->links()}}
                </div>
                </div>
            </div>
            </div>
            <!---->
        </div>
    </div>
</x-app-layout>
