<style>
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }
    @keyframes fadeSlideIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-slide-in {
        animation: fadeSlideIn 1s ease-out forwards;
    }
</style>

<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" class="bg-white text-gray-800">
    <div class="max-w-3xl mx-auto w-full p-8 rounded-2xl shadow-lg bg-white border border-gray-200">
        <div :class="{ 'fade-in': true, 'show': show }">
            <h2 class="text-4xl font-extrabold text-center mb-6 bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 bg-clip-text text-transparent drop-shadow-xl fade-slide-in">
                Why Choose Us?
            </h2>
            <p class="text-center text-gray-600 mb-8">
                We believe in empowering individuals and businesses through knowledge and expert guidance. Our team is
                dedicated to providing:
            </p>

            <div class="space-y-4">
                <div
                    class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg shadow transition transform hover:scale-[1.02] duration-300">
                    <p class="text-gray-800 font-medium">🎯 Career counseling and recruitment strategies</p>
                </div>
                <div
                    class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg shadow transition transform hover:scale-[1.02] duration-300">
                    <p class="text-gray-800 font-medium">💰 Financial education for professionals and investors</p>
                </div>
                <div
                    class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg shadow transition transform hover:scale-[1.02] duration-300">
                    <p class="text-gray-800 font-medium">🏢 Business consulting to enhance operational efficiency</p>
                </div>
            </div>

            <div class="mt-8 text-center fade-in" :class="{ 'show': show }">
                <p class="text-lg font-semibold text-gray-700">
                    Partner with <span class="text-blue-600 font-bold">Teja Consultancy</span> and unlock new
                    opportunities for success!
                </p>
            </div>
        </div>
    </div>
</div>

{{--<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>--}}
