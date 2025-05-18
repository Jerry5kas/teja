<div class="relative w-full h-[60vh] overflow-hidden">
    <img src="{{ asset('images/banner-1.jpg') }}" alt="Banner Image"
         class="w-full h-full object-cover animate-fadeZoom rounded-md" />

    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white to-slate-400 text-center drop-shadow-lg animate-fadeIn">
            Welcome to Teja Group of Companies
        </h1>
    </div>
</div>

<style>
    @keyframes fadeZoom {
        0% { opacity: 0; transform: scale(1.1); }
        100% { opacity: 1; transform: scale(1); }
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .animate-fadeZoom {
        animation: fadeZoom 2s ease-in-out forwards;
    }

    .animate-fadeIn {
        animation: fadeIn 1.2s ease-out forwards;
    }
</style>
