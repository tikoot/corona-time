<x-layout>
    <div class="flex flex-col justify-center items-center m-auto h-screen max-w-sm">
        
       <x-logo/>

        <div class='flex flex-col items-center justify-center  m-auto'>
            <img src="{{asset('storage/assets/icons8-checked.png')}}" class="pb-4 " alt="checkmark">
            <p class="pb-24">{{__('register.your_account_is_confirmed_you_can_sign_in')}}</p>
            <a href="" class="w-full py-3 text-center text-lg rounded-lg text-white bg-green"> {{__('login.log_in')}}</a>
        </div>
    </div>
</x-layout>