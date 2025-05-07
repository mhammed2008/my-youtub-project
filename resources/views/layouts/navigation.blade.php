<div class="w-full flex flex-row  justify-between items-center  border-b border-b-gray-800 gap-4 pb-4 fixed  bg-black ">

{{--Logo--}}
    <a href="/"><x-application-logo class="w-32 ml-4 md:mt-3 flex flex-row justify-start items-start"/></a>

{{--Search bar with large screen and meduim screen--}}
    <div class=" max-sm:hidden flex flex-row justify-center items-center w-[60%] mt-2 ">
        <form action="/search" method="get" class="w-full flex flex-row justify-center items-center">
            <div class="relative text-gray-600 items-center w-3/4 ">
                <input type="text" name="q" value="{{ old('q') }}" class="w-[90%] rounded-l-full bg-white/10 border border-white/30 h-10 text-sm focus:outline-none" placeholder="Search">
                <button type="submit" class="absolute top-0  mr-4 bg-white/30 rounded-r-full h-10 px-4 text-white">
                    <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>

{{--end Search bar with large screen and meduim screen--}}

    <div x-data="{show: false}" class="flex flex-row justify-end items-center  mt-2 text-blue-200 text-sm  w-56 mr-4 md:w-60 max-sm: max-sm:w-3/4">
        {{--Search bar with small screen--}}
        <div class="hidden max-sm:flex justify-center items-center w-[60%]">
            <form x-show="show" x-transition action="" method="get" class="absolute mt-40  w-[60%] ">
                <div class="relative text-gray-600 items-center w-full ">
                    <input type="text" class="w-full rounded-l-full bg-gray-800 border border-white/30 h-10 text-sm focus:outline-none" placeholder="Search">
                    <button type="submit" class="absolute top-0  mr-4 bg-gray-500 rounded-r-full h-10 px-4 text-white">
                        <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center items-center w-full">
            <button  class=" h-10  text-white hidden max-sm:flex " x-on:click="show =! show" >
                <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
            </svg>
            </button>
{{--end Search bar with small screen--}}

            @guest
                <x-nav-link href="{{ route('login') }}" :active="request()->is(route('login'))" class="max-sm:text-sm text-lg">Login</x-nav-link>

                <x-nav-link href="{{ route('register') }}" :active="request()->is(route('register'))" class="max-sm:text-sm text-lg">Sing Up</x-nav-link>
            @endguest
        </div>



        @auth
            <div class="flex ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center w-9 h-9 rounded-full transition ease-in-out duration-150">
                           <img src="{{ asset('storage/'. auth()->user()->user_image) }}" class="rounded-full w-9 h-9 " alt="">
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="/channel/{{auth()->user()->channel_slug}}">
                            {{ __('Your Channel') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @endauth
    </div>
</div>
<div class="mt-20 h-[100vh] border-r border-r-white/10 w-20">
    <nav class="flex flex-col justify-center items-center w-20 gap-8 ">
        <x-nav-link href="/" class="text-xs flex-col text-white">
            <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 495.398 495.398" xml:space="preserve" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"/> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"/> </g> </g> </g> </g>
                                </svg>
            Home
        </x-nav-link>
        <x-nav-link href="{{ route('createVideo') }}" class="text-xs flex-col text-white">
            <svg fill="#ffffff" width="25px" height="25px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" stroke="#ffffff">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="3.4560000000000004"/>

                <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-768" y="-64" width="1280" height="800" style="fill:none;"/> <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g> <g id="H1"> </g> <g id="H2"> </g> <g id="H3"> </g> <g id="list-ul"> </g> <g id="hamburger-1"> </g> <g id="hamburger-2"> </g> <g id="list-ol"> </g> <g id="list-task"> </g> <g id="trash"> </g> <g id="vertical-menu"> </g> <g id="horizontal-menu"> </g> <g id="sidebar-2"> </g> <g id="Pen"> </g> <g id="Pen1" serif:id="Pen"> </g> <g id="clock"> </g> <g id="external-link"> </g> <g id="hr"> </g> <g id="info"> </g> <g id="warning"> </g> <g id="plus-circle"> <path d="M16.118,29.968l13.754,0l0,-13.747l3.961,0l0,13.747l14.239,0l0,3.961l-14.239,0l0,14.246l-3.961,0l0,-14.246l-13.754,0l0,-3.961Z"/> <path d="M32.142,56.083c6.179,-0.059 12.297,-2.619 16.696,-6.966c5.225,-5.164 7.916,-12.803 6.978,-20.096c-1.609,-12.499 -11.883,-20.98 -23.828,-20.98c-9.075,0 -17.896,5.677 -21.765,13.909c-2.961,6.302 -2.967,13.911 0,20.225c3.842,8.174 12.517,13.821 21.61,13.908c0.103,0.001 0.206,0.001 0.309,0Zm-0.283,-4.003c-9.23,-0.089 -17.841,-7.227 -19.553,-16.378c-1.208,-6.452 1.071,-13.433 5.818,-18.015c5.543,-5.35 14.253,-7.143 21.496,-4.11c6.481,2.714 11.331,9.014 12.225,15.955c0.766,5.949 -1.369,12.184 -5.565,16.48c-3.68,3.767 -8.841,6.016 -14.164,6.068c-0.085,0 -0.171,0 -0.257,0Z" style="fill-rule:nonzero;"/> </g> <g id="minus-circle"> </g> <g id="vue"> </g> <g id="cog"> </g> <g id="logo"> </g> <g id="radio-check"> </g> <g id="eye-slash"> </g> <g id="eye"> </g> <g id="toggle-off"> </g> <g id="shredder"> </g> <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"> </g> <g id="react"> </g> <g id="check-selected"> </g> <g id="turn-off"> </g> <g id="code-block"> </g> <g id="user"> </g> <g id="coffee-bean"> </g> <g id="coffee-beans"> <g id="coffee-bean1" serif:id="coffee-bean"> </g> </g> <g id="coffee-bean-filled"> </g> <g id="coffee-beans-filled"> <g id="coffee-bean2" serif:id="coffee-bean"> </g> </g> <g id="clipboard"> </g> <g id="clipboard-paste"> </g> <g id="clipboard-copy"> </g> <g id="Layer1"> </g> </g> </g>
            </svg>
             Upload video
        </x-nav-link>

    </nav>
</div>

