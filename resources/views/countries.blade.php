<x-dashboard.wrap>
  <div class="pt-10">
    <header class="container flex flex-col flex-wrap mx-auto text-2xl font-extrabold pl-4 sm:pl-0">{{__('dashboard.statistics_by_country')}}</header>
    <section class="container flex-wrap mx-auto  divide-y divide-grey">
        <div class="flex pt-10 text-base pl-4 sm:pl-0">
            <a href=" {{ route('dashboard.worldwide') }}" 
                class="mr-16"
                >  {{__('dashboard.worldwide')}}
            </a>

            <a  href=" {{ route('dashboard.countries') }}"
                class="ml-2 font-bold border-b-2 pb-4"
                > {{__('dashboard.by_country')}}
            </a>
      </div>
      
      <main class="pt-10">
        
    
        <form class="relative pb-10"> 
          <div class="absolute top-[14px] left-6">
              <img src="{{asset('/storage/assets/Vector.png')}}" alt="">
          </div>
        <input type="search" value="{{request('search')}}" name="search" class="h-12 w-64 pl-14 pr-8 text-[15px] text-gray font-medium rounded-lg z-0 border border-lightgray" placeholder="Search by country">
          <div class="absolute top-2 right-2">
              
              <button class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">Search</button>
              
          </div>
        </form>

    
  
        <div class="max-w-full ">
          <div class="overflow-x-hidden  text-left shadow ring-1 ring-grey md:rounded-lg">
            <table class="w-full table-fixed divide-y divide-grey text-sm">
              <thead class="bg-grey">
                <tr>                
                  <th class="pl-4 sm:pl-10 py-5">{{__('dashboard.location')}}</th>
                  <th class="pl-4 sm:pl-10 py-5">{{__('dashboard.new_cases')}}</th>
                  <th class="pl-4 sm:pl-10 py-5">{{__('dashboard.deaths')}}</th>
                  <th class="pl-4 sm:pl-10 py-5">{{__('dashboard.recovered')}}</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-grey">
                @foreach($statistics as $statistic)
                <tr>
                  <td class="pl-4 sm:pl-10 py-4">{{$statistic->country}}</td>
                  <td class="pl-4 sm:pl-10 py-4">{{$statistic->confirmed}}</td>
                  <td class="pl-4 sm:pl-10 py-4">{{$statistic->deaths}}</td>
                  <td class="pl-4 sm:pl-10 py-4">{{$statistic->recovered}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </section>
  </div>

</x-dashboard.wrap>

