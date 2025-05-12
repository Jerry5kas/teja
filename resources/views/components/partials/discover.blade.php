<style>
    /* Internal CSS for Tailwind-style custom animations */

    .pulse-slow {
        animation: pulse 6s ease-in-out infinite;
    }

    .bounce-slow {
        animation: bounce 3s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-6px);
        }
    }

</style>

<section class="relative py-16 px-6 sm:px-12 bg-white overflow-hidden">
    <!-- Background Icon Animation -->
    <div class="absolute inset-0 flex items-center justify-center opacity-5 z-0 pointer-events-none animate-pulse-slow">
        <i data-lucide="globe" class="w-[300px] h-[300px] text-indigo-200"></i>
    </div>

    <!-- Content Wrapper -->
    <div class="relative z-10 max-w-6xl mx-auto text-center">
        <!-- Header -->
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-8 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
            Discover Teja Group of Companies
        </h2>

        <!-- Description with Icon and Image -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-left my-20">
            <!-- Left: GIF or Image with Icon -->
            <div class="relative">
                <div class="absolute -top-4 -left-4 bg-indigo-100 rounded-full p-3 animate-bounce-slow">
                    <i data-lucide="rocket" class="text-indigo-600 w-6 h-6"></i>
                </div>
                <img src="{{ asset('images/teja-mission.webp') }}"
                     alt="Teja Group Mission"
                     class="rounded-xl shadow-lg border">
            </div>

            <!-- Right: Text and Icons -->
            <div class="space-y-4">
                <p class="text-lg text-gray-700 leading-relaxed">
                    At <span class="font-semibold text-indigo-600">Teja Group of Companies</span>, we strive to provide
                    comprehensive business solutions tailored to your needs. Our commitment is to support your growth
                    through innovative strategies in various sectors.
                </p>

                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <i data-lucide="settings" class="w-5 h-5 text-indigo-500"></i>
                        <span class="text-gray-800">Custom Business Solutions</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="users" class="w-5 h-5 text-purple-500"></i>
                        <span class="text-gray-800">Client-Centered Approach</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="trending-up" class="w-5 h-5 text-pink-500"></i>
                        <span class="text-gray-800">Growth-Oriented Strategies</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
