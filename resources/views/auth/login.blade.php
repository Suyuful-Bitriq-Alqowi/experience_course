<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center bg-white">
        <div class="w-full max-w-md p-6">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Login to Your Account</h1>
                <p class="text-sm text-gray-500">Grow Your skills by practicing with experience.</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Phone Number / Email -->
                <div class="mb-4">
                    <x-text-input id="email" class="w-full rounded-lg border-gray-300" 
                        type="email" 
                        name="email" 
                        placeholder="PhoneNumber/Email" 
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-text-input id="password" class="w-full rounded-lg border-gray-300" 
                        type="password" 
                        name="password" 
                        placeholder="Password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Login Button -->
                <div class="mb-4">
                    <button class="w-full bg-black text-white py-2 rounded-lg font-semibold hover:bg-gray-800">
                        Login to Your Account
                    </button>
                </div>

                <!-- Forgot Password -->
                <div class="text-center mb-6">
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
                        Forgot Password?
                    </a>
                </div>

                <!-- Social Login Buttons -->
                <div class="space-y-2">
                    <button class="flex items-center w-full justify-center border py-2 rounded-lg">
                        <span class="mr-2">🔵</span> Login in with Google Account
                    </button>
                    <button class="flex items-center w-full justify-center border py-2 rounded-lg">
                        <span class="mr-2">⚫</span> Login in with Facebook Account
                    </button>
                    <button class="flex items-center w-full justify-center border py-2 rounded-lg">
                        <span class="mr-2">🍏</span> Login in with Apple Secure ID
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
