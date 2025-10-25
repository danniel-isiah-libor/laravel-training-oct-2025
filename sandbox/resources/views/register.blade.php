<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-black">Account Registration</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <x-input-field label="Name" type="text" name="name"/>
                </div>
                <div>
                    <x-input-field label="Email" type="email" name="email"/>
                </div>
                <div>
                    <x-input-field label="Password" type="password" name="password"/>
                </div>
                <div>
                    <x-input-field label="Confirm Password" type="password" name="password_confirmation"/>
                </div>
                <div>
                    <x-button type="submit" label="Register"/>
                </div>
            </form>
        </div>
    </div>
</x-layout>

