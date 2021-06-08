<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <h1>Регистрация перевозчика</h1>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register-carrier') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Имя')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Middle Name -->
            <div>
                <x-label for="middle_name" :value="__('Отчество')" />
                <x-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')" required autofocus />
            </div>

            <!-- Surname -->
            <div>
                <x-label for="surname" :value="__('Фамилия')" />
                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Телефон')" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <!-- City -->
            <div class="mt-4">
                <x-label for="city" :value="__('Город')" />
                <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>

            <!-- Birthday -->
            <div class="mt-4">
                <x-label for="birthday" :value="__('Дата рождения')" />
                <x-input id="birthday" class="block mt-1 w-full" type="text" name="birthday" :value="old('birthday')" required />
            </div>

            <!-- Driver license -->
            <div class="mt-4">
                <x-label for="driver_license" :value="__('Водительское удостоверение')" />
                <x-input id="driver_license" class="block mt-1 w-full" type="text" name="driver_license" :value="old('driver_license')" required />
            </div>

            <!-- Reg certeficate -->
            <div class="mt-4">
                <x-label for="reg_certificate" :value="__('Регистрационный номер')" />
                <x-input id="reg_certificate" class="block mt-1 w-full" type="text" name="reg_certificate" :value="old('reg_certificate')" required />
            </div>

            <!-- Insurance -->
            <div class="mt-4">
                <x-label for="insurance" :value="__('Страховка')" />
                <x-input id="insurance" class="block mt-1 w-full" type="text" name="insurance" :value="old('insurance')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Пароль')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Повтор пароля')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже зарегестрирован?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Регистрация') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
