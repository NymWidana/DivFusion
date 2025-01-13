<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update your order info') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-6 py-12">
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif
        <div class="gap-8">
            <!-- Order Form -->
            <div>
                <div class="container mx-auto p-4">
                    <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">Manage Order</h1>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                        <form action="{{ route('orders.savemanaged', $order->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="product_name" class="block text-gray-700 dark:text-gray-300">Product Name</label>
                                <div class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-900 dark:text-gray-100">{{ $order->products->first()->title }} </div>
                            </div>
                            <div class="mb-4">
                                <label for="customer_name" class="block text-gray-700 dark:text-gray-300">Customer Name</label>
                                <input type="text" id="customer_name" name="customer_name" value="{{ $order->user->name }}" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
                            </div>
                            <div class="mb-4">
                                <label for="customer_phone_number" class="block text-gray-700 dark:text-gray-300">Phone Number</label>
                                <input type="text" id="customer_phone_number" name="customer_phone_number" value="{{ $order->products->first()->title }}" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
                            </div>
                            <div class="mb-4">
                                <label for="price" class="block text-gray-700 dark:text-gray-300">Price</label>
                                <input type="text" id="price" name="price" value="{{ $order->total_amount }}" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
                            </div>
                            <div class="mb-4">
                                <label for="order_date" class="block text-gray-700 dark:text-gray-300">Order Date</label>
                                <input type="text" id="order_date" name="order_date" value="{{ $order->created_at }}" class="w-full p-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100" disabled>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Update Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
