<div>
        <!-- Order Management Section -->
        <section
          id="order-management"
          class="bg-gray-100 dark:bg-gray-900 py-12"
        >
          <div class="container mx-auto px-6">
            <h2
              class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100"
            >
              Order Management
            </h2>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
    <div class="flex items-center mb-4">
        <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div class="ml-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Manage Orders</h3>
            <p class="text-gray-600 dark:text-gray-400">View and manage your orders efficiently.</p>
        </div>
    </div>
    <div class="mb-4">{{ $orders }}</div>
    <div class="ml-auto inline-block mb-4">
        <a href="{{ route('orders.create') }}" class="inline-block px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            <i class="fas fa-plus"></i> Create Order
        </a>
    </div>
      </div>
    </div>
  </div>
</section>

</div>
