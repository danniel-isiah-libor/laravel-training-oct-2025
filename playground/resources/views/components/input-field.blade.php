@props(['label', 'type', 'color' => 'red', 'style' => ''])

<div>
    <label for="email" class="block text-sm/6 font-medium text-gray-100">{{ $label }}</label>
    <div class="mt-2">
        <input id="email" type="{{ $type }}" name="email" required autocomplete="email"
            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
    </div>
</div>


