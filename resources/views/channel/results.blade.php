<x-app-layout>
    <div class="flex flex-row flex-wrap justify-start items-start max-sm:justify-center max-sm:items-center w-full h-auto  gap-8">
        @foreach($videos as $video)
            <x-video.cred :video="$video"/>
        @endforeach
    </div>
    <div>
        {{ $videos->links() }}
    </div>
</x-app-layout>