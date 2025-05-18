<x-layouts.app :title="__('Categories')">
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <div x-data="{ show: false, deleteUrl: '', categoryName: '' }" class="max-w-4xl mx-auto mt-10">
        <!-- Heading and Add Category Button -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Categories</h1>
            <a href="{{ route('categories.create') }}"
               class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2.5 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105 group"
            >
                <i data-lucide="plus-circle" class="w-5 h-5 transition-transform duration-300 group-hover:rotate-180"></i>
                Add Category
            </a>
        </div>

        <!-- Categories Table -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white rounded-lg overflow-hidden border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">#</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="px-6 py-3 text-right text-sm font-medium text-gray-700">Actions</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 animate-fade-in">
                @foreach ($categories as $category)
                    <tr class="hover:bg-gray-50 transition duration-200 ease-in-out group">
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $category->name }}</td>
                        <td class="px-6 py-4 text-sm text-right">
{{--                            <a href="{{ route('categories.edit', $category) }}"--}}
{{--                               class="text-blue-500 hover:text-blue-700 mr-4 transition"--}}
{{--                               title="Edit">--}}
{{--                                <i data-lucide="edit" class="w-5 h-5 inline-block align-middle"></i>--}}
{{--                            </a>--}}
                            <button
                                @click.prevent="show = true; deleteUrl = '{{ route('categories.destroy', $category) }}'; categoryName = '{{ $category->name }}'"
                                class="text-red-500 hover:text-red-700 transition transform hover:scale-110"
                                title="Delete">
                                <i data-lucide="trash-2" class="w-5 h-5 inline-block align-middle"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Delete Confirmation Modal -->
        <div x-show="show" x-cloak
             class="fixed inset-0 flex items-center justify-center bg-black/40 z-50 transition-opacity duration-300"
             @keydown.escape.window="show = false">
            <div class="bg-white w-full max-w-md p-6 rounded-xl shadow-xl transform transition-all scale-95"
                 x-show="show"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-90">

                <div class="flex items-center space-x-3 mb-4">
                    <i data-lucide="alert-triangle" class="text-yellow-500 w-6 h-6 animate-bounce"></i>
                    <h2 class="text-xl font-semibold text-gray-800">Delete Category</h2>
                </div>

                <p class="text-gray-600 mb-4">
                    Are you sure you want to delete
                    <span class="font-bold text-red-600" x-text="categoryName"></span>?
                    This action cannot be undone.
                </p>

                <div class="flex justify-end space-x-3 mt-6">
                    <button @click="show = false"
                            class="flex items-center gap-1 px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition transform hover:scale-105">
                        <i data-lucide="x-circle" class="w-4 h-4"></i> Cancel
                    </button>
                    <form :action="deleteUrl" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="flex items-center gap-1 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition transform hover:scale-105">
                            <i data-lucide="trash" class="w-4 h-4"></i> Yes, Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>

    <style>
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in > tr {
            animation: fadeIn 0.5s ease-out both;
        }

        .animate-fade-in > tr:nth-child(2) { animation-delay: 0.05s; }
        .animate-fade-in > tr:nth-child(3) { animation-delay: 0.1s; }
        .animate-fade-in > tr:nth-child(4) { animation-delay: 0.15s; }
        .animate-fade-in > tr:nth-child(5) { animation-delay: 0.2s; }
    </style>

</x-layouts.app>
