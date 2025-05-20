<x-appadmin-layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Messages from Users</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            @if($messages->isEmpty())
                <p class="text-gray-600">No messages yet.</p>
            @else
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">User</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Message</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $message->user->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ $message->message }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{ $message->created_at->format('M d, Y h:i A') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-appadmin-layout>