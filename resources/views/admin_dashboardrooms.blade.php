<x-appadmin-layout>
    <x-slot name="header">
        @if(session('success'))
        <div id="floating-notification" class="fixed  bg-green-500 text-white p-4 rounded-lg shadow-lg transition-transform transform translate-x-16">
            <p>{{ session('success') }}</p>
        </div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="max-h-screen overflow-y-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-800">
                        <tr>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center  text-gray-500 dark:text-gray-400">
                                image
                            </th>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center text-gray-500 dark:text-gray-400">
                                Room Details
                            </th>

                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-center text-gray-500 dark:text-gray-400">

                                Capacity


                            </th>
                            <th scope="col" class="py-3.5 px-4 text-sm font-normal text-center text-gray-500 dark:text-gray-400">
                                price
                            </th>
                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-center text-gray-500 dark:text-gray-400">

                                status


                            </th>
                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-center text-gray-500 dark:text-gray-400">

                                Guest


                            </th>
                            <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                Number Of Bookings
                            </th>

                            <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <button class="flex items-center gap-x-2">
                                    <span>Action</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                    </svg>
                                </button>
                            </th>
                        </tr>
                    </thead>
                    @foreach($rooms as $room)
                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        <tr>
                            <td class="px-2 py-4 text-lg font-medium text-gray-700 ">

                                <img src="{{ asset('storage/' . $room->image) }}" alt="NO image" style="width: 2in; height: 2in" class="text-center bg-gray-300 rounded-sm">

                            </td>
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">

                                <h2 class="font-medium text-gray-800 dark:text-white ">{{$room->name}}</h2>


                            </td>
                            <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">

                                {{ $room->capacity }}
                            </td>

                            <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">

                                $&nbsp;{{$room->price}}

                            </td>
                            <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">

                                <h2 class="text-sm font-normal text-emerald-500">
                                    @if($room->status == 1)
                                    {{ 'Available' }}
                                    @else
                                    <h4 class="text-red-700">{{ 'Unavailable' }}</h4>

                                    @endif
                                </h2>

                            </td>

                            <td class="px-12 py-4 text-sm font-medium text text-center text-gray-700 whitespace-nowrap">


                                @foreach($bookings as $booking)
                                <!-- Check if the booking is for the current room -->
                                @if($booking->room_id == $room->id)
                                <!-- Find the associated user for the current booking -->
                                @php
                                $user = App\Models\User::find($booking->user_id);
                                @endphp

                                <!-- Display the user's name who booked the room -->
                                <h2 class="text-sm font-normal text-emerald-500">{{ $user->name }}</h2>
                                @endif
                                @endforeach

                            </td>
                            <td class="px-12 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">

                                {{$room->bookings}}

                            </td>

                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex items-center gap-x-6">
                                    <!-- Delete Button -->
                                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this room?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>

                                    <!-- Edit Button -->

                                    <a href="{{ route('update.forms', $room->id) }}" class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>

                                </div>
                            </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-appadmin-layout>