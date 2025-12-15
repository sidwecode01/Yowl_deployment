<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Search</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<x-header />

<body>

<div class="flex flex-col lg:flex-row justify-between">

    <!-- ==================== POSTS ==================== -->
    <div class="flex-1 overflow-y-auto pt-25 px-4">

        <!-- SEARCH BAR -->
        <div class="mb-6 flex justify-center">
            <form action="{{ route('search') }}" method="GET" class="flex w-full max-w-md">
                <input type="text" name="search"
                       value="{{ request('search') }}"
                       class="w-full border rounded-l-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Search posts by title...">
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-r-lg hover:bg-blue-700">
                    Search
                </button>
            </form>
        </div>

        <!-- NO RESULT -->
        @if ($posts->count() === 0)
            <section class="bg-gray-100 shadow-xl rounded-lg">
                <div class="py-16 text-center">
                    <h1 class="text-6xl mb-4">😥</h1>
                    <p class="text-3xl font-bold">No results found</p>
                    <p class="mt-2 text-gray-500">
                        Sorry, we can’t find post for :
                        <span class="font-semibold text-black">{{ $search }}</span>
                    </p>
                    <a href="/Home"
                       class="inline-block mt-6 bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded-full">
                        Back to Homepage
                    </a>
                </div>
            </section>
        @endif

        <!-- POSTS LOOP -->
        @foreach ($posts as $post)
            <div class="bg-white shadow rounded-2xl p-4 mb-6 hover:shadow-blue-600 transition duration-700 hover:scale-105">

                <!-- TITLE -->
                <a href="{{ route('posts.show', $post) }}"
                   class="font-bold text-2xl text-blue-600">
                    {{ $post->title }}
                </a>

                <!-- IMAGE -->
                @if ($post->chemin_image)
                    <a href="{{ route('posts.show', $post) }}">
                        <img src="{{ $post->chemin_image }}"
                             alt="preview"
                             class="w-full h-52 object-cover rounded mt-3">
                    </a>
                @endif

                <!-- URL -->
                <a href="{{ $post->posts_url }}"
                   target="_blank"
                   class="block text-blue-600 underline mt-3 line-clamp-2">
                    {{ $post->posts_url }}
                </a>

                <!-- AUTHOR -->
                <p class="mt-3">
                    Author :
                    <span class="font-semibold text-red-400">
                        {{ $post->user->name }}
                    </span>
                </p>

                <!-- DATE -->
                <p class="text-gray-500 text-sm">
                    {{ $post->created_at->diffForHumans() }}
                </p>

                <!-- ACTIONS -->
                <div class="flex justify-between items-center mt-4 shadow px-4 py-2 rounded">

                    <!-- LIKE -->
                    <form action="{{ route('posts.toggle-like', $post) }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 font-bold">
                            <i class="bx bxs-like text-3xl
                                {{ auth()->check() && auth()->user()->likedPosts->contains($post->id) ? 'text-blue-500' : '' }}">
                            </i>
                            <span>{{ $post->likedByUsers->count() }}</span>
                        </button>
                    </form>

                    <!-- COMMENTS -->
                    <button command="show-modal" commandfor="comments-{{ $post->id }}"
                            class="flex items-center gap-2 font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227..." />
                        </svg>
                        <span>Comment</span>
                    </button>
                </div>
            </div>
        @endforeach

    </div>
</div>

<x-footer />
</body>
</html>
