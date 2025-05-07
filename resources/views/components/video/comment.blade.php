@props(['comment'])
<div class="w-[40%] max-sm:w-[90%] flex flex-col justify-start items-start mt-6 bg-gray-800 p-3 rounded-3xl ml-3">
    <div class="flex flex- mb-3">
        <img src="{{ asset('storage/'. $comment->user->user_image) }}" class="w-10 h-10 rounded-full" alt="">
        <p class="ml-3 mt-1">{{ $comment->user->name }}</p>
    </div>
    <p class="ml-3">
        {{ $comment->comment }}    </p>
</div>