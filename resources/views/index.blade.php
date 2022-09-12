<x-layout>
    <section>
        <div class="flex flex-wrap justify-center min-h-screen">
            <div class="flex  w-full px-28 pt-10  mx-auto  lg:w-3/5">
                <div class="h-1/2">
                    <x-logo/>
                    <div class="xl:pt-14 pt-11">
                    <h1 class="font-black text-2xl pb-4">{{__('register.welcome_to_coronatime')}}</h1>
                    <p>{{__('register.please_enter_required_info_to_sign_up')}}</p>
                   <div class="max-w-sm pt-6">
                        <form method="POST" action="/register" >
                            @csrf
        
                            <x-form.input name="username" placeholder="{{__('register.enter_unique_username')}}"/>
                            <x-form.input name="email"    placeholder="{{__('register.enter_your_email')}}"/>
                            <x-form.input name="password" placeholder="{{__('register.fill_in_password')}}"/>
                            <x-form.input name="password" placeholder="{{__('register.repeat_password')}}" nameattr="password_confirmation" label="repeat_password"/>
        
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
                
            </div>
            
            <img class="hidden bg-cover object-cover min-h-screen lg:block lg:w-2/5" src="{{asset('storage/assets/covid.png')}}" alt="covid img">
        
            
        </div>
    </section>

  </x-layout>
  
  