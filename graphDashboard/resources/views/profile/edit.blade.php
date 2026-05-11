<x-app-layout>
    <div class="min-h-screen bg-black text-white relative">

        {{-- Glow background --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-32 -left-32 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-40 right-0 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>
        </div>

        {{-- Header --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>

        {{-- Content --}}
        <div class="relative py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                {{-- Profile Info --}}
                <div class="p-6 sm:p-8 bg-white/5 border border-white/10 backdrop-blur-xl shadow rounded-2xl">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                {{-- Password --}}
                <div class="p-6 sm:p-8 bg-white/5 border border-white/10 backdrop-blur-xl shadow rounded-2xl">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                {{-- Delete Account --}}
                <div class="p-6 sm:p-8 bg-white/5 border border-white/10 backdrop-blur-xl shadow rounded-2xl">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>