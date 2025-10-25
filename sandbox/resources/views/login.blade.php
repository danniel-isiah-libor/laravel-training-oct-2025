<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-black">Account Login</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('user.login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <x-input-field label="Email" type="email" name="email" isloggedIn/>
                </div>
                <div>
                    <x-input-field label="Password" type="password" name="password"/>
                </div>
                <div>
                    <x-button type="submit" label="Login"/>
                </div>
            </form>
            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Not a member?
            <a href="{{ route('register') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Click here</a>
            </p>
        </div>
    </div>
</x-layout>
