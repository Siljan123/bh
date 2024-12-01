<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-emerald-500 dark:bg-blue-900 dark:text-gray-300">
                    <tr>
                        <th scope="col" class="text-center text-white px-6 py-3 rounded-s-lg">
                            Name
                        </th>
                        <th scope="col" class="text-center text-white px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="text-center text-white px-6 py-3">
                            Assign Room
                        </th>
                        <th scope="col" class="text-center px-6 text-white py-3 rounded-e-lg">
                            Date of Booking
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                        @foreach($users as $user)
                            @if($booking->user_id == $user->id)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4 text-center text-gray-700 dark:text-gray-300">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if($booking->room)
                                            <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold dark:bg-green-800 dark:text-green-200">
                                                {{ $booking->room->name }}
                                            </span>
                                        @else
                                            <span class="text-gray-400 dark:text-gray-500">Not Assigned</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-400">
                                        {{ $booking->created_at->format('m-d-Y') }}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>