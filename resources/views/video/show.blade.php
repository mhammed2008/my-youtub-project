<x-app-layout>
    <x-slot name="title">
        {{ $video->title }}
    </x-slot>
    <div class="w-full flex-col">
        <div>
            <video src="{{ asset('storage/'.$video->video) }}" class="w-3/4 max-sm:w-full max-sm:h-[50vh]" controls></video>
            <p class="ml-6 mb-6">{{ $video->title }}</p>
            <a href="/channel/{{ $video->user->channel_slug }}" class="flex flex-row ml-4 gap-4">
                <img src="{{ asset('storage/'.$video->user->user_image) }}" class="rounded-full w-10 h-10" alt="{{ 'image url: '. $video->user->user_image }}">
                <p class="mt-2">
                    {{ $video->user->name }}
                </p>
            </a>
        </div>

        <div>
            <div class="w-[70%] max-sm:w-[90%] flex flex-row justify-start items-start mt-6 bg-gray-800 p-3 rounded-3xl ml-3 " >
                <form method="post" action="/comment" class="w-full">
                    @csrf
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment"  rows="2" class="bg-black w-full"></textarea>
                    <x-input-error :messages="$errors->get('comment')" />
                    <input type="hidden" value="{{ $video->id }}" name="video">
                    <button type="submit" class="mt-4 bg-gray-900 p-3 text-sm rounded-3xl">Post Comment</button>
                </form>
            </div>

            @foreach($video->comments as  $comment)
                <x-video.comment :comment="$comment"/>
            @endforeach
        </div>
    </div>
</x-app-layout>