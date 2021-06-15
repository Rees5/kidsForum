<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="grid grid-cols-2 gap-4 p-5 ">
        <div class="text-right">
            <h2>Date:</h2><span>14th June 2021</span>
        </div>
        <div class="text-right">
            <h2>Location:</h2><span>My Street, Area, State</span>
        </div>
        <!-- <img src="{{ URL::to('/images/children-wallpaper-7.jpg') }}"> -->
    </div>

    <div class="intro pl-10 pt-12">
        <h2 class="text-5xl pb-5">A second home on the Internet</h2>
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View More</a>
    </div>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>