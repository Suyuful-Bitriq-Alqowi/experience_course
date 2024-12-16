<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-blue-50">
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Title -->
                <h2 class="text-2xl font-bold text-blue-600 text-center mb-6">
                    {{ __('Register') }}
                </h2>

                <!-- Name -->
                <div class="mb-4">
                    <x-text-input 
                        id="name" 
                        class="block mt-1 w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-lg placeholder-gray-400" 
                        type="text" 
                        name="name" 
                        :value="old('name')" 
                        required 
                        autofocus 
                        autocomplete="name" 
                        placeholder="{{ __('Name') }}" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-text-input 
                        id="email" 
                        class="block mt-1 w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-lg placeholder-gray-400" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autocomplete="username" 
                        placeholder="{{ __('Email') }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-text-input 
                        id="password" 
                        class="block mt-1 w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-lg placeholder-gray-400" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="new-password" 
                        placeholder="{{ __('Password') }}" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-text-input 
                        id="password_confirmation" 
                        class="block mt-1 w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-lg placeholder-gray-400" 
                        type="password" 
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password" 
                        placeholder="{{ __('Confirm Password') }}" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Already Registered -->
                <div class="flex items-center justify-between mt-4">
                    <a class="text-sm text-blue-600 hover:underline" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button 
                        class="w-full bg-blue-600 text-white text-center py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
