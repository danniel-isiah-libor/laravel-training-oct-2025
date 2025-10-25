<x-layout title="Register">

    <x-slot:header>
        <div>
            Header
        </div>
    </x-slot:header>

    <x-slot:footer>
        <div>
            Footer
        </div>
    </x-slot:footer>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign up to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('user.store') }}" method="POST" class="space-y-6">

                @csrf

                <x-input-field label="Name" type="text" name="name" />

                <x-input-field label="Email" type="email" name="email" />

                <x-input-field label="Password" type="text" name="password"/>

                <x-input-field label="Confirm Password" type="password" name="password_confirmation" />

                <x-button label="Register" />
                
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Already a member?
                <a href="{{ route('login') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Login</a>
            </p>
        </div>
    </div>
</x-layout>