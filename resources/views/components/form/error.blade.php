@props(['attr'])

    @error($attr)
        <p class="text-red mt-2">{{ $message }}</p>
    @enderror