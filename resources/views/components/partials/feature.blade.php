<div class="bg-gradient-to-b from-white to-gray-100 py-12 px-4">
    <h2 class="text-4xl font-extrabold text-center mb-10 bg-gradient-to-r from-indigo-600 to-cyan-400 text-transparent bg-clip-text flex items-center justify-center gap-2">
        <span class="spin text-yellow-400 text-3xl">⭐</span>
        Featured Products
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-items-center">
        <div class="w-40 h-60 rounded-xl overflow-hidden shadow-lg transform transition hover:scale-105 bounce-slow">
            <img src="{{ asset('images/feat1.jpeg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-40 h-60 rounded-xl overflow-hidden shadow-lg transform transition hover:scale-105 pulse-slow">
            <img src="{{ asset('images/feat2.jpeg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-40 h-60 rounded-xl overflow-hidden shadow-lg transform transition hover:scale-105 bounce-slow">
            <img src="{{ asset('images/feat3.jpeg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-40 h-60 rounded-xl overflow-hidden shadow-lg transform transition hover:scale-105 pulse-slow">
            <img src="{{ asset('images/feat4.jpeg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-40 h-60 rounded-xl overflow-hidden shadow-lg transform transition hover:scale-105 bounce-slow">
            <img src="{{ asset('images/feat5.jpeg') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="w-40 h-60 rounded-xl overflow-hidden shadow-lg transform transition hover:scale-105 pulse-slow">
            <img src="{{ asset('images/feat6.jpeg') }}" alt="" class="w-full h-full object-cover">
        </div>
    </div>
    <div class="mt-8 flex justify-center">
        <a href="{{route('asset')}}"
            class="group flex items-center gap-2 bg-gradient-to-r from-indigo-500 to-cyan-400 text-white px-6 py-3 rounded-full shadow-lg font-semibold transition-all duration-300 hover:from-indigo-600 hover:to-cyan-500 hover:scale-105">
            <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
            Visit Page
        </a>
    </div>

</div>

<style>
    @keyframes pulse-slow {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    @keyframes bounce-slow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-8px);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .pulse-slow {
        animation: pulse-slow 6s ease-in-out infinite;
    }

    .bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }

    .spin {
        animation: spin 3s linear infinite;
        display: inline-block;
    }
</style>
