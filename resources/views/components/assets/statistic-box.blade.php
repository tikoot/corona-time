@props(['path' , 'bg' , 'attr' , 'textattr' , 'pt' , 'statistic'])

<div class="flex flex-col items-center justify-between pb-10  bg-no-repeat w-[400px] h-[265px] {{$pt}}" style="background-image: {{$bg}}">
    <img src="{{$path}}" class="pb-6"/> 
    <p class="text-xl font-medium pb-4">{{ $textattr }}</p>
    <p class="text-4xl font-black . {{$attr}} ">{{ $statistic }}</p>
</div>