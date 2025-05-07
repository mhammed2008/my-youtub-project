<x-app-layout>
    <div class="flex flex-row flex-wrap justify-start items-start max-sm:justify-center max-sm:items-center w-full h-auto  gap-8">
        @foreach($videos as $video)
            <x-video.cred :video="$video"/>
        @endforeach
    </div>
    @if (session('success'))
        <div class="end-0 fixed"
             x-data="{ show: true }"
             x-show="show"
             x-transition
             x-init="setTimeout(() => show = false, 5000)">
            <p class="text-sm text-white bg-green-600 p-4 w-auto rounded-l-full "
            >{{ session('success')}}</p>
        </div>
    @endif

    <div>
        {{ $videos->links() }}
    </div>
</x-app-layout>