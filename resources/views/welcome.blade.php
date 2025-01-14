<x-app-layout>
<x-slot name="header">
    <div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-4 sm:p-6 lg:p-8">
        <h1 class="mb-4 text-center text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 text-3xl sm:text-4xl md:text-5xl lg:text-6xl">Div Fusion</span><br>Simplifying Your Digital Journey
        </h1>
        <p class="mb-6 text-center text-base sm:text-lg md:text-xl lg:text-2xl font-normal text-gray-500 dark:text-gray-400 sm:px-8 md:px-16 lg:px-24 xl:px-48">
            Welcome to DivFusion, where we transform complexity into simplicity. Our mission is to provide you with seamless and efficient web ordering solutions that make your life easier. Whether you're looking for top-notch services, transparent pricing, or reliable support, we've got you covered. Join us and experience the ease of managing your web orders with just a few clicks.
        </p>
        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 sm:px-5 sm:py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
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
            <i class="w-12 h-12 text-blue-500 fas fa-sync-alt"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Revision Guarantee</h3>
            <p class="text-gray-600 dark:text-gray-400">We understand that every project has unique needs and may require adjustments. That's why we offer a revision guarantee to ensure the final result meets your expectations. With this guarantee, you can rest assured that we will work with you until you are completely satisfied with the outcome.</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-center mb-4">
            <i class="w-12 h-12 text-blue-500 fas fa-book-open"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Free Guide</h3>
            <p class="text-gray-600 dark:text-gray-400">We don't just provide website creation services; we also offer a free guide to help you understand and manage your website better. This guide includes practical steps and useful tips, so you can maximize your website's potential without any additional costs.</p>
        </div>
        <!-- Feature 3 -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <div class="flex items-center justify-center mb-4">
            <i class="w-12 h-12 text-blue-500 fas fa-headset"></i>
            </div>
            <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-gray-100">Post-Project Support</h3>
            <p class="text-gray-600 dark:text-gray-400"> We believe that support doesn't end when the project is completed. We provide post-project support to help you with technical issues, offer advice, and ensure your website continues to run smoothly. With this support, you can be confident that we are always ready to assist you whenever you need it.</p>
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

<div class="container mx-auto p-4">
  <h1 class="text-2xl font-bold mb-4 dark:text-white">Create Review</h1>
  <form
    action="{{ route('reviews.store') }}"
    method="POST"
    class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md"
  >
    @csrf
    <div class="mb-4">
      <label
        for="content"
        class="block text-sm font-medium text-gray-700 dark:text-gray-300"
        >Review</label
      >
      <textarea
        id="content"
        name="content"
        rows="4"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-100"
      ></textarea>
    </div>
    <div class="flex justify-end">
      <button
        type="submit"
        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-600"
      >
        Submit
      </button>
    </div>
  </form>
</div>

  
    <!-- Testimonial Section -->
<section class="bg-gray-100 dark:bg-gray-900 py-12 pb-16">
  <div class="container mx-auto px-6">
    <h2
      class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100"
    >
      What Our Customers Say
    </h2>
    <div class="overflow-x-auto pb-4">
      <div class="flex space-x-8">
        @foreach ($reviews as $review)
        <div
          class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg flex-shrink-0 w-80"
        >
          <div class="flex items-center mb-4">
            <div>
              <h3
                class="text-xl font-semibold text-gray-900 dark:text-gray-100"
              >
                {{ $review->user->name }}
              </h3>
            </div>
          </div>
          <p class="text-gray-600 dark:text-gray-400">"{{ $review->text }}"</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>




</div>
</x-app-layout>
