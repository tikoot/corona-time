<x-layout>
  <div class="flex h-screen">
    <div class="w-3/5 px-28 pb-10">
        <x-logo/>
        <div class="pt-14">
            <h1 class="font-black text-2xl pb-4">{{__('register.welcome_to_coronatime')}}</h1>
            <p>{{__('register.please_enter_required_info_to_sign_up')}}</p>
           <div class="max-w-sm pt-6">
                <form method="POST" action="/register" >
                    @csrf

                    <x-form.input name="username" placeholder="{{__('register.enter_unique_username')}}"/>
                    <x-form.input name="email"    placeholder="{{__('register.enter_your_email')}}"/>
                    <x-form.input name="password" placeholder="{{__('register.fill_in_password')}}"/>
                    <x-form.input name="password" placeholder="{{__('register.repeat_password')}}" nameattr="password_confirmation" label="repeat_password"/>

                    <div class="flex items-center mb-6">
                        <input id="checkbox" type="checkbox" value="" class="w-5 h-5 border-lightgray  border border-solid rounded-md">
                        <label for="checkbox" class="ml-2 text-sm ">{{__('register.remember_this_device')}}</label>
                    </div>

                    <x-form.button name="{{__('register.sign_up')}}"/>

                </form>

                <div class="text-gray mt-6 text-center">
                    {{__('register.already_have_an_account?')}} 
                    <a class="no-underline text-black" href="">
                        {{__('login.log_in')}} 
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="w-2/5">
       <img class="object-cover h-screen w-full" src="{{asset('storage/assets/covid.png')}}" alt="covid img">
    </div>

  </div>
</x-layout>

