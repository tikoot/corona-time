<x-auth.panel>
    <h1 class="font-black text-2xl pb-4">{{__('register.welcome_to_coronatime')}}</h1>
    <p class="text-gray">{{__('register.please_enter_required_info_to_sign_up')}}</p>
        <div class="max-w-sm pt-6">
            <form method="POST" action="{{ route('register.store') }}" >
                @csrf
                <x-form.input name="username" placeholder="{{__('register.enter_unique_username')}}"/>
                <x-form.input name="email" placeholder="{{__('register.enter_your_email')}}"/>
                <x-form.input name="password" placeholder="{{__('register.fill_in_password')}}"/>
                <x-form.input name="password" placeholder="{{__('register.repeat_password')}}" nameattr="password_confirmation" label="repeat_password"/>
                <x-form.button name="{{__('register.sign_up')}}"/>
            </form>
                <div class="text-gray mt-6 text-center">
                {{__('register.already_have_an_account?')}} 
                    <a class="no-underline text-black" href="{{ route('login') }}">
                    {{ucwords(__('login.log_in'))}} 
                    </a>
                </div>
        </div>
</x-auth.panel>