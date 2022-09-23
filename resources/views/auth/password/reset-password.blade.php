<x-layout>
    <div class="flex flex-col justify-center  sm:items-center sm:m-auto sm:h-screen max-w-sm pt-10 px-2">        
       <x-assets.logo/>
        <div class='flex flex-col items-center justify-center  m-auto pt-10 sm:pt-0'>
            <h1 class="text-xl sm:text-2xl font-black pb-10 sm:pb-14">{{ ucwords(__('login.reset_password'))}}</h1>

            <form  method='POST' action="{{ route('password.update')}}">
                @csrf
              <div>
                <input type="hidden" value="{{$email}}" name="email">
                <input type="hidden" name="token" value="{{$token}}">
                <x-form.input name="password" placeholder="{{__('register.enter_new_password')}}" label='new_password'/> 
                <x-form.input name="password" placeholder="{{__('register.repeat_password')}}" nameattr="password_confirmation" label="repeat_password"/>
            </div> 
                <x-form.button name="{{__('login.save_changes')}}"/>            </form>
            </div>
    </div>
</x-layout>