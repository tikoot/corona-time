<x-layout>
    <div class="flex flex-col justify-center items-center h-screen">
        
       <x-logo/>

        <div class='flex flex-col items-center justify-center m-auto'>
            <img src="{{asset('storage/assets/icons8-checked.png')}}" class="pb-4 " alt="checkmark">
            <p>{{__('register.we_have_sent_you_a_confirmation_email')}}</p>
        </div>
    </div>
</x-layout>