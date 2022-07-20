<x-layout>
    <x-auth-card>

        <x-slot name="logo">
            <a href="/">
                <x-logo/>
            </a>
        </x-slot>

        <h1 class="text-xl font-bold text-center mb-6">Log in</h1>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Phone Address -->
            <div class="mb-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" autofocus />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="hidden block mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" checked="checked" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="mb-4 flex justify-end">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">Forgot your password?</a>
            </div>

            <div class="flex items-center justify-end mb-4">
                <x-button class="ml-3">
                    Log in
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-layout>
