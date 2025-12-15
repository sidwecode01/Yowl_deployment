<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<x-header />

<body>
<section class="flex justify-between mt-16 bg-gray-100">



    <div class="max-w-3xl mx-auto mt-10">


        <!-- <a href="{{ route('home') }}" class="inline-block text-xl animate-bounce mb-4 text-blue-600 hover:underline">
             Back to Home page
        </a> -->

        <!-- Post -->
        <div class="bg-white shadow rounded-lg p-4 mb-6">
            <h2 class="text-2xl font-bold text-blue-600">{{ $post->title }}</h2>

            @if($post->image)
                <img src="{{ $post->image }}" alt="preview" class="w-full h-64 object-cover rounded my-3">
            @endif

            <p class="text-gray-600 mb-2 line-clamp-6">{{ $post->description }}</p>
            <a href="{{ $post->url }}" target="_blank"  class=" text-blue-500 underline">
                Show post site
            </a>
        </div>


        <!-- Commentaires -->
        <div class="bg-white shadow rounded-lg p-4">
            <h3 class="text-lg font-bold mb-4">Comments</h3>

            <!-- List des commentair -->
             <div class=" w-full h-64 overflow-scroll">
            @forelse($post->comments as $comment)

                <div class="border-b border-gray-200 py-2">
                    <p class=" text-xl">
                        <span class=" text-sm font-semibold text-blue-400">{{ $comment->user->name }} :</span>
                        {{ $comment->content }}
                    </p>
                    <p class=" text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>



                @if(auth()->id() === $comment->user_id)
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Delete this Comment ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600  hover:underline">
                Delete
            </button>
        </form>
    @endif
   </div>


            @empty
                <p class="text-gray-500">No Comment Yet.</p>
            @endforelse

            </div>

            <!-- ajout -->
            @auth
                <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-4">
                    @csrf
                    <textarea name="content" rows="3" class="w-full border rounded p-2" placeholder="Write your comment..." required></textarea>
                    <button type="submit" class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-400">
                        Publish
                    </button>
                </form>
            @else
                <p class="text-gray-500 mt-4">
                    <a href="{{ route('login') }}" class="text-blue-600 underline">Connect your Account</a> for comment.
                </p>
            @endauth
        </div>
    </div>
</section>
</body>

<x-footer />

</html>
