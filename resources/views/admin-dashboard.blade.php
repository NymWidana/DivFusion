<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div x-data="{ open: false }">
    <div class="flex flex-col lg:flex-row min-h-screen">
      <!-- Sidebar -->
      <aside :class="{ 'translate-x-0': open, '-translate-x-full': !open }" class="bg-white dark:bg-gray-800 shadow-lg transition-transform duration-300 lg:w-64 w-full lg:translate-x-0 fixed lg:relative top-0">
        <div class="p-6">
          <ul>
            <li class="mb-4">
              <a href="{{ route('admin.dashboard', ['option' => 'user-overview']) }}" class="text-gray-900 dark:text-gray-100"
                ><i class="fas fa-user"></i> User Overview</a
              >
            </li>
            <li class="mb-4">
              <a
                href="{{ route('admin.dashboard', ['option' => 'orders-management']) }}"
                class="text-gray-900 dark:text-gray-100"
                ><i class="fas fa-box"></i> Order Management</a
              >
            </li>
            <li class="mb-4">
              <a
                href="{{ route('admin.dashboard', ['option' => 'customization-options']) }}"
                class="text-gray-900 dark:text-gray-100"
                ><i class="fas fa-cogs"></i> Customization Options</a
              >
            </li>
            <li class="mb-4">
              <a
                href="{{ route('admin.dashboard', ['option' => 'support-section']) }}"
                class="text-gray-900 dark:text-gray-100"
                ><i class="fas fa-life-ring"></i> Support Section</a
              >
            </li>
            <li class="mb-4">
              <a href="{{ route('admin.dashboard', ['option' => 'analytics']) }}" class="text-gray-900 dark:text-gray-100"
                ><i class="fas fa-chart-line"></i> Analytics</a
              >
            </li>
          </ul>
          <button @click="open = !open" class="lg:hidden mb-4 px-4 py-2 bg-blue-900 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-900">
                    <i class="fas fa-times"></i>
        </button>
        </div>
      </aside>
      <!-- Main Content -->
      <main class="flex-1 p-6">
        <button @click="open = !open" class="lg:hidden mb-4 px-4 py-2 bg-blue-900 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-900">
                    <i class="fas fa-bars"></i>
        </button>
            @role("admin")
    <div><a href="/dashboard/orders-management" class=" px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 text-center">back</a></div>
    @endrole
        @isset ($option)
        @if ($option == "user-overview")
            <x-dashboard-user-overview>
              <x-slot:username>
                {{ $user->name }}
            </x-slot:username>
              <x-slot:order_finished>
                Order completed : {{ $orders->filter(function ($order) { return $order['status'] === 'completed'; })->count() }}
              </x-slot:order_finished>
              <x-slot:order_created>
                Order created : {{ $orders->filter(function ($order) { return $order['status'] === 'created'; })->count() }}
              </x-slot:order_created>
              <x-slot:notification>
                you have 0 notification
              </x-slot:notification>
            </x-dashboard-user-overview>
        @elseif ($option == "orders-management")
        @role("admin")
            <x-admin-orders-management>
                <div class="container mx-auto p-4">
                    <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100">All Orders</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Order ID</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Phone Number</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Email</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Product Name</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Price</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Order Date</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Status</th>
                                    <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-left text-gray-600 dark:text-gray-400">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->id }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->user->name }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->orderer_phone_number }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->user->email }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->products->first()->title }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->total_amount }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->created_at }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">{{ $order->status }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-gray-100">
                                        <a href="{{ route('orders.manage', $order->id) }}" class="text-blue-500 hover:text-blue-700">Manage</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </x-admin-orders-management>
            @role("customer")
            <x-dashboard-orders-management>
              <x-slot:orders>
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        @foreach ($orders as $order)
                            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <div class="px-5 pb-5 pt-5">
                                    <a href="#">
                                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                            <i class="fas fa-box"></i> {{ $order->products->first()->title }}
                                        </h5>
                                    </a>
                                    <div class="mt-2">
                                        <p class="text-gray-700 dark:text-gray-300">
                                            <i class="fas fa-user"></i> <strong>Ordered by:</strong> {{ $order->orderer_name }}
                                        </p>
                                        <p class="text-gray-700 dark:text-gray-300">
                                            <i class="fas fa-phone"></i> <strong>Phone:</strong> {{ $order->orderer_phone_number }}
                                        </p>
                                        <p class="text-gray-700 dark:text-gray-300">
                                            <i class="fas fa-info-circle"></i> <strong>Status:</strong> {{ $order->status }}
                                        </p>
                                        <p class="text-gray-700 dark:text-gray-300">
                                            <i class="fas fa-calendar-alt"></i> <strong>Placed on:</strong> {{ $order->created_at->format('d M Y, H:i') }}
                                        </p>
                                        <p class="text-gray-700 dark:text-gray-300">
                                            <i class="fas fa-clock"></i> <strong>Last updated:</strong> {{ $order->updated_at->format('d M Y, H:i') }}
                                        </p>
                                    </div>
                                    <div class="mt-4 flex flex-col space-y-2">
                                        <a href="https://wa.me/087758702901" target="_blank" class="w-full text-center px-3 py-1.5 bg-blue-400 hover:bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            <i class="fas fa-comments"></i> Consult
                                        </a>
                                        <div class="flex space-x-2">
                                            <a href="{{ route('orders.edit', $order->id) }}" class="w-full px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400 text-center">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('orders.destroy', $order) }}" method="POST" class="w-full">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="w-full px-3 py-1.5 bg-red-400 hover:bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-red-400">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
              </x-slot:orders>
            </x-dashboard-orders-management>
            @endrole
        @elseif ($option == "customization-options")
            <x-dashboard-customization-options>
            </x-dashboard-customization-options>
        @elseif ($option == "support-section")
            <x-dashboard-support-section>
            </x-dashboard-support-section>
        @elseif ($option == "analytics")
            <x-dashboard-analytics>
            </x-dashboard-analytics>
            @endif
        @else
            <x-dashboard-user-overview>
              <x-slot:username>
                {{ $user->name }}
            </x-slot:username>
              <x-slot:order_finished>
                Order completed : {{ $orders->filter(function ($order) { return $order['status'] === 'completed'; })->count() }}
              </x-slot:order_finished>
              <x-slot:order_created>
                Order created : {{ $orders->filter(function ($order) { return $order['status'] === 'created'; })->count() }}
              </x-slot:order_created>
              <x-slot:notification>
                you have 0 notification
              </x-slot:notification>
            </x-dashboard-user-overview>
            @endif
        @endisset


      </main>
    </div>
    </div>

</x-app-layout>
