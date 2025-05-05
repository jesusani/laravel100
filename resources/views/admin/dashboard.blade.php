<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


                <table class="p-2 m-2 text-center  border border-primary">
                   <thead class="p-2  m-2  border border-primary"><th>USUARIO</th><th>EMAIL</th><th>ROLES</th></thead>
                    @foreach($users as $user)

                        <tr class="p-2 m-2  text-gray-900 dark:text-gray-100 border border-primary"><td>{{ $user->name }} </td><td class="p-2 m-2 text-gray-900 dark:text-gray-100 border border-primary">{{ $user->email }} </td><td>{{ $user->roles->pluck('name')->implode(', ')  }}</td></tr>

                @endforeach

                </table>
            </div>
        </div>
    </div>
</x-app-layout>



