<nav class="px-2 py-5 border-b border-grey">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <x-assets.logo/>
      <div class="hidden w-full md:block md:w-auto">
        <ul class="flex p-3 mt-4 md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
         
              <button class="flex justify-between items-center py-2 pr-4 pl-3 w-full text-base  md:p-0 md:w-auto">English
               <img class="pl-2" src="{{asset('storage/assets/Stroke 165.png')}}">
              </button>
          <div class="flex flex-row justify-center items-center divide-x divide-grey">
          <li>
            <a href="#" class="pt-2 px-4 text-base font-bold">{{Auth::user()->username}}</a>
          </li>
          <li>
            <form id="logout-form" method="POST" action="{{route('logout')}}" class="align-middle px-4">
                @csrf
               <button class="text-sm " type="submit">Log Out</button> 
            </form>
          </li>
        </div>
        </ul>
      </div>
    </div>
</nav>