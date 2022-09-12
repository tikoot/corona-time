<x-layout>
    <div class="flex flex-col justify-center items-center m-auto h-screen max-w-sm pt-10">        
       <x-logo/>
        <div class='flex flex-col items-center justify-center  m-auto'>
            <x-auth.checkmark/>
            <p class="pb-24">{{__('register.your_account_is_confirmed_you_can_sign_in')}}</p>
            <a href="{{ route('login') }}" class="w-full py-3 text-center text-lg rounded-lg text-white bg-green font-black"> {{ strtoupper(__('login.log_in'))}}</a>
        </div>
    </div>
</x-layout>