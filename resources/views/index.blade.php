<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="flex h-screen">

    <div class="w-3/5 px-28 py-10">
        <div class="pb-1">
            <img  src="{{asset('storage/assets/Group 1.png')}}" alt="covid img">
        </div>
        <div class="pt-14">
            <h1 class="font-black text-2xl pb-4">Welcome to Coronatime</h1>
            <p>Please enter required info to sign up</p>
           <div class="max-w-sm pt-6">
                <form action="">
                    <div class="pb-6">
                        <label for="username" class="pb-2">Username</label>
                        <div>
                            <input type="text" class="border-lightgray  border border-solid rounded-lg py-4 pl-6 pr-40 text-base" placeholder="Enter unique username">
                        </div>
                        <p class="pt-2">Username should be unique, min 3 symbols </p>
                    </div>
                    <div class="pb-6">
                        <label for="email" class="pb-2">Email</label>
                        <div>
                            <input type="text" class="border-lightgray  border border-solid rounded-lg  py-4 pl-6 pr-40 text-base" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="pb-6">
                        <label for="" class="pb-2">Password</label>
                        <div>
                            <input type="text" class="border-lightgray  border border-solid rounded-lg  py-4 pl-6 pr-40 text-base" placeholder="Fill in password">
                        </div>
                    </div>
                    <div class="pb-6">
                        <label for="" class="pb-2">Repeat Password</label>
                        <div>
                            <input type="text" class="border-lightgray border border-solid rounded-lg  py-4 pl-6 pr-40 text-base" placeholder="Repeat password">
                        </div>
                    </div>
                    <div class="flex items-center mb-6">
                        <input id="checkbox" type="checkbox" value="" class="w-5 h-5 border-lightgray  border border-solid rounded-md">
                        <label for="checkbox" class="ml-2 text-sm ">Remember this device</label>
                    </div>
                    <button
                        type="submit"
                        class="w-full py-3 text-center text-lg rounded-lg text-white bg-green">SIGN UP</button>
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
</body>
</html>