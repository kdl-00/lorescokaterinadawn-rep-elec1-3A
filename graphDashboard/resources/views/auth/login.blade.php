<x-guest-layout>
    <div class="min-h-screen bg-black flex items-center justify-center px-6 relative">

        {{-- Glow background --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-32 -left-32 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-40 right-0 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>
        </div>

        {{-- Card --}}
        <div class="relative w-full max-w-md bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl p-8">

            <h2 class="text-xl font-semibold text-white text-center">Welcome Back</h2>
            <p class="text-xs text-white/40 text-center mb-6">Login to continue</p>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                {{-- Email --}}
                <div>
                    <x-input-label for="email" value="Email" class="text-white/70" />
                    <x-text-input id="email"
                        class="block mt-1 w-full bg-black/40 border-white/10 text-white"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- Password --}}
                <div>
                    <x-input-label for="password" value="Password" class="text-white/70" />
                    <x-text-input id="password"
                        class="block mt-1 w-full bg-black/40 border-white/10 text-white"
                        type="password"
                        name="password"
                        required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Remember --}}
                <label class="flex items-center text-sm text-white/60">
                    <input type="checkbox" class="rounded bg-black/40 border-white/20 mr-2">
                    Remember me
                </label>

                {{-- Actions --}}
                <div class="flex justify-between items-center mt-4">
                    @if (Route::has('password.request'))
                    <a class="text-xs text-white/40 hover:text-white underline"
                        href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                    @endif

                    <x-primary-button class="bg-blue-600 hover:bg-blue-500">
                        Login
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>