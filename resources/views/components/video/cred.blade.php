@props(['video'])
<div class="flex flex-col justify-center items-center w-60 rounded-lg  mb-10 bg-white/4 p-4  bg-white/5  hover:bg-white/10">
    <a href="/video/{{$video->id}}" class="flex flex-col flex-nowrap justify-center items-center gap-4 ">
        <div class="rounded-lg w-60 h-20 px-2">
            <img src="{{ asset('storage/'.$video->thumbnail_url) }}" class="w-60 h-32" alt="">
        </div>
        <span class="mt-10 ml-3 w-60 ">
            {{$video->title}}

        </span>
    </a>
    @can('authorize',$video)
        <a href="/video/{{ $video->id }}/edit" class="flex justify-end w-full ">
            <span class="bg-gray-700 p-1 rounded-full">
                Edit
            </span></a>
    @endcan
</div>