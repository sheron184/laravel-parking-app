<x-app-layout :parkings="$parkings ?? []">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 rounded-lg shadow-md w-[360px]" style="width: 460px;">
                <h5 class="text-2xl font-semibold mb-6 dark:text-gray-200">Vehicle Registration</h5>

                <form action="/parkings/store" method="POST" class="">
                    @csrf
                    <!-- Vehicle Number -->
                    <div class="mb-4">
                        <label for="vehicle_number" class="block text-sm font-medium text-gray-600">Vehicle
                            Number</label>
                        <input style="width: 360px;" type="text" id="vehicle_number" name="vehicle_number"
                            class="mt-1 p-2 border w-1/2 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    </div>

                    <!-- Mobile -->
                    <div class="mb-4">
                        <label for="mobile" class="block text-sm font-medium text-gray-600">Mobile Number</label>
                        <input style="width: 360px;" type="text" id="mobile" name="mobile"
                            class="mt-1 p-2 border w-[360px] rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    </div>

                    <!-- NIC -->
                    <div class="mb-4">
                        <label for="nic" class="block text-sm font-medium text-gray-600">NIC (National ID
                            Card)</label>
                        <input style="width: 360px;" type="text" id="nic" name="nic"
                            class="mt-1 p-2  border w-[360px] rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    </div>

                    <!-- Slot -->
                    <div class="mb-6">
                        <label for="slot" class="block text-sm font-medium text-gray-600">Slot</label>
                        <input style="width: 360px;" type="text" id="slot" name="slot"
                            class="mt-1 p-2  border w-[360px] rounded-md focus:outline-none focus:ring focus:border-blue-300">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="dark:bg-zinc-600 text-white p-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                        Submit
                    </button>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>
