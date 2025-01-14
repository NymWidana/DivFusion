<div>
    <!-- User Overview Section -->
    <section id="user-overview" class="bg-gray-100 dark:bg-gray-900 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100">
                User Overview
            </h2>
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-user-circle w-16 h-16 text-blue-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                            {{ $username }}
                        </h3>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 flex items-center">
                            <i class="fas fa-chart-bar mr-2"></i> Usage Statistics
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400">
                            <i class="fas fa-check-circle mr-2"></i> {{ $order_finished }}
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">
                            <i class="fas fa-plus-circle mr-2"></i> {{ $order_created }}
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-gray-100 flex items-center">
                            <i class="fas fa-bell mr-2"></i> Notifications
                        </h4>
                        <p class="text-gray-600 dark:text-gray-400">
                            <i class="fas fa-envelope mr-2"></i> {{ $notification }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
