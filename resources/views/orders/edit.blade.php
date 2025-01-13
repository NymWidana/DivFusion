
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update your order info') }}
        </h2>
    </x-slot>
<div class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100">Edit your order info</h2>
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Order Form -->
        <div>
<form action="{{ route('orders.update', $order->id) }}" method="POST">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @csrf
    @method("PATCH")
    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-gray-300">Your Name</label>
        <input type="text" id="name" name="name" required value="{{ $order->orderer_name }}" class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error("name")
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="phone_number" class="block text-gray-700 dark:text-gray-300">Your Phone / Whatsapp Number</label>
        <input type="text" id="phone_number" name="phone_number" required value="{{ $order->orderer_phone_number }}" class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error("phone_number")
            <div class="text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4">
        <label for="message" class="block text-gray-700 dark:text-gray-300">Leave a Message</label>
        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $order->message }}</textarea>
    </div>
    <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
</form>
        </div>
        <!-- Contact Information -->
        <div>
            <h3 class="text-3xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Or Get in Touch with Us</h3>
            <p class="text-gray-600 dark:text-gray-400">Feel free to reach out to us through any of the following methods:</p>
            <ul class="mt-4">
                <li class="mb-2">
                    <svg class="w-6 h-6 inline-block text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h2a2 2 0 012 2v6a2 2 0 01-2 2h-6a2 2 0 01-2-2v-2"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12H6a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2v-2"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12V8a4 4 0 00-8 0v4"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8"></path>
                    </svg>
                    <span class="ml-2 text-gray-900 dark:text-gray-100">Email: support@divfusion.com</span>
                </li>
                <li class="mb-2">
                    <svg class="w-6 h-6 inline-block text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h1l2 2h10l2-2h1"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10v6a2 2 0 002 2h14a2 2 0 002-2v-6"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l1-2a2 2 0 012-2h12a2 2 0 012 2l1 2"></path>
                    </svg>
                    <span class="ml-2 text-gray-900 dark:text-gray-100">Phone: +1 (123) 456-7890</span>
                </li>
                <li class="mb-2">
                    <svg class="w-6 h-6 inline-block text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 00-10 10v4a2 2 0 002 2h16a2 2 0 002-2v-4a10 10 0 00-10-10z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18v2"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 22h8"></path>
                    </svg>
                    <span class="ml-2 text-gray-900 dark:text-gray-100">Address: 123 DivFusion St, City, Country</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</x-app-layout>