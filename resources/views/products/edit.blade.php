<x-layouts.app :title="__('Create Product')">
    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="max-w-xl mx-auto mt-16 bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
        <div class="flex items-center mb-6">
            <i data-lucide="{{ isset($product) ? 'edit' : 'package-plus' }}" class="w-6 h-6 text-green-500 mr-2 animate-bounce"></i>
            <h2 class="text-2xl font-bold text-gray-800">{{ isset($product) ? 'Edit Product' : 'Create Product' }}</h2>
        </div>

        <form
            action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6"
        >
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            <div>
                <label class="block text-sm font-medium mb-1">Category</label>
                <select name="category_id" class="w-full border border-gray-300 p-3 rounded-lg" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}"
                       class="w-full border border-gray-300 p-3 rounded-lg" required>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Description</label>
                <textarea name="description" rows="3" class="w-full border border-gray-300 p-3 rounded-lg"
                          required>{{ old('description', $product->description ?? '') }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Price (₹)</label>
                    <input type="number" step="0.01" name="price"
                           value="{{ old('price', $product->price ?? '') }}"
                           class="w-full border border-gray-300 p-3 rounded-lg" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Discount (%)</label>
                    <input type="number" step="0.01" name="discount"
                           value="{{ old('discount', $product->discount ?? '') }}"
                           class="w-full border border-gray-300 p-3 rounded-lg">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Image</label>
                <input type="file" name="image" class="w-full border border-gray-300 p-3 rounded-lg">
                @if(isset($product))
                    <img src="{{ asset('storage/' . $product->image) }}" class="mt-2 w-24 h-24 object-cover rounded-lg">
                @endif
            </div>

            <button type="submit"
                    class="flex items-center justify-center gap-2 bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-700 hover:shadow-lg transform hover:scale-105 transition-all duration-300 group">
                <i data-lucide="save" class="w-5 h-5 group-hover:rotate-180 group-hover:scale-125 transition-transform"></i>
                {{ isset($product) ? 'Update Product' : 'Save Product' }}
            </button>
        </form>
    </div>

    <script>
        lucide.createIcons();
    </script>
</x-layouts.app>
