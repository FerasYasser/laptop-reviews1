<x-guest-layout>
<x-jet-authentication-card>
        <x-slot name="logo">
        <img src='https://lh3.googleusercontent.com/pw/ACtC-3dx5Afj2Nri2NfRKf_sjzmdnEC5XzX01kn5ZNZAOSwtXVUhJnHHYBliOwdxhVSShdQiQdsq6VUw30QyRCjkHs6DUqufqk456E5VqBVggmMM5vdTiPzqFRqoaS-g0jgHrq_9pEjrWiTYncbqNrBXJdaQ=s782-no?authuser=0' alt="W3Schools.com" style="margin-left:500px ;border-radius: 50%;width:20%;height:30%">
      </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>