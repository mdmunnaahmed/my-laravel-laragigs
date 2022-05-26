@extends('layout')

@section('content')
    {{-- @unless(count($listings) == 0) --}}
    <!-- Search -->
    <form action="">
        <div class="relative border-2 border-gray-100 m-4 rounded-lg">
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search Laravel Gigs..." />
            <div class="absolute top-2 right-2">
                <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                    Search
                </button>
            </div>
        </div>
    </form>

    <h4 class="title">{{ $heading }}</h4>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        <?php foreach ($listings as $listing) { ?>

        <div class="bg-gray-50 border border-gray-200 rounded p-5">
            <div class="flex">
                <img class="hidden w-48 mr-6 md:block" src="images/wonka.png" alt="" />
                <div>
                    <h3 class="text-2xl">
                        <a href=""><?php echo $listing['title']; ?></a>
                    </h3>
                    <div class="text-xl font-bold mb-4">
                        <?php echo $listing['company']; ?>
                    </div>
                    <ul class="flex">
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Laravel</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">API</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Backend</a>
                        </li>
                        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Vue</a>
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> San
                        Francisco, CA
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
    {{-- @else
        <p class="text-muted">No Listings Found</p>
    @endunless --}}
@endsection
