<x-layout>
  <div class="flex h-screen">
    <div class="w-3/5 px-28 pb-10">
        <x-logo/>
        <div class="pt-14">
            <h1 class="font-black text-2xl pb-4">Welcome to Coronatime</h1>
            <p>Please enter required info to sign up</p>
           <div class="max-w-sm pt-6">
                <form method="POST" action="/register" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="username" placeholder="Enter unique username"/>
                    <x-form.input name="email" placeholder="Enter your email"/>
                    <x-form.input name="password" placeholder="Fill in password"/>
                    <x-form.input name="password" placeholder="repeat password" attr="password_confirmation"/>

                    <div class="flex items-center mb-6">
                        <input id="checkbox" type="checkbox" value="" class="w-5 h-5 border-lightgray  border border-solid rounded-md">
                        <label for="checkbox" class="ml-2 text-sm ">Remember this device</label>
                    </div>

                    <x-form.button name="sign up"/>

                </form>

                <div class="text-gray mt-6 text-center">
                    Already have an account? 
                    <a class="no-underline text-black" href="../login/">
                        Log in
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

