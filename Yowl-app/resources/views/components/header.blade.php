<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap  justify-between mx-auto p-4">
  <a href="/Home" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../Logo/Logo-removebg-preview - Modifié.png" class="h-14" alt="YOWL">
  </a>
<div class="flex 2xl:order-2 lg:order-2 md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    @auth
      <button type="button" class="2xl:block lg:block md:hidden max-sm:hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{auth()->user()->name}}
      </button>
      <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<el-dropdown class="inline-block 2xl:hidden lg:hidden">
  <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring-1 inset-ring-gray-300 hover:bg-gray-50">
    {{auth()->user()->name}}
    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-gray-400">
      <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
    </svg>
  </button>

  <el-menu anchor="bottom end" popover class="w-56 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
    <div class="py-1">
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Profile</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Support</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">License</a>
    </div>
  </el-menu>
</el-dropdown>

        @else
         <div class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Username</div>
        @endauth
  </div>
  <div class="items-center justify-between w-full 2xl:flex 2xl:w-auto 2xl:order-1 lg:flex lg:w-auto lg:order-1 md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col 2xl:mr-160 md:mr-110 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
        <a href="/Home" class="block py-2 px-3 text-white bg-gray-700 md:bg-transparent md:text-gray-500 hover:text-gray-900 md:p-0 md:dark:text-gray-500" aria-current="page">Home</a>
    </li>

    <li>
        <a href="/" class="block py-2 px-3 text-white bg-gray-700 md:bg-transparent md:text-gray-500 hover:text-gray-900 md:p-0 md:dark:text-gray-500" aria-current="page">Landing</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
