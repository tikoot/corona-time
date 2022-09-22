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
      <main class="pt-10 ">
      
          <div class="grid  grid-cols-[max-content_1fr] sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <div class="flex flex-col items-center bg-contain bg-no-repeat w-[392px] h-[265px] pt-6 sm:pt-10" 
                 style="background-image:url('{{asset('storage/assets/Rectangle 375.png')}}')">
                      <img src="{{asset('/storage/assets/Group 1797.png')}}" class="md:w-[50px] lg:w-[80px] h-[60px]"/> 
                      <p class="text-base sm:text-xl font-medium pt-6">{{__('dashboard.new_cases')}}</p>
                      <p class="text-[25px] sm:text-4xl font-black text-darkblue pt-4">{{number_format($new_cases)}}</p>
              </div>
            <div class="flex flex-col items-center bg-contain bg-no-repeat w-[164px] sm:w-full md:w-[392px] h-[265px] pt-[31px] sm:pt-[56px]" 
                 style="background-image:url('{{asset('storage/assets/Rectangle 377.png')}}')">
                      <img src="{{asset('/storage/assets/Group 1799.png')}}" class="pb-6"/> 
                      <p class="text-base sm:text-xl font-medium pb-4">{{__('dashboard.recovered')}}</p>
                      <p class="text-[25px] sm:text-4xl font-black text-darkgreen">{{number_format($recovered)}}</p>
            </div>
            <div class="flex flex-col items-center bg-contain bg-no-repeat w-[164px] sm:w-full md:w-[392px] h-[265px] pt-[31px] sm:pt-[53px]" 
                 style="background-image:url('{{asset('/storage/assets/Rectangle 376.png')}}')">
                      <img src="{{asset('/storage/assets/Group 1798.png')}}" class="pb-6"/> 
                      <p class="text-base sm:text-xl font-medium pb-4">{{__('dashboard.deaths')}}</p>
                      <p class="text-[25px] sm:text-4xl font-black text-darkyellow">{{number_format($deaths)}}</p>
            </div>      
          </div>                             
      </main>
    </section>
  </div>

</x-dashboard.wrap>
