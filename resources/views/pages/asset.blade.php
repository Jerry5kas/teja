<x-layouts.app :title="__('Dashboard')">

    <x-partials.top-banner />
<div class="bg-white py-12 px-6">
    <h2 class="text-4xl py-8 font-extrabold text-center mb-8 bg-gradient-to-r from-indigo-600 to-cyan-400 text-transparent bg-clip-text">
        🎥 Watch Our Videos
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-items-center">
        <!-- Video 1 -->
        <div class="w-full max-w-md shadow-lg rounded-2xl overflow-hidden transform transition hover:scale-105 hover:shadow-2xl animate-fadeIn">
            <video class="w-full h-96" controls>
                <source src="{{ asset('videos/teja-1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Video 2 -->
        <div class="w-full max-w-md h-96 shadow-lg rounded-2xl overflow-hidden transform transition hover:scale-105 hover:shadow-2xl animate-fadeIn">
            <video class="w-full h-96" controls>
                <source src="{{ asset('videos/teja-2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
</x-layouts.app>
<!-- Tailwind CSS Animations (Internal CSS or <style> block) -->
<style>
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeIn {
        animation: fadeIn 1.2s ease-in-out both;
    }
</style>
