<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" x-data="imgPreview" x-cloak enctype="multipart/form-data" >
        @csrf
        @method('patch')

        <div>
            <x-text-input  name="name" label="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-text-input  name="channel" label="Channel Name" type="text" class="mt-1 block w-full" :value="old('channel', $user->channel)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>

            <x-text-input  name="email" label="Email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 ">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div >
            <x-text-input  name="image" label="User Image" type="file" value="{{'storage/'.auth()->user()->user_image}}" accept=".png, .jpg, .jpeg, .svg"  class="mt-1 block w-full" required  autofocus autocomplete="name"/>
            <x-input-error class="mt-2" :messages="$errors->get('image')" />

            <div class="mt-4 ">
                <img src="{{asset('storage/'. auth()->user()->user_image)}}" class="rounded-full w-9 h-9" alt="">
            </div>
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>


