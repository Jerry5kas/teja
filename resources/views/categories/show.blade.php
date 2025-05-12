<x-layouts.app :title="__('Categories')">

    <div class="max-w-md mx-auto mt-10">
        <h2 class="text-xl font-semibold mb-4">Category Details</h2>

        <div class="p-4 bg-gray-100 rounded">
            <p><strong>Name:</strong> {{ $category->name }}</p>
            <p><strong>Created At:</strong> {{ $category->created_at->format('d M Y') }}</p>
        </div>
    </div>
</x-layouts.app>
