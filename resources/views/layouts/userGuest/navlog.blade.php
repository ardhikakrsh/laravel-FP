<nav class="fixed top-5 left-0 right-0 mx-auto bg-blur shadow-lg rounded-full z-50 max-w-screen-xl">
  <div class="container mx-auto px-8 py-2">
      <!-- Brand Name -->
      <a href="/" class="text-l font-bold absolute text-black hover:text-indigo-800">SUPREMADU</a>

      <!-- Login and Sign Up Options -->
      <div class="flex space-x-6 justify-center">
          <a href="{{ route('login') }}" class="flex items-center text-gray-500 hover:text-indigo-800 font-medium">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
              Sign Up
          </a>
          <a href="{{ route('register') }}" class="flex items-center text-gray-500 hover:text-indigo-800 font-medium">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
              </svg>
              Sign In
          </a>
      </div>
  </div>
</nav>