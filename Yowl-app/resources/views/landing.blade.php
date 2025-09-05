<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>

<header class="bg-blue-500 shadow-2xl sticky top-0 z-50 px-4">
    <div class="container mx-auto flex justify-between items-center py-4">

      <div class="flex items-center">
        <img src="../Logo/whiteLogos.png" alt="Logo" class="h-14 w-auto mr-4">
      </div>

      <div class="flex md:hidden">
        <button id="hamburger" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>

      <nav class="hidden md:flex md:flex-grow justify-center">
        <ul class="flex justify-center space-x-4 text-white">
          <li><a href="{{ route('landind') }}" class="hover:text-secondary font-bold">Home</a></li>
        </ul>
      </nav>

      <div class="hidden lg:flex items-center space-x-4">
        <a href="{{ route('login') }}" class="w-35 rounded-xl bg-transparent border border-white px-4 py-2 font-bold text-white text-center">Sign in</a>
        <a href="{{ route('register') }}" class="w-35 rounded-xl bg-white px-4 py-2 font-bold text-center font-semibold border border-white">Sign up</a>
      </div>
    </div>
  </header>

  <nav id="mobile-menu-placeholder" class="mobile-menu hidden flex-col items-center space-y-8 md:hidden px-8">
    <ul class="w-full text-center">
        <li class="border-b border-gray-300 pb-4 pt-4"><a href="#home" class="hover:text-secondary font-bold">Home</a></li>
    </ul>
  </nav>

  <div class="flex items-center flex-col justify-center gap-25 p-10">
    <div class="text-center">
        <h1 class="animate-typing overflow-hidden pr-5 text-8xl font-bold">
            Comment on the Web  Share your ideas freely on  YOWL
        </h1>
    </div>

    <div class="relative flex items-center justify-center ">
        <a href=" {{ route('home') }}" class="w-50 animate-bounce rounded-xl bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 text-center">Get stated</a>
    </div>

  </div>
</body>
</html>

