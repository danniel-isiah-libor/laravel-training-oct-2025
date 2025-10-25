<x-layout title="Register">

    @slot('css')
    @endslot

    @slot('header')
    <h1>Register</h1>
    @endslot



    <form action="{{ route('register') }}">
        <x-input-field label="Name" name="name" type="text" />
        <x-input-field label="Email" name="email" type="email" />
        <x-input-field label="Password" name="password" type="password" />
        <x-input-field label="Confirm Password" name="confirm_password" type="password" />

        <x-button label="Register" />

    </form>


    @slot('footer')
    @endslot


    @slot('js')
    @endslot
</x-layout>
