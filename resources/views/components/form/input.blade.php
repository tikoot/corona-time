@props(['name', 'placeholder', 'attr' => $name])

<div class="pb-6">
        <label class="pb-2" 
        for="{{ $name }}"
        >
        {{ ucwords($name) }}
        </label>

        <input class="border-lightgray  border border-solid rounded-lg py-4 pl-6 pr-40 text-base"
        type="{{ $name }}"
        name="{{ $attr  }}" 
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        required
        >

        <x-form.error attr="{{ $attr }}"/>
</div>