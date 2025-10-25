@props(['label', 'type', 'name'])

<div>
    <label class="block text-sm/6 font-medium text-gray-100">{{ $label }}</label>
    <div class="mt-2">
        <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}" 
            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
    </div>

    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>