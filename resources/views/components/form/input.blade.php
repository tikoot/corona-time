@props(['name', 'placeholder', 'nameattr' => $name , 'label' => $name])

<div class="pb-4 sm:pb-6">
        <label class="font-bold text-sm sm:text-base" 
        for="{{ $name }}"
        >
        {{__('register.' . $label)}}
  
        </label>

        <input class="w-full border-lightgray border border-solid rounded-lg py-4 pl-6 text-base mt-2"
        type="{{ $name }}"
        name="{{ $nameattr  }}" 
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{old($name)}}"

        required
        >

        <x-form.error attr="{{ $nameattr }}"/>
</div>