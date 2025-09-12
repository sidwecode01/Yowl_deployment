<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>User Dashboard</title>


</head>

<x-header />

<body class="max-w-7xl mx-auto px-4 py-4">


    <div class="md:mt-15 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($posts as $post)
    <div class="w-full max-w-sm mx-auto ">
    <div class="flex flex-col justify-between mt-24 h-[400px]  max-w-sm p-6 bg-gray-200 border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                    @if ($post->image)
                        <img src="{{ $post->image }}" alt="preview"
                            class="w-full h-[200px] object-cover rounded mt-2" />
                    @endif

                    <!-- edit -->
                    <div class="flex justify-end gap-2 mt-3">
                        <button command="show-modal" commandfor="{{'edit-'.$post->id}}" class="ml-65 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </button>

                        <!-- <button class="rounded-md bg-gray-950/5 px-2.5 py-1.5 text-sm font-semibold text-gray-900 hover:bg-gray-950/10">Open dialog</button> -->
                        <el-dialog>
                            <dialog id="{{ 'edit-' . $post->id }}" aria-labelledby="edit-title"
                                class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
                                <el-dialog-backdrop
                                    class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

                                <div tabindex="0"
                                    class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                                    <el-dialog-panel
                                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">

                                        <!--  FORM -->
                                        <form method="POST" action="{{ route('posts.update', $post->id) }}"
                                            class="max-w-sm mx-auto mt-5">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-5">
                                                <label for="title"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                                <input type="text" name="title" id="title"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                    autocomplete="off" value="{{ $post->title }}" />
                                            </div>

                                            <div class="mb-5">
                                                <label for="url"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                                                <input type="text" name="url" id="url" required
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                    autocomplete="off" value="{{ $post->url }}" />
                                            </div>

                                            <!--  BOUTONS  -->
                                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                <button type="submit"
                                                    class="cursor-pointer inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-green-500 sm:ml-3 sm:w-auto">
                                                    Save
                                                </button>
                                                <button type="button" command="close" commandfor="edit"
                                                    class="cursor-pointer mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-red-700 hover:text-white sm:mt-0 sm:w-auto">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                        <!-- BOUTONS  -->

                                    </el-dialog-panel>
                                </div>
                            </dialog>
                        </el-dialog>
                        <!-- edit -->

                        <!-- delete -->
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                            onsubmit="return confirm('Delete this post ?');">
                            @csrf
                            @method('DELETE')
                            <button class="flex cursor-pointer ml-2" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>

                            <!-- delete -->

                    </div>

                </div>
            </div>
        @endforeach

    </div>
</body>

<x-footer />

</html>
