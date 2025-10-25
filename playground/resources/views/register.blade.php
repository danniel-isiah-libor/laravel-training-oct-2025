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

    <div>
        <h1>Register</h1>

        <x-alert label="Quote" />

        <x-input-field label="Name" type="text" color="green" style="border: 1px solid blue" />

        <br>

        <x-input-field label="Email" type="email" />

        <br>

        <x-input-field label="Password" type="password" />

        <br>

        <x-input-field label="Confirm Password" type="password" />

        <br>

        <x-button label="Register" />
    </div>
</x-layout>
