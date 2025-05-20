<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Bookings') }}
         
        
        </h2>
    </x-slot>
    <div class="p-4 px-12">
        <div class="p-4 dark:border-gray-700 mt-14">
        @if(session('success'))
                <div class="alert alert-success p-4 bg-green-500 text-white rounded-md mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <div class="max-h-96 overflow-y-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-emerald-500 dark:bg-blue-900 dark:text-gray-300">
                        <tr>
                            <th scope="col" class="text-center text-white px-6 py-3 rounded-s-lg">
                                Room
                            </th>
                            <th scope="col" class="text-center text-white px-6 py-3">
                                Date of Booking
                            </th>
                            <th scope="col" class="text-center px-6 text-white py-3 rounded-e-lg">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $booking->room->name ?? 'Not Assigned' }}
                            </td>
                            <td class="px-6 py-4 text-center text-gray-600 dark:text-gray-400">
                                {{ $booking->created_at->format('m-d-Y') }}
                            </td>
                            <td class="px-6 py-4 text-center flex justify-center">
                            <form action="{{ route('booking.cancel', $booking->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-red-100 bg-red-800 rounded-lg hover:bg-red-400">
                                        Cancel
                                    </button>
                                </form>
                                  <form action="{{ route('pay.gcash') }}" method="GET">
    <input type="hidden" name="amount" value="{{ $booking->amount ?? 50 }}">
    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
    <button type="submit" class="bg-emerald-500 text-white px-4 py-2 rounded hover:bg-emerald-700 transition">
        Pay with GCash
    </button>
</form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center px-6 py-4 text-gray-500 dark:text-gray-400">
                                No bookings found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>