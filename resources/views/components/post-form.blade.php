<div id="post" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-xl font-bold mb-4">Post</h2>
        <form action="{{ route('formulaire.submit') }}" method="POST">
            <div class="mb-4">
                <label for="object" class="block text-sm font-medium text-gray-700">Object</label>
                <input type="text" id="nom" name="nom" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex justify-end">
                <button type="button" onclick="togglePopup()" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 mr-2">Annuler</button>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Soumettre</button>
            </div>
        </form>
    </div>
</div>

<button onclick="togglePopup()" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Ouvrir le Formulaire</button>

<script>
    function togglePopup() {
        const popup = document.getElementById('my-popup');
        popup.classList.toggle('hidden');
    }
</script>