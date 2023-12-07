<!-- layouts/menu.blade.php -->
<header class="w-full h-20 md:h-28 flex items-center justify-between bg-gradient-to-r from-purple-500 to-pink-500 md:px-10">
    <!-- Desktop Menu -->
    <div class="hidden lg:flex md:text-2xl font-bold text-white text-base md:text-2xl sm:text-sm px-10" data-test="your-data-value">
        React Meetups
    </div>

    <!-- big screen Menu -->
    <nav class="hidden lg:flex">
        <ul class="flex list-none items-baseline">
            <li class="ml-12">
                <a href="{{ url('/') }}" class="no-underline text-lg text-pink-300 hover:text-pink-500 hover:text-white active:text-white text-base md:text-base sm:text-sm">All Meetups</a>
            </li>
            <li class="ml-12">
                <a href="{{ url('/new-meetup') }}" class="no-underline text-lg text-pink-300 hover:text-pink-500 hover:text-white active:text-white text-base md:text-base sm:text-sm">Add New Meetup</a>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
    </nav>

    <!-- For the mobile screen -->
    <div class=" sm:flex flex-col absolute top-0 right-0">
        <div class="m-1 font-bold text-xs text-white " data-test="your-data-value">
            React <br />
            {{ __("Meetups") }}
        </div>
        <div class="w-8 h-2 m-1 bg-white right-0 ">
            <a href="{{ url('/') }}" class="text-transparent">aaaa</a>
        </div>
        <div class="w-8 h-2 m-1 bg-white right-0">
            <a href="{{ url('/new-meetup') }}" class="text-transparent">aaaa</a>
        </div>
    </div>
</header>

<style>
  @media (max-width: 1023px) {
    /* Styles for screens with a width less than or equal to 1023 pixels */
    .sm\:flex {
       display: flex;
    }
  }

  @media (min-width: 1023px) {
    /* Styles for screens with a width less than or equal to 1023 pixels */
    .sm\:flex {
       display: none;
    }
  }
  
</style>
