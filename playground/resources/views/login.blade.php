<x-layout title="Login">

    @slot('css')
    @endslot

    @slot('header')
    @endslot

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                @csrf
                <x-input-field label="Name" name="name" type="text" required="true" />
                <x-input-field label="Email" name="email" type="email" required="true" />
                <x-button label="Sign-in" type="submit" />

            </form>
            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Not a member?
                <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Start a 14 day free
                    trial</a>
            </p>
        </div>
    </div>


    @slot('footer')
    @endslot


    @slot('js')
    @endslot
</x-layout>
