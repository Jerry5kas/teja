<x-layouts.app :title="__('Products')">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <div x-data="productPage()" x-init="initLucide()" class="max-w-6xl mx-auto mt-10">

        <div class="flex justify-between items-center mb-6">
            <div
                x-data="{ open: false, selected: '{{ $categoryId ?? '' }}', categories: {{ $categories->toJson() }} }"
                class="relative mb-6 w-72">
                <label class="text-gray-700 font-medium block mb-1">Filter by Category:</label>
                <button @click="open = !open"
                        class="w-full flex justify-between items-center px-4 py-2 border rounded-lg shadow-sm bg-white hover:shadow-md transition">
                    <span x-text="categories.find(c => c.id == selected)?.name || 'All Categories'"></span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-gray-600"></i>
                </button>

                <div x-show="open" @click.outside="open = false"
                     x-transition
                     class="absolute z-10 mt-2 w-full bg-white border rounded-lg shadow-lg max-h-60 overflow-auto">
                    <a href="{{ route('products.index') }}"
                       class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 text-sm text-gray-700 transition"
                       @click="selected = ''; open = false">
                        <i data-lucide="layers" class="w-4 h-4"></i>
                        All Categories
                    </a>


                    <template x-for="category in categories" :key="category.id">
                        <a :href="`{{ route('products.index') }}?category=${category.id}`"
                           class="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 text-sm text-gray-700 transition"
                           @click="selected = category.id; open = false">
                            <i data-lucide="briefcase" class="w-4 h-4 text-indigo-500"></i>
                            <span x-text="category.name"></span>
                        </a>
                    </template>
                </div>
            </div>

            @auth
                @if (auth()->user()->isAdmin())
                    <a href="{{ route('products.create') }}"
                       class="inline-flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-lg shadow hover:bg-green-700 hover:shadow-lg transform hover:scale-105 transition-all group">
                        <i data-lucide="plus-circle" class="w-5 h-5 group-hover:rotate-180 transition-transform"></i>
                        Add Product
                    </a>
                @endif
            @endif
        </div>

        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Products</h1>
            <button @click="view = (view === 'card' ? 'table' : 'card')"
                    class="flex items-center gap-2 bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg transition transform hover:scale-105">
                <i :data-lucide="view === 'card' ? 'table' : 'layout-grid'" class="w-5 h-5"></i>
                <span x-text="view === 'card' ? 'Table View' : 'Card View'"></span>
            </button>
        </div>

        <!-- Card View -->
        <div x-show="view === 'card'" x-transition>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4 flex flex-col">
                        <a href="{{ route('products.show', [$product->id]) }}">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                 class="rounded-lg w-full h-48 object-cover mb-4 hover:scale-105 transition-transform">
                        </a>
                        <div class="flex-grow">
                            <h2 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h2>
                            <p class="inline-block text-xs my-3 font-medium text-green-800 bg-blue-300/50 px-3 py-1 rounded-full backdrop-blur-sm border border-gray-300/30 shadow-sm">
                                {{ $product->category->name }}
                            </p>
                            <p class="text-gray-700 mb-2 line-clamp-2">{{ $product->description }}</p>
                            @auth
                                @if (auth()->user()->isAdmin())
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-green-600 font-medium">₹{{ $product->price }}</span>
                                <span class="text-red-500 font-medium">{{ $product->discount }}% off</span>
                            </div>
                                @endif
                            @endauth
                        </div>
                        @auth
                            @if (auth()->user()->isAdmin())
                                <div class="flex justify-between items-center pt-3 border-t">
                                    <a href="{{ route('products.edit', $product) }}"
                                       class="text-blue-600 hover:text-blue-800 transition transform hover:scale-110">
                                        <i data-lucide="edit-3" class="w-5 h-5"></i>
                                    </a>
                                    <button
                                        @click.prevent="show = true; deleteUrl = '{{ route('products.destroy', $product) }}'; productName = '{{ $product->name }}'"
                                        class="text-red-500 hover:text-red-700 transition transform hover:scale-110">
                                        <i data-lucide="trash-2" class="w-5 h-5"></i>
                                    </button>
                                </div>
                            @endif
                        @endauth
                    </div>
                @endforeach
            </div>
            <div class="mt-6">
                {{ $products->links() }}
            </div>
        </div>

        <!-- Table View -->
        <div x-show="view === 'table'" x-transition>
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden mt-6">
                <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left">Image</th>
                    <th class="px-4 py-3 text-left">Name</th>
                    <th class="px-4 py-3 text-left">Category</th>
                    <th class="px-4 py-3 text-left">Price</th>
                    <th class="px-4 py-3 text-left">Discount</th>
                    @auth
                        @if (auth()->user()->isAdmin())
                            <th class="px-4 py-3 text-left">Actions</th>
                        @endif
                    @endauth
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="px-4 py-3">
                            <a href="{{ route('products.show', [$product->id]) }}">
                                <img src="{{ asset('storage/' . $product->image) }}"
                                     class="w-16 h-16 rounded object-cover">
                            </a>
                        </td>
                        <td class="px-4 py-3">{{ $product->name }}</td>
                        <td class="px-4 py-3">{{ $product->category->name }}</td>
                        <td class="px-4 py-3">₹{{ $product->price }}</td>
                        <td class="px-4 py-3">{{ $product->discount }}%</td>
                        @auth
                            @if (auth()->user()->isAdmin())
                                <td class="px-4 py-3 space-x-2">
                                    <a href="{{ route('products.edit', $product) }}"
                                       class="text-blue-600 hover:text-blue-800 transition transform hover:scale-110">
                                        <i data-lucide="edit-3" class="w-5 h-5 inline"></i>
                                    </a>
                                    <button
                                        @click.prevent="show = true; deleteUrl = '{{ route('products.destroy', $product) }}'; productName = '{{ $product->name }}'"
                                        class="text-red-500 hover:text-red-700 transition transform hover:scale-110">
                                        <i data-lucide="trash-2" class="w-5 h-5 inline"></i>
                                    </button>
                                </td>
                            @endif
                        @endauth
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-6">
                {{ $products->links() }}
            </div>

        </div>

        <!-- Delete Modal -->
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
                    <h2 class="text-xl font-semibold text-gray-800">Delete Product</h2>
                </div>

                <p class="text-gray-600 mb-4">
                    Are you sure you want to delete
                    <span class="font-bold text-red-600" x-text="productName"></span>?
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
        document.addEventListener('alpine:init', () => {
            Alpine.effect(() => {
                lucide.createIcons();
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });

        function productPage() {
            return {
                view: 'card',
                show: false,
                deleteUrl: '',
                productName: '',
                initLucide() {
                    lucide.createIcons();
                    this.$watch('view', () => this.$nextTick(() => lucide.createIcons()));
                    this.$watch('show', () => this.$nextTick(() => lucide.createIcons()));
                }
            }
        }
    </script>
</x-layouts.app>
