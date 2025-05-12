<div class="flex h-screen w-full flex-1 flex-col gap-4 rounded-xl justify-between">

    <div class="lg:h-96">
        <div class="relative">
            <!-- Background Image with smooth fade effect -->
            <img src="{{ asset('images/banner-1.jpg') }}" alt="Banner"
                 class="w-full opacity-80 object-cover h-96 object-center transition-opacity duration-700 ease-in-out hover:opacity-90" />

            <!-- Centered Search Bar -->
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="relative w-80 float-animate">
                    <input
                        type="text"
                        placeholder="Search..."
                        class="w-full px-4 py-2 pl-10 bg-white/10 text-white placeholder-white/70 border border-white/20 rounded-full backdrop-blur-md shadow-lg focus:outline-none focus:ring-2 focus:ring-cyan-400 transition"
                    />
                    <i
                        data-lucide="search"
                        class="absolute left-3 top-1/2 -translate-y-1/2 text-white/70 w-5 h-5"
                    ></i>
                </div>
            </div>

        </div>
    </div>

    <div>
        {{$slot}}
    </div>


</div>
