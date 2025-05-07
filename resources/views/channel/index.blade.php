<x-app-layout>
    <div class="flex flex-col justify-center items-center w-[90%]">
        {{--Channel photo and subHeader--}}
        <section class="w-[90%] flex flex-row justify-start items-start">
            <div class="w-[90%] flex flex-row ">
                <img src="{{ asset('storage/'.$user->user_image) }}"  class="rounded-full max-sm:w-20" alt="">

                <p class="ml-3 mt-14 max-sm:mt-6">{{$user->channel}}</p>
            </div>
        </section>

        <div class="w-full border border-gray-400 mt-10 mb-10"></div>

        <div class="flex flex-row flex-wrap  justify-start items-start max-sm:justify-center max-sm:items-center  w-[90%] h-auto  gap-8">
            @foreach($videos as $video)
                <x-video.cred :video="$video"/>
            @endforeach
        </div>

        <div class="w-[90%]">
            {{ $videos->links() }}
        </div>
    </div>
</x-app-layout>