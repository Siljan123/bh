<x-appadmin-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if(session('success'))
            <div class="alert alert-success text-green-900 ">
                {{ session('success') }}
            </div>
            @endif



            <div class="max-h-96 overflow-y-auto">

            <table class="w-full text-sm text-left  text-gray-500 dark:text-gray-400">
                <thead class="text-xs uppercase bg-emerald-400 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="text-center px-6 py-3  text-white">
                            Name
                        </th>
                        <th scope="col" class="text-center px-6 py-3  text-white">
                            Email
                        </th>
                        <th scope="col" class="text-center px-6 py-3 text-white">
                            Asign Room
                        </th>
                        <th scope="col" class="text-center px-6 py-3  text-white">
                            Date of Booking
                        </th>
                        <th scope="col" class="text-center px-6 py-3 rounded-e-lg text-white">
                            Status
                        </th>
                        <th scope="col" class="text-center px-6 py-3 rounded-lg text-white bg-emerald-400">
                            Action
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
                        <td class="px-6 py-4 text-center">
                            {{ $user->status }}
                        </td>
                        
                        

                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-sm text-gray-600 dark:text-gray-300">
                                    <form action="{{ route('users.updateStatus', $user->id) }}" method="POST">
                                        @csrf
                                        <div class="flex items-center space-x-2">
                                            <select name="status" class="border border-gray-300 dark:border-gray-600 rounded px-3 py-2 text-sm">
                                                <option value="Paid" {{ $user->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                                                <option value="Not Paid" {{ $user->status == 'Not Paid' ? 'selected' : '' }}>Not Paid</option>
                                            </select>
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white px-4 py-2 rounded text-sm transition">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-appadmin-layout>