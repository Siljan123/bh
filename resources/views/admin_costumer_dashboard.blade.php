<x-appadmin-layout>
    <x-slot name="header">

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="text-center px-6 py-3 rounded-s-lg">
                            Name
                        </th>
                        <th scope="col" class="text-center px-6 py-3 rounded-s-lg">
                            Email
                        </th>
                        <th scope="col" class="text-center px-6 py-3">
                            Asign Room
                        </th>
                        <th scope="col" class="text-center px-6 py-3 rounded-e-lg">
                            Date of Booking
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    @php
                    // Fetch bookings for the current user
                    $userBookings = $bookings->where('user_id', $user->id);
                    @endphp

                    @foreach($userBookings as $booking)
                    <tr class="bg-white dark:bg-gray-800">
                        <!-- User name -->
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </td>

                        <!-- User email -->
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">
                            {{ $user->email }}
                        </td>

                        <!-- Room name -->
                        <td class="px-6 py-4 text-center">
                            @if($booking->room)
                            {{ $booking->room->name }}
                            @else
                            No Room Assigned
                            @endif
                        </td>

                        <!-- Booking date -->
                        <td class="px-6 py-4 text-center">
                            {{ $booking->created_at->format('m-d-Y') }}
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-appadmin-layout>