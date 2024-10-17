<nav
  class="fixed top-0 z-50 w-full bg-black border-b border-gray-200"
>
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button
          data-drawer-target="logo-sidebar"
          data-drawer-toggle="logo-sidebar"
          aria-controls="logo-sidebar"
          type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
        >
          <span class="sr-only">Open sidebar</span>
          <svg
            class="w-8 h-8"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              clip-rule="evenodd"
              fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
            ></path>
          </svg>
        </button>
        <img class="ml-2 h-12 w-12" src="assets/img/logo2.png" alt="Sole City Kicks">
        <span
          class="ml-4 self-center text-xl text-white font-semibold sm:text-2xl whitespace-nowrap"
          >Sole City Kicks</span
        >
      </div>
      <div class="flex items-center">
        <div class="relative">
          <button
            type="button"
            class="flex items-center space-x-4 text-sm bg-indigo-600 py-2 px-4 rounded-full focus:ring-4 focus:ring-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-300 w-full"
            aria-expanded="false"
            data-dropdown-toggle="dropdown-user"
          >
            <!-- Avatar/Icon -->
            <div
              class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center text-gray-600"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                />
              </svg>
            </div>
            <!-- User Name -->
            <p class="text-md font-large text-white flex-grow truncate" role="none"> {{ auth()->user()->nama }} </p>
            <span class="sr-only">Open user menu</span>
          </button>

          <!-- Dropdown Menu (if needed) -->
          <div
            id="dropdown-user"
            class="hidden absolute right-0 z-10 mt-2 w-48 bg-white rounded-lg shadow-lg"
          >
            <div class="py-2">
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >Profile</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >Settings</a
              >
              <a href="{{ route('logout') }}"
                class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
                >Logout</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-200 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-200">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
           </svg>
           <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
        </a>
     </li>
      <li>
        <a href="{{ route('users.index') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
           </svg>
           <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
        </a>
     </li>
      <li>
        <a href="{{ route('barang.index') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
          <svg xmlns="http://www.w3.org/2000/svg" id="product" data-name="Layer 1" stroke-width="0.85" stroke="currentColor" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.638,6.297l-1.896-3.147L12,.066,2.257,3.149,.382,6.263c-.411,.685-.487,1.507-.21,2.256s.87,1.324,1.628,1.576l.204,.068-.008,10.451,9.997,3.332,9.995-3.332,.008-10.451,.243-.081c.748-.25,1.334-.817,1.608-1.557,.274-.74,.198-1.552-.208-2.229Zm-3.844-2.715l-7.786,2.599L4.222,3.577,12,1.115l7.794,2.467ZM1.109,8.173c-.171-.463-.124-.972,.129-1.395l1.577-2.617,8.429,2.819-1.948,3.247c-.387,.645-1.155,.929-1.868,.691l-5.313-1.771c-.468-.156-.835-.512-1.006-.975Zm1.894,2.324l4.109,1.37c1.163,.389,2.412-.076,3.042-1.125l1.344-2.241-.007,14.226-8.496-2.832,.007-9.397Zm17.984,9.397l-8.496,2.832,.007-14.228,1.346,2.244c.481,.801,1.324,1.261,2.212,1.261,.275,0,.555-.044,.829-.136l4.109-1.369-.007,9.397Zm1.92-11.714c-.168,.454-.527,.802-.986,.955l-5.352,1.784c-.712,.238-1.48-.047-1.868-.691l-1.945-3.242,8.432-2.815,1.592,2.642c.249,.415,.295,.914,.127,1.368Z"/>
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
        </a>
      </li> 
      <li>
        <a href="{{ route('pembelian.index') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
          <!-- Updated Orders Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" aria-hidden="true" width="24" height="24">
            <g id="_01_align_center" data-name="01 align center">
              <path d="M20.164,13H5.419L4.478,5H12V3H4.242L4.2,2.648A3,3,0,0,0,1.222,0H0V2H1.222a1,1,0,0,1,.993.883L3.8,16.351A3,3,0,0,0,6.778,19H20V17H6.778a1,1,0,0,1-.993-.884L5.654,15H21.836l.9-5H20.705Z"/>
              <circle cx="7" cy="22" r="2"/>
              <circle cx="17" cy="22" r="2"/>
              <path d="M17.078,8.542h.033a1.873,1.873,0,0,0,1.335-.553l5.261-5.261L22.293,1.314,17.112,6.5,14.868,4.16,13.427,5.546l2.306,2.4A1.872,1.872,0,0,0,17.078,8.542Z"/>
            </g>
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
        </a>
      </li>
      <li>
        <a href="{{ route('logout') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"/>
          </svg>
          <span class="flex-1 ms-2 whitespace-nowrap">Sign Out</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<nav
  class="fixed top-0 z-50 w-full bg-black border-b border-gray-200"
>
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button
          data-drawer-target="logo-sidebar"
          data-drawer-toggle="logo-sidebar"
          aria-controls="logo-sidebar"
          type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
        >
          <span class="sr-only">Open sidebar</span>
          <svg
            class="w-8 h-8"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              clip-rule="evenodd"
              fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
            ></path>
          </svg>
        </button>
        <img class="ml-2 h-12 w-12" src="assets/img/logo2.png" alt="Sole City Kicks">
        <span
          class="ml-4 self-center text-xl text-white font-semibold sm:text-2xl whitespace-nowrap"
          >Sole City Kicks</span
        >
      </div>
      <div class="flex items-center">
        <div class="relative">
          <button
            type="button"
            class="flex items-center space-x-4 text-sm bg-indigo-600 py-2 px-4 rounded-full focus:ring-4 focus:ring-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-300 w-full"
            aria-expanded="false"
            data-dropdown-toggle="dropdown-user"
          >
            <!-- Avatar/Icon -->
            <div
              class="w-6 h-6 rounded-full bg-gray-200 flex items-center justify-center text-gray-600"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                />
              </svg>
            </div>
            <!-- User Name -->
            <p
              class="text-md font-large text-white flex-grow truncate"
              role="none"
            >
            {{ auth()->user()->nama }}
            </p>
            <span class="sr-only">Open user menu</span>
          </button>

          <!-- Dropdown Menu (if needed) -->
          <div
            id="dropdown-user"
            class="hidden absolute right-0 z-10 mt-2 w-48 bg-white rounded-lg shadow-lg"
          >
            <div class="py-2">
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >Profile</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                >Settings</a
              >
              <a href="{{ route('logout') }}"
                class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100"
                >Logout</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-200 border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-200">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
           </svg>
           <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
        </a>
     </li>
      <li>
        <a href="{{ route('users.index') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
           <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
           </svg>
           <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
        </a>
     </li>
      <li>
        <a href="{{ route('barang.index') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
          <svg xmlns="http://www.w3.org/2000/svg" id="product" data-name="Layer 1" stroke-width="0.85" stroke="currentColor" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.638,6.297l-1.896-3.147L12,.066,2.257,3.149,.382,6.263c-.411,.685-.487,1.507-.21,2.256s.87,1.324,1.628,1.576l.204,.068-.008,10.451,9.997,3.332,9.995-3.332,.008-10.451,.243-.081c.748-.25,1.334-.817,1.608-1.557,.274-.74,.198-1.552-.208-2.229Zm-3.844-2.715l-7.786,2.599L4.222,3.577,12,1.115l7.794,2.467ZM1.109,8.173c-.171-.463-.124-.972,.129-1.395l1.577-2.617,8.429,2.819-1.948,3.247c-.387,.645-1.155,.929-1.868,.691l-5.313-1.771c-.468-.156-.835-.512-1.006-.975Zm1.894,2.324l4.109,1.37c1.163,.389,2.412-.076,3.042-1.125l1.344-2.241-.007,14.226-8.496-2.832,.007-9.397Zm17.984,9.397l-8.496,2.832,.007-14.228,1.346,2.244c.481,.801,1.324,1.261,2.212,1.261,.275,0,.555-.044,.829-.136l4.109-1.369-.007,9.397Zm1.92-11.714c-.168,.454-.527,.802-.986,.955l-5.352,1.784c-.712,.238-1.48-.047-1.868-.691l-1.945-3.242,8.432-2.815,1.592,2.642c.249,.415,.295,.914,.127,1.368Z"/>
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
        </a>
      </li> 
      <li>
        <a href="{{ route('pembelian.index') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
          <!-- Updated Orders Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" fill="currentColor" aria-hidden="true" width="24" height="24">
            <g id="_01_align_center" data-name="01 align center">
              <path d="M20.164,13H5.419L4.478,5H12V3H4.242L4.2,2.648A3,3,0,0,0,1.222,0H0V2H1.222a1,1,0,0,1,.993.883L3.8,16.351A3,3,0,0,0,6.778,19H20V17H6.778a1,1,0,0,1-.993-.884L5.654,15H21.836l.9-5H20.705Z"/>
              <circle cx="7" cy="22" r="2"/>
              <circle cx="17" cy="22" r="2"/>
              <path d="M17.078,8.542h.033a1.873,1.873,0,0,0,1.335-.553l5.261-5.261L22.293,1.314,17.112,6.5,14.868,4.16,13.427,5.546l2.306,2.4A1.872,1.872,0,0,0,17.078,8.542Z"/>
            </g>
          </svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
        </a>
      </li>
      <li>
        <a href="{{ route('logout') }}" class="flex items-center p-2 text-black rounded-lg hover:bg-indigo-600 group">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"/>
          </svg>
          <span class="flex-1 ms-2 whitespace-nowrap">Sign Out</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

