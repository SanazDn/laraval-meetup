<!-- resources/views/meetup-list.blade.php -->

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-x-0 gap-y-0 items-center justify-center">
    @foreach ($meetups as $meetup)
        <div class="card mb-2 sm:w-2/3 lg:w-1/2 xl:w-1/3 mx-auto my-auto border-2 border-solid  rounded-lg">

            <div class="w-full h-64  overflow-hidden">
                <img src="{{ $meetup['image'] }}" alt="{{ $meetup['title'] }}" class="w-full h-full object-cover mb-4">
            </div>

            <div class="p-4 text-center">
    <h2 class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-bold mb-2">{{ $meetup['title'] }}</h2>
    <p class="text-gray-600 mb-2 text-xs sm:text-sm md:text-sm lg:text-base xl:text-lg">{{ $meetup['address'] }}</p>
    <p class="text-gray-800 text-xs sm:text-sm md:text-sm lg:text-base xl:text-lg mb-1">{{ $meetup['description'] }}</p>
</div>



<div class="p-4 text-center">
    <button class="mb-2  md:w-40 md:h-8 sm:w-24 sm:h-5 font-inherit cursor-pointer text-pink-700 text-xs sm:text-sm md:text-sm lg:text-base xl:text-lg border border-pink-700 bg-transparent px-2 py-1 rounded-md sm:px-0 sm:py-0 hover:bg-pink-200">
        Show Details
    </button>
</div>



        </div>
    @endforeach
</div>
