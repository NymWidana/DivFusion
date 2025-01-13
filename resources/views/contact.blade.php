<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

<!-- Contact Section -->
<section class="py-12">
  <div class="container mx-auto px-6">
    <h2
      class="text-3xl font-bold text-center mb-8 text-gray-900 dark:text-gray-100"
    >
      Get to Know Us
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Contact Form -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
          Get in Touch
        </h3>
        <form action="#" method="POST">
        @csrf
          <div class="mb-4">
            <label for="name" class="block text-gray-700 dark:text-gray-300"
              >Name</label
            >
            <input
              type="text"
              id="name"
              name="name"
              class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div class="mb-4">
            <label for="email" class="block text-gray-700 dark:text-gray-300"
              >Email</label
            >
            <input
              type="email"
              id="email"
              name="email"
              class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
          </div>
          <div class="mb-4">
            <label for="message" class="block text-gray-700 dark:text-gray-300"
              >Message</label
            >
            <textarea
              id="message"
              name="message"
              rows="4"
              class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            ></textarea>
          </div>
          <button
            type="submit"
            class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
          >
            Send Message
          </button>
        </form>
      </div>
      <!-- Contact Information -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">
          Contact Information
        </h3>
        <p class="text-gray-600 dark:text-gray-400">
          Feel free to reach out to us through any of the following methods:
        </p>
        <ul class="mt-4">
          <li class="mb-2">
            <svg
              class="w-6 h-6 inline-block text-blue-500"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12h2a2 2 0 012 2v6a2 2 0 01-2 2h-6a2 2 0 01-2-2v-2"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 12H6a2 2 0 00-2 2v6a2 2 0 002 2h6a2 2 0 002-2v-2"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12V8a4 4 0 00-8 0v4"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12H8"
              ></path>
            </svg>
            <span class="ml-2 text-gray-900 dark:text-gray-100"
              >Email: widan0001@gmail.com</span
            >
          </li>
          <li class="mb-2">
            <svg
              class="w-6 h-6 inline-block text-blue-500"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 10h1l2 2h10l2-2h1"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 10v6a2 2 0 002 2h14a2 2 0 002-2v-6"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 10l1-2a2 2 0 012-2h12a2 2 0 012 2l1 2"
              ></path>
            </svg>
            <span class="ml-2 text-gray-900 dark:text-gray-100"
              >Phone: +62 ***********</span
            >
          </li>
          <li class="mb-2">
            <svg
              class="w-6 h-6 inline-block text-blue-500"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 2a10 10 0 00-10 10v4a2 2 0 002 2h16a2 2 0 002-2v-4a10 10 0 00-10-10z"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 18v2"
              ></path>
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 22h8"
              ></path>
            </svg>
            <span class="ml-2 text-gray-900 dark:text-gray-100"
              >Address: Jl. Tukad Pakerisan No.97, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80225</span
            >
          </li>
        </ul>
        <div class="mt-6">
          <iframe class="w-full h-64 rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0077814347287!2d115.22630600000001!3d-8.690808699999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2410294415595%3A0xb9b6c94ad0c08b24!2sInstitut%20Bisnis%20dan%20Teknologi%20Indonesia%20(INSTIKI)!5e0!3m2!1sid!2sid!4v1736569032722!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
</x-app-layout>
