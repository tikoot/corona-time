@props(['name', 'placeholder', 'nameattr' => $name , 'label' => $name])

<div class="pb-6">
        <label class="font-bold" 
        for="{{ $name }}"
        >
        {{__('register.' . $label)}}
  
        </label>

        <input class="border-lightgray  border border-solid rounded-lg py-4 pl-6 pr-40 text-base mt-2"
        type="{{ $name }}"
        name="{{ $nameattr  }}" 
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{old($name)}}"

        required
        >

        <x-form.error attr="{{ $nameattr }}"/>
</div>