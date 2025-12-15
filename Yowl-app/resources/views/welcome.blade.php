<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Favicons -->
    <link href="/Yowl-app/public/Logo/bluelogo2.png" rel="icon">
    <link href="/Yowl-app/public/Logo/bluelogo2.png" rel="apple-touch-icon">
    <title>Home</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<x-header />

<body>
    <!-- navbar vertical -->
    <div class="flex flex-col lg:flex-row justify-between">
        <div
            class="md:mt-50 hidden  2xl:shadow-gray-400 lg:shadow-gray-400 lg:block lg:w-40 lg:max-w-60 lg:pt-5 lg:ml-0 lg:mt-20 lg:h-200 2xl:block 2xl:w-70 lg:w-70 2xl:max-w-60 2xl:pt-2 2xl:ml-70 2xl:ml-10 2xl:mt-14 2xl:h-221 bg-white border border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <ul class="space-y-1">
                <p class="px-4 py-2 lg:text-sm 2xl:text-xl font-medium text-gray-500">
                    MENU
                </p>

                <li>
                    @auth
                    <button command="show-modal" commandfor="dialog"
                        class="flex hover:border-l-6 px-4 py-2 lg:text-sm 2xl:text-2xl font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
                        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mr-1 mt-1 lg:mr-1 lg:mt-0 2xl:mr-1 2xl:mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>

                        Posts
                    </button>
                    <el-dialog>
                        <dialog id="dialog" aria-labelledby="dialog-title"
                            class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                            <el-dialog-backdrop
                                class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                            <div tabindex="0"
                                class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                                <el-dialog-panel
                                    class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">

                                    <!--  FORM -->
                                    <form method="POST" action="{{ route('posts.store') }}"
                                        class="max-w-sm mx-auto mt-5">
                                        @csrf

                                        <div class="mb-5">
                                            <label for="title"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                            <input type="text" name="title" id="title"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                autocomplete="off" />
                                        </div>

                                        <div class="mb-5">
                                            <label for="url"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                                            <input type="text" name="url" id="url" required
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                autocomplete="off" />
                                        </div>

                                        <!--  BOUTONS  -->
                                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                            <button type="submit"
                                                class="cursor-pointer inline-flex w-full justify-center rounded-lg bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:ml-3 sm:w-auto">
                                                Submit
                                            </button>
                                            <button type="button" command="close" commandfor="dialog"
                                                class="cursor-pointer mt-3 inline-flex w-full justify-center rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-red-700 hover:text-white sm:mt-0 sm:w-auto">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                    <!-- FIN DU  -->

                                </el-dialog-panel>
                            </div>
                        </dialog>
                    </el-dialog>
                    @endauth

                </li>

                <li>
                    @auth
                    <a href="user/profile"
                        class="flex hover:border-l-6 px-4 py-2 lg:text-sm 2xl:text-2xl font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 mr-1 mt-1 lg:mr-1 lg:mt-0 2xl:mr-1 2xl:mt-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Profile
                    </a>
                    @endauth
                </li>

                <li>
                    @auth
                    <a href="/userDashboard/{{ $user->id }}"
                        class="flex hover:border-l-6 px-4 py-2 lg:text-sm 2xl:text-2xl font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
                        <img src="../Logo/dashboard.png" alt="dashboard"
                            class="w-5 mr-1 mt-1 lg:mr-1 lg:mt-0 2xl:mr-1 2xl:mt-1">
                        Dashboard
                    </a>
                    @endauth
                </li>

                <li>
                    @auth

                    @foreach($admin as $superUser)
                    @if($superUser->name == auth()->user()->name )
                    <a href="/Dash"
                        class="flex hover:border-l-6 px-4 py-2 lg:text-sm 2xl:text-2xl font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
                        <img src="../Logo/dashboard.png" alt="dashboard"
                            class="w-5 mr-1 mt-1 lg:mr-1 lg:mt-0 2xl:mr-1 2xl:mt-1">
                        Admin
                    </a>
                    @endif
                    @endforeach

                    @endauth
                </li>
            </ul>
        </div>

        <div class="flex-1 h-242 overflow-y-auto scrollbar-w-none gap-none pt-25 grid-columns-1 px-4 lg:px-0 md:mt-10">
            <!-- Barre de recherche -->


            @auth
            <button
                command="show-modal"
                commandfor="dialog"
                class="group ml-4 inline-flex items-center gap-2 rounded-xl
         bg-gradient-to-r from-blue-600 to-indigo-600
         px-5 py-2.5
         text-sm lg:text-base 2xl:text-lg
         font-semibold text-white
         shadow-md shadow-blue-500/30
         transition-all duration-300
         hover:scale-105 hover:shadow-lg
         hover:from-blue-500 hover:to-indigo-500
         focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                <!-- Icône + -->
                <span class="flex h-5 w-5 items-center justify-center rounded-full bg-white/20 text-lg font-bold">
                    +
                </span>

                <span>Create Post</span>
            </button>

            <el-dialog>
                <dialog id="dialog" aria-labelledby="dialog-title"
                    class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                    <el-dialog-backdrop
                        class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                    <div tabindex="0"
                        class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                        <el-dialog-panel
                            class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">

                            <!--  FORM -->
                            <form method="POST" action="{{ route('posts.store') }}"
                                class="max-w-sm mx-auto mt-5">
                                @csrf

                                <div class="mb-5">
                                    <label for="title"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        autocomplete="off" />
                                </div>

                                <div class="mb-5">
                                    <label for="url"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                                    <input type="text" name="url" id="url" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-2xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        autocomplete="off" />
                                </div>

                                <!--  BOUTONS  -->
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit"
                                        class="cursor-pointer inline-flex w-full justify-center rounded-lg bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:ml-3 sm:w-auto">
                                        Submit
                                    </button>
                                    <button type="button" command="close" commandfor="dialog"
                                        class="cursor-pointer mt-3 inline-flex w-full justify-center rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-red-700 hover:text-white sm:mt-0 sm:w-auto">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                            <!-- FIN DU  -->

                        </el-dialog-panel>
                    </div>
                </dialog>
            </el-dialog>
            @endauth




            <div class="mb-6 flex justify-center">
                <form action="{{ route('search') }}" method="GET" class="flex w-full max-w-md">
                    <input type="text" name="search"
                        class="w-full border rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Search posts by title...">
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700">
                        Search
                    </button>
                </form>
            </div>


            @foreach ($posts as $post)
            <div class="bg-white dark:bg-gray-900 rounded-3xl shadow-lg hover:shadow-xl transition-transform duration-300 ease-out transform hover:-translate-y-1 hover:scale-105 overflow-hidden mb-6 md:mx-auto md:w-3/4 lg:w-2/3 2xl:w-1/2">

                <!-- Image -->
                @if ($post->chemin_image)
                <a href="{{ route('posts.show', $post) }}" target="_blank">
                    <img src="{{ $post->chemin_image }}" alt="preview"
                        class="w-full h-64 md:h-80 object-cover transition duration-500 hover:scale-105">
                </a>
                @endif

                <div class="p-5 space-y-3">

                    <!-- Title -->
                    <a href="{{ route('posts.show', $post) }}" target="_blank"
                        class="block text-2xl md:text-3xl font-bold text-indigo-600 hover:text-indigo-500 transition">
                        {{ $post->title }}
                    </a>

                    <!-- URL -->
                    <a href="{{ $post->posts_url }}" class="text-sm text-indigo-500 underline line-clamp-2">
                        {{ $post->posts_url }}
                    </a>

                    <!-- Author + Date -->
                    <div class="flex items-center justify-between text-gray-500 text-sm">
                        <span>Author: <span class="font-semibold text-red-400">{{ $post->user->name }}</span></span>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-between mt-3 border-t border-gray-200 pt-3">

                        <!-- Like -->
                        <form action="{{ route('posts.toggle-like', $post) }}" method="POST" class="flex items-center gap-2">
                            @csrf
                            <button type="submit" class="flex items-center gap-1 text-gray-500 hover:text-blue-500 transition">
                                <i class="bx bxs-like text-2xl {{ auth()->check() && auth()->user()->likedPosts->contains($post->id) ? 'text-blue-500' : '' }}"></i>
                                <span class="text-sm">{{ $post->likes_count ?? 0 }}</span>
                            </button>
                        </form>

                        <!-- Comment -->
                        <a href="{{ route('posts.show', $post) }}" class="flex items-center gap-2 text-gray-500 hover:text-indigo-500 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            <span class="text-sm">{{ $post->comments->count() }}</span>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div
            class="hidden lg:block lg:w-50 lg:p-6 lg:gap-10 border bg-white border-gray-200 rounded-2xl shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 2xl:mr-60 2xl:mt-25 lg:mr-0 lg:h-80 lg:mt-20">
            <div class="h-[10%] flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
                Must read
            </div>
            <hr class="bg-gray-200">

            <div class="h-[45%] mt-3">
                <ul class="text-blue-400 list-disc ml-5">
                    <li><a class="hover:text-blue-600" href="">Lien 1</a></li>
                    <li><a class="hover:text-blue-600" href="">Lien 2</a></li>
                </ul>
            </div>

            <div class="h-[15%] flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6 mr-2 mt-3">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                </svg>
                <p class="mt-3.5">Featured Links</p>
            </div>
            <hr>

            <div class="h-[30%] mt-3">
                <ul class="text-blue-400 list-disc ml-5">
                    <li><a class="hover:text-blue-600" href="">Lien 1</a></li>
                    <li><a class="hover:text-blue-600" href="">Lien 2</a></li>
                    <li><a class="hover:text-blue-600" href="">Lien 3</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- navbar vertical -->

</body>
<x-footer />

</html>