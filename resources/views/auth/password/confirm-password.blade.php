<x-layout>
    <div class="flex flex-col justify-center  sm:items-center  h-screen  pt-10 px-2">        
       <x-assets.logo/>
        <div class='flex flex-col items-center justify-center  m-auto'>
            <x-auth.checkmark/>
            <p class="text-center pb-24">{{__('login.your_password_has_been_updeted_successfully')}}</p>
            <a href="{{ route('login') }}" class="w-full py-3 text-center text-lg rounded-lg text-white bg-green font-black"> {{ strtoupper(__('login.sign_in'))}}</a>
        </div>
    </div>
</x-layout>