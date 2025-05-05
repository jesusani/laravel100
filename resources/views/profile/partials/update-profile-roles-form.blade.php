<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Role Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your Role and Permissions.") }}
        </p>
    </header>



    <form method="post" action="{{ route('role.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="role" :value="__('Role')" />
            <x-text-input
                id="role"
                name="role"
                type="text"
                class="mt-1 block w-full"
                :value="old('role', $user->getRoleNames()[0])"
                required />                />
            <x-input-error class="mt-2" :messages="$errors->get('role')" />
        </div>

        <div>
            <x-input-label for="permissions" :value="__('Permissions')" />
            <x-text-input
                id="permissions"
                name="permissions"
                type="text"
                class="mt-1 block w-full"
                :value="old('permissions',json_decode($user->getPermissionsViaRoles(), true)[0]['name']  )"
                required  />
            <x-input-error class="mt-2" :messages="$errors->get('permissions')" />

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save Role') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
