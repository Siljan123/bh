<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(session('success'))
                <div class="alert alert-success p-4 bg-green-500 text-white rounded-md mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger p-4 bg-red-500 text-white rounded-md mb-4">
                    @foreach($errors->all() as $error)
                        <p class="text-white">{{ $error }}</p>
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
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('storage/' . $room->image) }}" alt="Room Image" class="w-full h-56 object-cover">
                            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-black to-transparent opacity-50"></div>
                        </div>
                        
                        <!-- Room Details -->
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 truncate">{{$room->name}}</h2>
                            <p class="text-gray-600 mt-2">{{$room->capacity}} capacity</p>
                            <p class="text-gray-600 mt-2">${{$room->price}} per month</p>

                            <!-- Book Now Button -->
                           
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
       
         <div class="mt-12 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Message the Admin</h2>

                <form action="{{ route('messages.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
                    @csrf
                    <div>
                        <label for="message" class="block text-gray-700 font-medium mb-2">Your Message:</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-emerald-400"
                            placeholder="Write your message here..."
                            required
                        ></textarea>
                    </div>

                    <div class="mt-4">
                        @foreach ($admins as $admin)
                            <input type="hidden" name="admin_id" value="{{ $admin->id }}">
                        @endforeach
                        <button
                            type="submit"
                            class="w-full bg-emerald-500 text-white px-4 py-2 rounded-md text-lg font-medium hover:bg-emerald-700 transition-colors duration-300"
                        >
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>