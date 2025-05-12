<x-layouts.app :title="__('Product Details')">
    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="min-h-screen bg-gradient-to-b from-white to-gray-100 py-10 px-4">
        <div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-2xl animate-fade-in">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-2">
                    <i data-lucide="package" class="w-6 h-6 text-indigo-500"></i>
                    Product Details
                </h1>
                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 font-semibold px-5 py-2 rounded-lg hover:bg-indigo-200 shadow transition-all duration-300 transform hover:scale-105 group">
                    <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
                    Back to Products
                </a>
            </div>

            <!-- Main Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Image -->
                <div class="overflow-hidden rounded-xl shadow-md group">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                         class="w-full h-72 object-cover rounded-xl transform group-hover:scale-105 transition-all duration-500 ease-in-out">
                </div>

                <!-- Info -->
                <div class="space-y-6 text-gray-800">
                    <div>
                        <h2 class="text-lg font-semibold flex items-center gap-2 text-gray-700">
                            <i data-lucide="tag" class="w-5 h-5 text-blue-500"></i> Name
                        </h2>
                        <p class="text-xl">{{ $product->name }}</p>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold flex items-center gap-2 text-gray-700">
                            <i data-lucide="layers" class="w-5 h-5 text-pink-500"></i> Category
                        </h2>
                        <p class="text-lg">{{ $product->category->name }}</p>
                    </div>

                    <div>
                        <h2 class="text-lg font-semibold flex items-center gap-2 text-gray-700">
                            <i data-lucide="file-text" class="w-5 h-5 text-yellow-500"></i> Description
                        </h2>
                        <p class="text-gray-600 leading-relaxed">{{ $product->description }}</p>
                    </div>

                    <div class="flex gap-8">
                        <div>
                            <h2 class="text-lg font-semibold flex items-center gap-2 text-gray-700">
                                <i data-lucide="credit-card" class="w-5 h-5 text-green-500"></i> Price
                            </h2>
                            <p class="text-green-700 font-bold text-xl">₹{{ $product->price }}</p>
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold flex items-center gap-2 text-gray-700">
                                <i data-lucide="percent" class="w-5 h-5 text-red-500"></i> Discount
                            </h2>
                            <p class="text-red-600 font-bold text-xl">{{ $product->discount }}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fade-in Animation -->
    <style>
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
    </style>

    <script>
        lucide.createIcons();
    </script>
</x-layouts.app>
