<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First Name -->
        <div>
            <x-input-label for="fname" :value="__('First Name')" />
            <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('name')" required
                autofocus />
            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
        </div>

        {{-- Middle Name --}}
        <div>
            <x-input-label for="mname" :value="__('Middle Name')" />
            <x-text-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('name')"
                required autofocus />
            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
        </div>

        {{-- Last Name --}}
        <div>
            <x-input-label for="lname" :value="__('Last Name')" />
            <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('name')"
                required autofocus />
            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- Department --}}
        <div>
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('name')"
                required autofocus />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>

        {{-- Semester --}}
        <div>
            <x-input-label for="semester" :value="__('Semester')" />
            <x-text-input id="semester" class="block mt-1 w-full" type="text" name="semester" :value="old('name')"
             autofocus />
            <x-input-error :messages="$errors->get('semester')" class="mt-2" />
        </div>

        {{-- Address --}}
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('name')"
                autofocus />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
