<x-layout>
    <div class="flex flex-col justify-center items-center m-auto h-screen max-w-sm pt-10">        
       <x-assets.logo/>
        <div class='flex flex-col items-center justify-center  m-auto'>
            <x-auth.checkmark/>
            <p class="pb-24">{{__('login.your_password_has_been_updeted_successfully')}}</p>
            <a href="{{ route('login') }}" class="w-full py-3 text-center text-lg rounded-lg text-white bg-green font-black"> {{ strtoupper(__('login.sign_in'))}}</a>
        </div>
    </div>
</x-layout>