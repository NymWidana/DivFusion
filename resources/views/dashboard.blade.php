<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Main Content -->

    <!-- Sidebar and Main Content -->
    <div>
    <div class="flex min-h-screen">
      <!-- Sidebar -->
      <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg">
        <div class="p-6">
          <ul>
            <li class="mb-4">
              <a href="{{ route('dashboard.option', ['option' => 'user-overview']) }}" class="text-gray-900 dark:text-gray-100"
                >User Overview</a
              >
            </li>
            <li class="mb-4">
              <a
                href="{{ route('dashboard.option', ['option' => 'order-management']) }}"
                class="text-gray-900 dark:text-gray-100"
                >Order Management</a
              >
            </li>
            <li class="mb-4">
              <a
                href="{{ route('dashboard.option', ['option' => 'customization-options']) }}"
                class="text-gray-900 dark:text-gray-100"
                >Customization Options</a
              >
            </li>
            <li class="mb-4">
              <a
                href="{{ route('dashboard.option', ['option' => 'support-section']) }}"
                class="text-gray-900 dark:text-gray-100"
                >Support Section</a
              >
            </li>
            <li class="mb-4">
              <a href="{{ route('dashboard.option', ['option' => 'analytics']) }}" class="text-gray-900 dark:text-gray-100"
                >Analytics</a
              >
            </li>
          </ul>
        </div>
      </aside>
      <!-- Main Content -->
      <main class="flex-1 p-6">
        @isset ($option)
        @if ($option == "user-overview")
            <x-dashboard-user-overview>
              <x-slot:username>
                {{ $user->name }}
            </x-slot:username>
              <x-slot:order_finished>
                Order finished : {{ $orders->filter(function ($order) { return $order['status'] === 'finnish'; })->count() }}
              </x-slot:order_finished>
              <x-slot:order_created>
                Order created : {{ $orders->filter(function ($order) { return $order['status'] === 'created'; })->count() }}
              </x-slot:order_created>
              <x-slot:notification>
                you have 0 notification
              </x-slot:notification>
            </x-dashboard-user-overview>
        @elseif ($option == "order-management")
            <x-dashboard-order-management>
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
                                        <button class="w-full px-3 py-1.5 bg-blue-400 hover:bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                            <i class="fas fa-comments"></i> Consult
                                        </button>
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
            </x-dashboard-order-management>
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
                Order finished : {{ $orders->filter(function ($order) { return $order['status'] === 'finnish'; })->count() }}
              </x-slot:order_finished>
              <x-slot:order_created>
                Order created : {{ $orders->filter(function ($order) { return $order['status'] === 'created'; })->count() }}
              </x-slot:order_created>
              <x-slot:notification>
                you have 0 notification
              </x-slot:notification>
            </x-dashboard-user-overview>
        @endisset

      </main>
    </div>
    </div>

</x-app-layout>
