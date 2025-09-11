<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Edit Post</title>
</head>

<x-header />

<body class="max-w-4xl mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="flex gap-4">
        <a href="/userDashboard/{{ Auth::id() }}"
            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
            Back
        </a>
        </div>
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="text" name="title" id="title"
                value="{{ $post->title }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-500" required>
        </div>

        <div>
            <label for="url" class="block mb-2 text-sm font-medium text-gray-900">URL</label>
            <input type="text" name="url" id="url"
                value="{{ $post->url }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-blue-500" required>
        </div>

        <div class="flex gap-4">
            <button type="submit"
                class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                Save
            </button>
        </div>
    </form>
</body>
<x-footer />

</html>
