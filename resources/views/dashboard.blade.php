<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p class="text-red-400">{{ $error }}</p>
                @endforeach
            </div>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <!-- Booking Cards -->

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach($rooms as $room)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <div>

                        <div class="flex items-center gap-x-2">
                            <img src="{{ asset('storage/' . $room->image) }}" alt="NO image" style="height: 2in" class="text-center w-full bg-gray-300 rounded-sm">

                        </div>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800">{{$room->name}}</h2>
                    <p class="text-gray-600 mt-2">${{$room->price}}</p>

                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-app-layout>