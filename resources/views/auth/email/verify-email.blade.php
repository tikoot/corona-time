<x-layout>
    <div class="flex flex-col justify-center items-center h-screen pt-10 ">
       <x-assets.logo/>
        <div class='flex flex-col items-center justify-center m-auto'>
            <x-auth.checkmark/>
            <p>{{__('register.we_have_sent_you_a_confirmation_email')}}</p>
        </div>
    </div>
</x-layout>