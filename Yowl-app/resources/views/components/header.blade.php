<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap  justify-between mx-auto p-4">
  <a href="/Home" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../Logo/Logo-removebg-preview - Modifié.png" class="h-14" alt="YOWL">
  </a>
<div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    @auth
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{auth()->user()->name}}</button>
        @else
         <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Username</button>
        @endauth
  </div>
  <div class="items-center justify-between  w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col mr-160 p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
        <a href="/Home" class="block py-2 px-3 text-white bg-gray-700 md:bg-transparent md:text-gray-500 hover:text-gray-900 md:p-0 md:dark:text-gray-500" aria-current="page">Home</a>
    </li>

    <li>
        <a href="/" class="block py-2 px-3 text-white bg-gray-700 md:bg-transparent md:text-gray-500 hover:text-gray-900 md:p-0 md:dark:text-gray-500" aria-current="page">Landing</a>
      </li>
    </ul>
  </div>
  <div>
      </div>
  </div>
</nav>
