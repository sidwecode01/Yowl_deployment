<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<x-header />

<body class="bg-gray-50 min-h-screen">

    <div class="mt-15 max-w-7xl mx-auto px-6 py-10">

        <!-- PAGE TITLE -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900">My Posts</h1>
            <p class="text-gray-500 mt-1">Manage and edit your shared content</p>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            @foreach ($posts as $post)
            <!-- CARD -->
            <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden">

                <!-- IMAGE -->
                @if ($post->chemin_image)
                <img src="{{ $post->chemin_image }}"
                    class="h-44 w-full object-cover group-hover:scale-105 transition-transform duration-500">
                @else
                <div class="h-44 bg-gradient-to-br from-blue-100 to-purple-100"></div>
                @endif

                <!-- CONTENT -->
                <div class="p-5 flex flex-col justify-between h-[210px]">

                    <h2 class="text-lg font-semibold text-gray-900 line-clamp-2">
                        {{ $post->title }}
                    </h2>

                    <!-- ACTIONS -->
                    <div class="flex items-center justify-between mt-4">

                        <!-- EDIT -->
                        <button
                            onclick="document.getElementById('edit-{{ $post->id }}').showModal()"
                            class="flex items-center gap-2 text-blue-600 hover:text-blue-800 transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                            </svg>
                            <span class="text-sm font-medium">Edit</span>
                        </button>

                        <!-- DELETE -->
                        <form action="{{ route('posts.destroy', $post->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this post ?');">
                            @csrf
                            @method('DELETE')
                            <button class="flex items-center gap-2 text-red-500 hover:text-red-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79" />
                                </svg>
                                <span class="text-sm font-medium">Delete</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- MODAL -->
            <dialog id="edit-{{ $post->id }}"
                class="backdrop:bg-black/40 rounded-2xl p-0 m-auto ">

                <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg p-10">

                    <h3 class="text-xl font-bold mb-4">Edit Post</h3>

                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="w-full block text-sm font-medium text-gray-700 mb-1">
                                Title
                            </label>
                            <input type="text"
                                name="title"
                                value="{{ $post->title }}"
                                class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                URL
                            </label>
                            <input type="text"
                                name="url"
                                value="{{ $post->posts_url }}"
                                class="w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="flex justify-end gap-3">
                            <button type="button"
                                onclick="document.getElementById('edit-{{ $post->id }}').close()"
                                class="px-4 py-2 rounded-lg border hover:bg-gray-100">
                                Cancel
                            </button>

                            <button type="submit"
                                class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                                Save
                            </button>
                        </div>
                    </form>

                </div>
            </dialog>

            @endforeach
        </div>
    </div>

    <x-footer />

</body>

</html>