<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-xl">

    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 my-2 bg-dark  text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 my-2 bg-dark text-gray-900 dark:text-gray-100">



                @role('admin')
                Role Admin:
                    <a href="{{ route('dashboard.admin') }}">Ir al panel de administración</a>
                @endrole

                 @role('patient')
                    <p>Role patient:  <a href="{{ route('dashboard.patient') }}">Ir al panel de paciente</a></p>
                @endrole

                @role('fisio')
                    <p>Role fisio:  <a href="{{ route('dashboard.fisio') }}">Ir al panel de fisio</a></p>
                @endrole
                </div>
            </div>
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 my-2 bg-dark text-gray-900 dark:text-gray-100">


                </div>


            </div>

        </div>
    </div>
</x-app-layout>



