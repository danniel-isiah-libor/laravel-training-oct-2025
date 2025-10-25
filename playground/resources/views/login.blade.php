<x-layout title="Login">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                <x-alert />

                @csrf

                <x-input-field label="Email" name="email" />
                <x-input-field label="Password" name="password" type="password" />

                <x-button label="Login" />
            </form>
            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Not a member?
                <a href="{{ route('register') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Register
                    here</a>
            </p>
        </div>
    </div>


    <x-slot:header>
        <div>Header</div>
    </x-slot:header>

    <x-slot:footer>
        <div>footer</div>
    </x-slot:footer>
</x-layout>
