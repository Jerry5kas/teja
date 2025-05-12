<x-layouts.app :title="__('Edit Category')">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="max-w-lg mx-auto mt-16 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
        <div class="flex items-center mb-6">
            <i data-lucide="edit-3" class="w-6 h-6 text-blue-500 mr-2 animate-bounce"></i>
            <h2 class="text-2xl font-bold text-gray-800">Edit Category</h2>
        </div>

        <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Category Name
                </label>
                <input
                    type="text"
                    name="name"
                    value="{{ $category->name }}"
                    class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300"
                    placeholder="Update category name"
                    required
                >
            </div>

            <button type="submit"
                    class="flex items-center justify-center gap-2 bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 hover:shadow-lg transform hover:scale-105 transition-all duration-300 group">
                <i data-lucide="save"
                   class="w-5 h-5 transition-transform duration-300 group-hover:rotate-180 group-hover:scale-125"></i>
                Update Category
            </button>
        </form>
    </div>

    <script>
        lucide.createIcons();
    </script>

</x-layouts.app>
