<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<!-- Services Section -->
<section class="py-12">
  <div class="container mx-auto px-6">
    <h2
      class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100"
    >
      Our Services
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach ($services as $service)
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
    <div class="flex items-center mb-4">
        <i class="{{ $service->icon }} text-gray-900 dark:text-gray-100"></i> <!-- Add the icon here -->
        <div class="ml-4">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                {{ $service->name }}
            </h3>
            <p class="text-gray-600 dark:text-gray-400">
                {{ $service->description }}
            </p>
        </div>
    </div>
</div>
      @endforeach
    </div>
  </div>
</section>
</div>
</x-app-layout>
