<x-layout>
    <div class="flex flex-col justify-center  sm:items-center sm:m-auto sm:h-screen max-w-sm pt-10 px-2">        
       <x-assets.logo/>
        <div class='flex flex-col items-center justify-center  m-auto pt-10 '>
            <h1 class=" text-xl sm:text-2xl font-black pb-10 sm:pb-14">{{ ucwords(__('login.reset_password'))}}</h1>
            <form  method='POST' action="{{ route('password.email') }}">
                @csrf
                <x-form.input name="email" placeholder="{{__('register.enter_your_email')}}"/>
                <x-form.button name="{{__('login.reset_password')}}"/>
            </form>
        </div>
    </div>
</x-layout>