@props([
    'label',
    'type',
    'name',
    'oldBool' => null,
    'required' => 'false'
])

<label for="{{ $name }}" class="block text-sm/6 font-medium text-black-100">{{ $label }}</label>
<div class="mt-2">
    <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}" value="{{ $oldBool ? old($name) : '' }}" class="block w-full rounded-md bg-black/10 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" required="{{ $required }}"/>
    @error($name)
        <div class="px-3 py-1 border-2 border-solid border-red-600 mt-1 rounded-md">
            <p class="text-sm text-red-600 text-center">{{ $message }}</p>
        </div>  
    @enderror
</div>