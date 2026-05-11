<section class="space-y-6">

    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-white/50">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}"
        class="mt-6 space-y-6">

        @csrf
        @method('put')

        <!-- Current Password -->
        <div>
            <x-input-label for="update_password_current_password"
                :value="__('Current Password')" class="text-white/70" />

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-1 block w-full bg-white/5 border-white/10 text-white"
                autocomplete="current-password" />

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2 text-red-400" />
        </div>

        <!-- New Password -->
        <div>
            <x-input-label for="update_password_password"
                :value="__('New Password')" class="text-white/70" />

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-1 block w-full bg-white/5 border-white/10 text-white"
                autocomplete="new-password" />

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2 text-red-400" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="update_password_password_confirmation"
                :value="__('Confirm Password')" class="text-white/70" />

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-1 block w-full bg-white/5 border-white/10 text-white"
                autocomplete="new-password" />

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2 text-red-400" />
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">

            <x-primary-button
                class="bg-blue-600 hover:bg-blue-500 transition">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-green-400">
                {{ __('Saved.') }}
            </p>
            @endif

        </div>

    </form>

</section>