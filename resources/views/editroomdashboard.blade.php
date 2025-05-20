<x-appadmin-layout>
    <div class="max-w-4xl mx-auto mt-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700">Edit Room</h2>
            
            <form method="POST" class="mt-6" action="{{ route('rooms.update', $room->id) }}" >
                @csrf
                @method('PUT')

                <!-- Room Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Room Name</label>
                    <input type="text" name="name" id="name" value="{{ $room->name }}"  required
                           class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Room Capacity -->
                <div class="mb-4">
                    <label for="capacity" class="block text-gray-700">Capacity</label>
                    <input type="number" name="capacity" id="capacity" value="{{ $room->capacity }}" required
                           class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700">price</label>
                    <input type="number" name="price" id="price" value="{{ $room->price }}" required
                           class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" 
                            class="px-6 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none">
                        Update Room
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-appadmin-layout>