@props(['name', 'placeholder', 'nameattr' => $name , 'label' => $name])

<div class="pb-6">
        <label class="pb-2" 
        for="{{ $name }}"
        >
        {{__('register.' . $label)}}
  
        </label>

        <input class="border-lightgray  border border-solid rounded-lg py-4 pl-6 pr-40 text-base"
        type="{{ $name }}"
        name="{{ $nameattr  }}" 
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        required
        >

        <x-form.error attr="{{ $nameattr }}"/>
</div>