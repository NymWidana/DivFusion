<x-app-layout>
    <x-slot name="header">
        <div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-4">
            <h1 class="mb-4 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Transform Complexity Into Simplicity </span><br> That is Our Mission</h1>
            <p class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Welcome to DivFusion, where we transform complexity into simplicity. Our mission is to provide you with seamless and efficient web ordering solutions that make your life easier. Whether you're looking for top-notch services, transparent pricing, or reliable support, we've got you covered. Join us and experience the ease of managing your web orders with just a few clicks.</p>
            <a href="{{ route('register') }}" class=" inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get Started
            </a>
        </div>
    </x-slot>
<div>
    <!-- Feature Section -->
    <div class="bg-gray-100 dark:bg-gray-900 py-12 pb-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100">Why Choose Us ?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-center mb-4">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Easy to Use</h3>
            <p class="text-gray-600 dark:text-gray-400">Our platform is designed to be user-friendly and intuitive, making it easy for you to manage your web orders.</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-center mb-4">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Customizable</h3>
            <p class="text-gray-600 dark:text-gray-400">Tailor your website to your specific needs with our wide range of customization options.</p>
        </div>
        <!-- Feature 3 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-center mb-4">
            <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">24/7 Support</h3>
            <p class="text-gray-600 dark:text-gray-400">Our dedicated support team is available around the clock to assist you with any issues or questions.</p>
        </div>
        </div>
    </div>
    </div>
  {{-- prroducts cards --}}
  <div class="w-full pb-16 mt-16 ">
    <h2
      class="mb-4 text-center text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl dark:text-white"
    >
      Pick Your Website Plan
    </h2>
    <p
      class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400"
    >
      Free Consultation For Every Plan
    </p>
  <div class="flex flex-col md:flex-row gap-4 justify-center items-center md:-my-px sm:ms-10">
    @foreach ($products as $product)
      <div
        class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700"
      >
        <h5 class="mb-4 text-xl font-medium text-gray-900 dark:text-gray-200">
          {{ $product->title }}
        </h5>
        <p class="text-gray-600 dark:text-gray-400">{{ $product->description }}</p>
        <div class="flex items-baseline text-gray-900 dark:text-white">
        </div>
        <ul role="list" class="space-y-5 my-7">
        @foreach ($product->features as $feature)
          <li class="flex items-center">

            <i class="{{ $feature->icon }} flex-shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500"></i> <!-- Add the icon here -->

            <span
              class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3"
              >{{ $feature->name }}</span
            >
          </li>
        @endforeach
        </ul>
        <a
        href="{{ route("orders.create")."/".$product->id }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center"
        >
          Get Started
        </a>
      </div>
    @endforeach
    </div>
  </div>

    <!-- Testimonial Section -->
    <section class="bg-gray-100 dark:bg-gray-900 py-12 pb-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100">What Our Customers Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full mr-4" src="https://via.placeholder.com/150" alt="Customer 1">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">John Doe</h3>
            </div>
            </div>
            <p class="text-gray-600 dark:text-gray-400">"DivFusion made it incredibly easy to manage our web orders. The platform is intuitive and the support team is always there to help. Highly recommended!"</p>
        </div>
        <!-- Testimonial 2 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full mr-4" src="https://via.placeholder.com/150" alt="Customer 2">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Jane Smith</h3>
            </div>
            </div>
            <p class="text-gray-600 dark:text-gray-400">"The customization options are fantastic! We were able to tailor our website exactly to our needs. DivFusion is a game-changer."</p>
        </div>
        <!-- Testimonial 3 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
            <img class="w-12 h-12 rounded-full mr-4" src="https://via.placeholder.com/150" alt="Customer 3">
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Emily Johnson</h3>
            </div>
            </div>
            <p class="text-gray-600 dark:text-gray-400">"I love how easy it is to use DivFusion. The platform is user-friendly and the support team is always available to assist. It's been a great experience!"</p>
        </div>
        </div>
    </div>
    </section>

</div>
</x-app-layout>
