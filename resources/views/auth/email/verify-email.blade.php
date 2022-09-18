<x-layout>
    <div class="flex flex-col justify-center sm:items-center h-screen  pt-10 px-2">
       <x-assets.logo/>
        <div class='flex flex-col items-center justify-center m-auto'>
            <x-auth.checkmark/>
            <p class="text-center">{{__('register.we_have_sent_you_a_confirmation_email')}}</p>
        </div>
    </div>
</x-layout>