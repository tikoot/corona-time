<x-auth.panel>
    <h1 class="font-black text-2xl pb-4">{{__('login.welcome_back')}}</h1>
    <p class="text-gray">{{__('login.welcome_back_please_enter_your_details')}}</p>
        <div class="max-w-sm pt-6">
            <form method="POST" action="{{ route('dashboard') }}" >
                @csrf

                <x-form.input name="login" placeholder="{{__('login.enter_unique_username_or_email')}}" label='username'/>
                <x-form.input name="password" placeholder="{{__('register.fill_in_password')}}"/>
                <div class="flex justify-between min-w-full">
                    <div class="flex items-center mb-6">
                        <input type="checkbox" value="1" name="remember" class="w-5 h-5 border-lightgray border border-solid rounded-md">
                        <label  for="remember" class="ml-2 text-sm font-semibold">{{__('register.remember_this_device')}}</label>
                        
                    </div>
                    <a href="{{ route('password.request') }}" class="text-blue text-sm font-semibold"> {{__('login.forgot_password?')}} </a>
                </div>

                <x-form.button name="{{__('login.log_in')}}"/>
            </form>

            <div class="text-gray mt-6 text-center">
                {{__('login.don’t_have_an_account?')}} 
                <a class="no-underline text-black font-semibold" href="{{ route('register') }}">
                {{ucwords(__('register.sign_up_for_free'))}} 
                </a>
            </div>
        </div>
    </x-auth.panel>
    