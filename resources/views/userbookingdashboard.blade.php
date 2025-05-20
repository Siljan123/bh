<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Room Booking
        </h2>

        @if(session('success'))
            <div class="mt-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mt-4 p-4 bg-red-100 text-red-800 rounded">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="max-h-96 overflow-y-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Room Description</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Price</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Capacity</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Status</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Bookings</th>
                                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Choose</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach($rooms as $room)
                                    <tr>
                                        <td class="px-4 py-4 text-gray-700 dark:text-gray-200">{{ $room->name }}</td>
                                        <td class="px-4 py-4 text-emerald-600 dark:text-emerald-400">$ {{ $room->price }}</td>
                                        <td class="px-4 py-4 text-gray-700 dark:text-gray-200">{{ $room->capacity }}</td>
                                        <td class="px-4 py-4">
                                            @if($room->status == 1 && $room->bookings < $room->capacity)
                                                <span class="text-green-600 dark:text-green-400">Available</span>
                                            @else
                                                <span class="text-red-600 dark:text-red-400">Unavailable</span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-gray-700 dark:text-gray-200">{{ $room->bookings }}</td>
                                        <td class="px-4 py-4">
                                            <input type="radio" name="room_id" value="{{ $room->id }}" class="text-indigo-600" {{ $room->status != 1 || $room->bookings >= $room->capacity ? 'disabled' : '' }}>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-6 rounded">
                            Book Now
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>