<x-dashboard.wrap>

  <div class="pt-10">
    <header class="container flex flex-col flex-wrap mx-auto text-2xl font-extrabold">{{__('dashboard.worldwide_statistics')}}</header>
    <section class="container flex-wrap mx-auto  divide-y divide-grey">
      
        <div class="flex pt-10 text-base">
            <a href=" {{ route('dashboard.worldwide') }}" 
               class="font-bold border-b-2 pb-4 mr-16"
                >{{__('dashboard.worldwide')}}
            </a>

            <a  href=" {{ route('dashboard.countries') }}"
                class="ml-2"
                >{{__('dashboard.by_country')}}
            </a>
      </div>
    
      <main>
      dash
      </main>
    </section>
  </div>

</x-dashboard.wrap>
