<x-dashboard.wrap>

  <div class="pt-10">
    <header class="container flex flex-col flex-wrap mx-auto text-2xl font-extrabold  pl-4 sm:pl-0">{{__('dashboard.worldwide_statistics')}}</header>
    <section class="container flex-wrap mx-auto  divide-y divide-grey  pl-4 sm:pl-0">
      
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
     
      <main class="pt-10 h-screen">
          <div class="flex justify-between items-center">
            
            <x-assets.statistic-box path="{{asset('/storage/assets/Group 1797.png')}}" 
                        bg="url('{{asset('storage/assets/Rectangle 375.png')}}')" 
                        attr="text-darkblue"
                        textattr="{{__('dashboard.new_cases')}}"
                        pt="pt-10"
                        statistic = "$new_cases"/>
          
            <x-assets.statistic-box path="{{asset('/storage/assets/Group 1799.png')}}" 
                        bg="url('{{asset('storage/assets/Rectangle 377.png')}}')"
                        attr="text-darkgreen"
                        textattr="{{__('dashboard.recovered')}}"
                        pt="pt-[56px]"
                        statistic = "$recovered"/>

            <x-assets.statistic-box path="{{asset('/storage/assets/Group 1798.png')}}" 
                        bg="url('{{asset('/storage/assets/Rectangle 376.png')}}')"
                        attr="text-darkyellow"
                        textattr="{{__('dashboard.deaths')}}"
                        pt="pt-[53px]"
                        statistic ="{{$deaths}}"/>        
          </div>                             
      </main>
    </section>
  </div>

</x-dashboard.wrap>
