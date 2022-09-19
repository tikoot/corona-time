<nav class="px-4 py-5 border-b border-grey">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <x-assets.logo/>
        <div x-data="{showMenu : false}" @click.away="showMenu = false" class="flex md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800">
            <x-assets.language-switcher/>
            <x-assets.menu-button/>

          <ul class="hidden sm:block"
          :class="{'flex': showMenu, 'hidden': !showMenu}">
            <div class="flex flex-col absolute -right-5 top-14 justify-center items-left p-2 sm:static  sm:flex-row sm:divide-x sm:divide-grey">
            <li >
              <a href="#" class="pt-2 px-4 text-base text-left font-bold">{{Auth::user()->username}}</a>
            </li>
            <li >
              <form id="logout-form" method="POST" action="{{route('logout')}}" class="align-middle px-4">
                  @csrf
                 <button class="text-sm " type="submit">{{__('dashboard.log_out')}}</button> 
              </form>
            </li>
          </div>
       
          </ul>
        </div>
    </div>
</nav>