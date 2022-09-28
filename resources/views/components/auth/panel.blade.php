<x-layout>
    <section>
        <div class="flex flex-wrap justify-center h-screen">
            <div class="flex w-full px-4 pt-6  sm:px-28 sm:st-10  mx-auto lg:w-3/5">
                <div class="h-1/2">
                    <div class="flex justify-between">
                    <x-assets.logo/>
                    <x-assets.language-switcher/>
                </div>
                    <div class="xl:pt-14 pt-11">
                         {{ $slot }}
                     </div>
                </div>
            </div>
                <img class="hidden object-cover w-full h-screen lg:block lg:w-2/5" src="{{asset('/assets/covid.png')}}" alt="covid img">
            </div>
    </section>
</x-layout>