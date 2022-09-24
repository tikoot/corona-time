<x-dashboard.wrap>

  <div class="pt-10">
    <header class="container flex flex-col flex-wrap mx-auto text-2xl font-extrabold  pl-4 md:pl-0">{{__('dashboard.worldwide_statistics')}}</header>
    <section class="container flex-wrap mx-auto  divide-y divide-grey  ">
      
        <div class="flex pt-10 text-base pl-4 md:pl-0">
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
        <div class="grid  sm:grid-cols-2 lg:grid-cols-3 gap-3 col-span-2 md:col-auto mx-4 sm:mx-0">
          <div class="flex flex-col items-center bg-center border-0 rounded-2xl sm:rounded-none sm:bg-contain bg-no-repeat col-span-2 sm:col-auto bg-[length:350px_193px] sm:w-[290px] h-[193px] md:w-[343px] md:h-[265px] xl:w-[392px] pt-6 md:pt-10" 
                 style="background-image:url('{{asset('storage/assets/Rectangle 375.png')}}')">
                      <img src="{{asset('/storage/assets/Group 1797.png')}}"/> 
                      <p class="text-base md:text-xl font-medium  pt-4 md:pt-6">{{__('dashboard.new_cases')}}</p>
                      <p class="text-[25px] md:text-[39px] font-black text-darkblue pt-4">{{number_format($new_cases)}}</p>
              </div>
            <div class="flex flex-col items-center bg-center  border-0 rounded-2xl sm:rounded-none w-[164px] h-[193px] sm:bg-contain bg-no-repeat  sm:w-[290px] pt-[28px] sm:h-[193px] md:w-[343px] md:h-[265px] xl:w-[392px]  md:pt-[56px]" 
                 style="background-image:url('{{asset('storage/assets/Rectangle 377.png')}}')">
                      <img src="{{asset('/storage/assets/Group 1799.png')}}" /> 
                      <p class="text-base md:text-xl font-medium pt-4 md:pt-6">{{__('dashboard.recovered')}}</p>
                      <p class="text-[25px] md:text-[39px] font-black text-darkgreen pt-4 md:pt-6">{{number_format($recovered)}}</p>
            </div>
            <div class="flex flex-col items-center bg-center sm:bg-contain bg-no-repeat border-0 rounded-2xl sm:rounded-none w-[164px] h-[193px] sm:w-[290px]  md:w-[343px] pt-[28px] md:h-[265px] xl:w-[392px]  md:pt-[53px]" 
                 style="background-image:url('{{asset('/storage/assets/Rectangle 376.png')}}')">
                      <img src="{{asset('/storage/assets/Group 1798.png')}}"/> 
                      <p class="text-base md:text-xl font-medium pt-4 md:pt-6">{{__('dashboard.deaths')}}</p>
                      <p class="text-[25px] md:text-[39px] font-black text-darkyellow pt-4">{{number_format($deaths)}}</p>
            </div>      
          </div>                             
      </main>
    </section>
  </div>

</x-dashboard.wrap>
