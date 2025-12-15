<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white/80 backdrop-blur-md">
  <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">

    <!-- Logo -->
    <a href="/Home" class="flex items-center gap-2">
      <img src="../Logo/Logo-removebg-preview - Modifié.png" class="h-10" alt="YOWL">
    </a>

    <!-- Navigation -->
    <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
      <a href="/Home" class="hover:text-indigo-600 transition">Accueil</a>
      <a href="/posts" class="hover:text-indigo-600 transition">Posts</a>
      <a href="/about" class="hover:text-indigo-600 transition">À propos</a>
    </div>

    <!-- Right actions -->
    <div class="flex items-center gap-4">

      @auth
        <!-- Desktop user -->
        <div class="hidden md:flex items-center gap-3">
          <span class="text-sm font-medium text-gray-700">
            {{ auth()->user()->name }}
          </span>

          <a
            href="/userDashboard/{{ Auth::id() }}"
            class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
          >
            Dashboard
          </a>
        </div>

        <!-- Mobile dropdown -->
        <el-dropdown class="md:hidden">
          <button class="inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
            {{ auth()->user()->name }}
            <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path d="M5.22 8.22a.75.75 0 011.06 0L10 11.94l3.72-3.72a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.22 9.28a.75.75 0 010-1.06z"/>
            </svg>
          </button>

          <el-menu
            anchor="bottom end"
            popover
            class="w-48 rounded-xl bg-white shadow-lg ring-1 ring-black/5"
          >
            <a href="/user/profile" class="block px-4 py-2 text-sm hover:bg-gray-50">Profil</a>
            <a href="/posts" class="block px-4 py-2 text-sm hover:bg-gray-50">Posts</a>
            <a href="/userDashboard/{{ Auth::id() }}" class="block px-4 py-2 text-sm hover:bg-gray-50">Dashboard</a>
          </el-menu>
        </el-dropdown>

      @else
        <a
          href="/login"
          class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
        >
          Se connecter
        </a>
      @endauth

    </div>
  </div>
</nav>
