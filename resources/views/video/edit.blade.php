<x-app-layout>
    <div class="flex flex-row justify-center items-center w-full ">

        <div class="bg-gray-800 p-8 rounded-xl ">
            <form action="/video/{{$video->id}}" method="post" enctype="multipart/form-data" class="space-y-4">
                <h1 class="w-full text-center text-2xl">Edit Video Post</h1>
                @csrf
                @method('PATCH')
                <x-text-input name="title" value="{{ $video->title }}" required/>
                <x-text-input type="file" name="video" accept=".mp4,.ts" />
                <x-text-input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" />

                <x-input-error :messages="$errors->all()" />
                <button class="bg-gray-700 p-2 rounded-2xl">
                    Update
                </button>
                <button form="delete-form" class="text-red-600 text-sm font-bold flex flex-row justify-end items-end">Delete</button>

            </form>
        </div>
    </div>
    <form action="/video/{{$video->id}}" method="post" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-app-layout>