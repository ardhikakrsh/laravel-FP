<nav class="bg-black" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-12 w-12" src="assets/img/logo2.png" alt="Sole City Kicks">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/" class="{{ request()->is('/') ? 'bg-indigo-700' : 'text-white hover:bg-indigo-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Home</a>
              <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'bg-indigo-700' : 'text-white hover:bg-indigo-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">About</a>
              <a href="{{ route('product') }}" class="{{ request()->is('product') ? 'bg-indigo-700' : 'text-white hover:bg-indigo-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Product</a>
              <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'bg-indigo-700' : 'text-white hover:bg-indigo-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact</a>
              <a href="{{ route('review') }}" class="{{ request()->is('review') ? 'bg-indigo-700' : 'text-white hover:bg-indigo-800 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Review</a>
          </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            @auth
            <a href="{{ route('logout') }}"  class="text-white hover:bg-indigo-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</a>
            @else
            <a href="{{ route('register') }}"  class="text-white hover:bg-indigo-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
            <a href="{{ route('login') }}"  class="text-white hover:bg-indigo-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
            @endauth
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button"   @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{'hidden': isOpen, 'block': !isOpen }"
            class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{'blok': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="{{ request()->is('/') ? 'bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Home</a>
        <a href="/posts" class="{{ request()->is('posts') ? 'bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">About</a>
        <a href={{ '/product' }} class="{{ request()->is('product') ? 'bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Product</a>
        <a href={{ '/contact' }} class="{{ request()->is('contact') ? 'bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact</a>
        <a href={{ '/review' }} class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reviews</a>
      </div>
    </div>
  </nav>