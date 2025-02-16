<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('assets/images/todo_login.png') }}" alt="Logo" style="max-width: 250px; max-height: 300px; width: auto; height: auto; border-radius: 20%">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center space-x-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 hover:text-gray-900 font-medium transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                           href="{{ route('password.request') }}">
                            Şifrenizi mi unuttunuz?
                        </a>
                    @endif

                    <a class="text-sm text-gray-600 hover:text-gray-900 font-medium transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-3"
                       href="{{ route('userRegister') }}">
                        Kayıt ol
                    </a>
                </div>

                <x-button class="ms-4 px-6 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg transition duration-200 ease-in-out">
                    {{ __('Log in') }}
                </x-button>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>
