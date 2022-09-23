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
        
    
        <form class="relative pb-10 pl-4 sm:pl-0"> 
          <div class="absolute top-[14px] left-6">
              <img src="{{asset('/storage/assets/Vector.png')}}" alt="">
          </div>
        <input type="search" value="{{request('search')}}" name="search" class="h-12 w-full sm:w-64 pl-14 pr-8 text-[15px] outline-0 text-gray font-medium rounded-lg z-0 sm:border sm:border-lightgray" placeholder="Search by country">
          <div class="absolute top-3 right-6">
              <button class="hidden h-10 w-20 text-white rounded-lg">Search</button>
          </div>
        </form>

        <div class="max-w-full ">
          <div class="overflow-x-hidden  text-left shadow ring-1 ring-grey md:rounded-lg">
            <table class="w-full table-fixed divide-y divide-grey text-sm">
              <thead class="bg-grey">
                <tr>                
                  <th class="pl-4 sm:pl-10 py-5">
                    <div class="text-xs sm:text-sm flex items-center flex-wrap">{{__('dashboard.location')}}
                      <div class="pl-[5px] sm:pl-[9px]">
                        <a href="{{route('sort.ascend', ['statistic' => 'country'])}}"><x-dashboard.arrow-asc/></a>
                        <a href="{{route('sort.descend', ['statistic' => 'country'])}}"><x-dashboard.arrow-desc/></a>
                      </div>
                    </div>
                  </th>
                  <th class="pl-2 sm:pl-10 py-5">
                    <div class="text-xs sm:text-sm flex items-center flex-wrap">{{__('dashboard.new_cases')}}
                      <div class="pl-[5px] sm:pl-[9px]">
                        <a href="{{route('sort.ascend', ['statistic' => 'confirmed'])}}"><x-dashboard.arrow-asc/></a>
                        <a href="{{route('sort.descend', ['statistic' => 'confirmed'])}}"><x-dashboard.arrow-desc/></a>
                      </div>
                  </div>
                  </th>
                  <th class="pl-2 sm:pl-10 py-5">
                    <div class="text-xs sm:text-sm flex items-center flex-wrap">{{__('dashboard.deaths')}}
                      <div class="pl-[5px] sm:pl-[9px]">
                        <a href="{{route('sort.ascend', ['statistic' => 'deaths'])}}"><x-dashboard.arrow-asc/></a>
                        <a href="{{route('sort.descend', ['statistic' => 'deaths'])}}"><x-dashboard.arrow-desc/></a>
                      </div>
                    </div>
                  </th>
                  <th class="pl-2 sm:pl-10 py-5">
                    <div class="text-xs sm:text-sm flex items-center flex-wrap">{{__('dashboard.recovered')}}
                      <div class="pl-[5px] sm:pl-[9px]">
                        <a href="{{route('sort.ascend', ['statistic' => 'recovered'])}}"><x-dashboard.arrow-asc/></a>
                        <a href="{{route('sort.descend', ['statistic' => 'recovered'])}}"><x-dashboard.arrow-desc/></a>
                      </div>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-grey">
                @foreach($statistics as $statistic)
                <tr>
                  <td class="pl-4 sm:pl-10 py-4">{{$statistic->country}}</td>
                  <td class="pl-2 sm:pl-10 py-4">{{$statistic->confirmed}}</td>
                  <td class="pl-2 sm:pl-10 py-4">{{$statistic->deaths}}</td>
                  <td class="pl-2 sm:pl-10 py-4">{{$statistic->recovered}}</td>
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

