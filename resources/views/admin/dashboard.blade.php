<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    lista de permisos:

                    <div> puede editar {{ Auth::user()->assignRole('patient') }}</div>
                    <div> puede editar {{ Auth::user()->can('edit') }}</div>
                    <div> puede ver {{ Auth::user()->can('view') }}</div>
                    <div> puede borrar {{ Auth::user()->can('delete') }}</div>
                    <div> role admin  {{ Auth::user()->hasRole('admin') }}</div>
                    <div> role fisio  {{ Auth::user()->hasRole('fisio') }}</div>
                    <div> role patient  {{ Auth::user()->hasRole('patient') }}
                        <div> role admin  {{ Role::find(1)->givePermissionTo(Permission::all()) }}</div>
                        <div> role fisio  {{ Auth::user()->hasRole('fisio') }}</div>
                        <div> role patient  {{ Auth::user()->hasRole('patient') }}

                    </div>

                    <div>  nombre permissos {{     Auth::user()->getPermissionNames()                 }} </div>

                                        <div>  roles nombre  {{ Auth::user()->getRoleNames()               }} </div>
                    @role('admin')
                       <a href="{{ route('dashboard.admin') }}">Ir al panel de administración</a>
                    @endrole
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @can('edit')
                     <a href="{{ route('dashboard.admin') }}">adminisitracion </a>

                </div><div>  permisos array {{  Auth::user()->permissions }} </div>
                            <div>  permisos directos {{ Auth::user()->getDirectPermissions()}} </div>
                                <div>  permisos via role   {{ Auth::user()->getPermissionsViaRoles()}} </div>
                                    <div>  todos permisos  {{ Auth::user()->getAllPermissions()}} </div>
                                </div>

                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



