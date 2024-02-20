<x-app-layout :parkings="$parkings ?? []">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-3">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between">
                    <h5>Your Bookings</h5>
                    <a href="/parkings/create" class="bg-zinc-600 px-3 py-1 rounded">Create Parking</a>
                </div>
                @foreach ($parkings as $formData)
                    <div class="px-6 py-3">
                        <div class="bg-blue-100 p-4 rounded-md mb-6">
                            <h3 class="text-xl font-semibold mb-2">Parking {{ $formData["id"] }}</h3>

                            <div>
                                <strong>Vehicle Number:</strong> {{ $formData['vehicle_number'] }}
                            </div>
                            <div>
                                <strong>Mobile Number:</strong> {{ $formData['mobile'] }}
                            </div>
                            <div>
                                <strong>NIC:</strong> {{ $formData['nic'] }}
                            </div>
                            <div>
                                <strong>Slot:</strong> {{ $formData['slot'] }}
                            </div>

                            <h4 class="px-4 bg-orange-400 w-fit">{{ $formData["status"] == 1 ? "Out" : "In" }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
