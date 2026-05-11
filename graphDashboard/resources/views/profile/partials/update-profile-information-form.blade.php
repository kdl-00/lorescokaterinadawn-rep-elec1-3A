<section class="space-y-6">

    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-white/50">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <!-- Email Verification Form (unchanged functionality) -->
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Profile Update Form -->
    <form method="post" action="{{ route('profile.update') }}"
        class="mt-6 space-y-6">

        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <x-input-label for="name"
                :value="__('Name')" class="text-white/70" />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full bg-white/5 border-white/10 text-white"
                :value="old('name', $user->name)"
                required autofocus autocomplete="name" />

            <x-input-error
                class="mt-2 text-red-400"
                :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email"
                :value="__('Email')" class="text-white/70" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full bg-white/5 border-white/10 text-white"
                :value="old('email', $user->email)"
                required autocomplete="username" />

            <x-input-error
                class="mt-2 text-red-400"
                :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="mt-3 text-sm text-white/60">

                <p>
                    {{ __('Your email address is unverified.') }}
                </p>

                <button form="send-verification"
                    class="underline text-sm text-blue-400 hover:text-blue-300 mt-1">
                    {{ __('Click here to re-send the verification email.') }}
                </button>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 text-green-400 font-medium">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif

            </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">

            <x-primary-button
                class="bg-blue-600 hover:bg-blue-500 transition">
                {{ __('Save') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
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