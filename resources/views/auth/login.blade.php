<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h2 class="text-center text-2xl font-semibold text-white">Sari Roti Aceh Utara</h2>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>
            <div class="grid grid-cols-1 items-center justify-between mt-4">
                <button class="w-full bg-primary py-2.5 rounded-md text-white">Masuk</button>
                <span class="text-center text-white py-3">Atau</span>
                <div class="w-full pb-5">
                    <a href="" class="flex justify-center items-center text-primary">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                            alt="" class="w-4 mr-2"> Masuk dengan Google
                    </a>
                </div>
            </div>
            <hr class="text-gray bg-gray">
            <div class="text-center my-2">
                <a class="text-sm text-gray-600 hover:text-gray-900 text-center text-white mx-auto my-2"
                    href="{{ route('register') }}">
                    {{ __('Belum Registrasi? Silahkan Registrasi.') }}
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
