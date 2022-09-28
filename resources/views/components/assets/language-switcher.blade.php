@if(app()->getLocale() == 'ka')
<div>
  <a href="{{route('locale.change', ['locale' => 'en'])}}" 
    class="flex justify-between items-center py-2 pr-4 pl-3 w-full text-base"
    >{{__('dashboard.english')}}
  <img class="pl-2" src="{{asset('/assets/Stroke 165.png')}}" alt=""/>
  </a> 
</div>
@else 
<div>
    <a href="{{route('locale.change', ['locale' => 'ka'])}}" 
     class="flex justify-between items-center py-2 pr-4 pl-3 w-full text-base"
       >{{__('dashboard.georgian')}}
    <img class="pl-2" src="{{asset('/assets/Stroke 165.png')}}" alt=""/>
    </a> 
</div>
@endif