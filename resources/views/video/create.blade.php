<x-app-layout>
    <div class="flex flex-row justify-center items-center w-full ">
        <div class="bg-gray-800 p-8 rounded-xl ">
            <form action="/create" method="post" enctype="multipart/form-data" class="space-y-4">
                <h1 class="w-full text-center text-2xl">Creat Video Post</h1>
                @csrf
                <x-text-input name="title" placeholder="How Japanese Masters Turn Sand Into Swords" required/>
                <x-text-input type="file" name="video" accept=".mp4,.ts" required/>
                <x-text-input type="file" name="thumbnail" accept=".png, .jpg, .jpeg" required/>

                <x-input-error :messages="$errors->all()" />

                <button class="bg-gray-700 p-2 rounded-2xl">
                    Upload
                </button>
            </form>
        </div>

    </div>

</x-app-layout>