<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Home</title>
</head>

<x-header />

<body>
<!-- navbar vertical -->
<!--   -->
<div class="flex flex-col md:flex-row justify-between">
  <div class="hidden md:block md:w-70 md:max-w-60 md:pt-5 md:ml-80 md:mt-21 md:h-221 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <ul class="space-y-1">
      <p class="px-4 py-2 text-sm font-medium text-gray-500">
        MENU
      </p>

      <li>
        <button command="show-modal" commandfor="dialog" class="flex hover:border-l-6 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>

          Posts
        </button>
      <el-dialog>
        <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
          <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

          <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

              <!--  FORM -->
              <form method="POST" action="{{ route('posts.store') }}" class="max-w-sm mx-auto mt-5">
                @csrf

                <div class="mb-5">
                  <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                  <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" autocomplete="off" />
                </div>

                <div class="mb-5">
                  <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                  <input type="text" name="url" id="url" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" autocomplete="off" />
                </div>

                <!--  BOUTONS  -->
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                  <button type="submit" class="cursor-pointer inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:ml-3 sm:w-auto">
                    Submit
                  </button>
                  <button type="button" command="close" commandfor="dialog" class="cursor-pointer mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-red-700 hover:text-white sm:mt-0 sm:w-auto">
                    Cancel
                  </button>
                </div>
              </form>
              <!-- FIN DU  -->

            </el-dialog-panel>
          </div>
        </dialog>
      </el-dialog>

      </li>

      <li>
        @auth
        <a href="user/profile" class="flex hover:border-l-6 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-1">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
        Profile
        </a>
        @endauth
      </li>

      <li>
         @auth
        <a href="/userDashboard/{{$user->id}}" class="flex hover:border-l-6 px-4 py-2 text-sm font-medium text-gray-900 hover:bg-blue-100 hover:border-blue-400 hover:text-blue-400">
          <img src="../Logo/dashboard.png" alt="dashboard" class="w-5 mr-1">
          Dashboard
        </a>
        @endauth
      </li>
    </ul>
  </div>

  <div class="flex-1 h-242 overflow-y-auto scrollbar-w-none gap-none pt-25 grid-columns-1 px-4 md:px-0">
    <!-- Bar de recherche -->
    <div class="mb-6 flex justify-center">
        <form action="{{ route('home') }}" method="GET" class="flex w-full max-w-md">
            <input type="text" name="q" value="{{ request('q') }}"
                   class="w-full border rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   placeholder="Search posts by title, description or author...">
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700">
                Search
            </button>
        </form>
    </div>

    @foreach($posts as $post)
        <div class="bg-white shadow rounded-lg p-4 mb-4 w-150 md:w-100 max-w-full">
            <a href="{{ route('posts.show', $post) }}" target="_blank" class="font-bold text-lg text-blue-600">
                {{ $post->title }}
            </a><br>
            @if($post->image)
            <a href="{{ route('posts.show', $post) }}">
                <img src="{{ $post->image }}" alt="preview" class="w-full h-48 object-cover rounded mt-2">
                </a>
            @endif
            <a href="{{ $post->url }}" class=" text-blue-600 underline mt-4 line-clamp-2">
                {{ $post->url }}
          </a><br>
          <p class=" mt-3">Author:
            <span class=" text-xl font-semibold text-red-400">
            {{ $post->user->name }}
            </span></p>

            <p class=" text-gray-500">{{ $post->created_at->diffForHumans() }}</p>

              <div class="flex justify-end mt-2">
            <button
            command="show-modal" commandfor="comments" class="flex items-center font-bold cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>
                <p class="">0</p>
            </button>

    <el-dialog>
      <dialog id="comments" aria-labelledby="comments-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
          <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 id="comments-title" class="text-base font-semibold text-gray-900">Comment</h3>
                  <div class="mt-2">

                @auth
             <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-4">
                @csrf
                    <textarea name="content"
                     class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pb-10.5 pr-55 pl-2 "required></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="submit" class="cursor-pointer inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:ml-3 sm:w-auto">Submit</button>
              <button type="button" command="close" commandfor="comments" class="cursor-pointer mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-500 hover:text-white sm:mt-0 sm:w-auto">Cancel</button>
            </div>
            </form>

              @else
                    <p class="text-gray-500 mt-4">
                        <a href="{{ route('login') }}" class="text-blue-600 underline">Connect your Account</a> for comment.
                    </p>
                @endauth


          </el-dialog-panel>
        </div>
      </dialog>
    </el-dialog>

          </div>
        </div>
    @endforeach

  </div>
  <div class="hidden md:block md:w-70 md:p-6 md:gap-10 border bg-white border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 md:mr-70 md:h-100 md:mt-30">
    <div class="h-[10%] flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
      </svg>
    Must read
    </div><hr class="bg-gray-200">

    <div class="h-[45%] mt-3">
      <ul class="text-blue-400 list-disc ml-5">
        <li><a class="hover:text-blue-600" href="">Lien 1</a></li>
        <li><a class="hover:text-blue-600" href="">Lien 2</a></li>
      </ul>
    </div>

    <div class="h-[15%] flex">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2 mt-3">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
      </svg>
      <p class="mt-3.5">Featured Links</p>
    </div><hr>

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
