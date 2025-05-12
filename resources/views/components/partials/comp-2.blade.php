<div class="py-16 space-y-6">

    <div class="text-center py-12">
        <h2 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-violet-500 animate-gradient-text">
            Our Services
        </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div x-data="{ hovered: false }"
             x-intersect.once="$el.classList.add('fade-in-up')"
             @mouseenter="hovered = true"
             @mouseleave="hovered = false"
             class="max-w-md mx-auto bg-white border border-gray-200 rounded-2xl p-6 shadow-md transition-all duration-500 transform hover:-translate-y-2 hover:shadow-xl relative overflow-hidden group">

            <!-- Animated Glow on Hover -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-300 opacity-0 group-hover:opacity-20 rounded-2xl transition duration-500 blur-sm"></div>

            <!-- Icon -->
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-gray-200 p-3 rounded-full transition duration-300 group-hover:bg-gray-300">
                    <i data-lucide="user-check"
                       :class="hovered ? 'animate-bounce' : ''"
                       class="w-6 h-6 text-gray-700"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Expert HR Solutions</h3>
            </div>

            <!-- Description -->
            <p class="text-gray-600 font-light leading-relaxed">
                We help businesses find top talent, optimize workforce management, and enhance organizational growth.
            </p>
        </div>
        <!-- Card -->
        <div x-data="{ hovered: false }"
             x-intersect.once="$el.classList.add('fade-in-up')"
             @mouseenter="hovered = true"
             @mouseleave="hovered = false"
             class="max-w-md mx-auto bg-white border border-gray-200 rounded-2xl p-6 shadow-md transition-all duration-500 transform hover:-translate-y-2 hover:shadow-xl relative overflow-hidden group">

            <!-- Hover Glow Effect -->
            <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-300 opacity-0 group-hover:opacity-20 rounded-2xl transition duration-500 blur-sm"></div>

            <!-- Icon and Title -->
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-gray-200 p-3 rounded-full transition duration-300 group-hover:bg-gray-300">
                    <i data-lucide="banknote"
                       :class="hovered ? 'animate-pulse' : ''"
                       class="w-6 h-6 text-gray-700"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Financial Management Services</h3>
            </div>

            <!-- Description -->
            <p class="text-gray-600 font-light leading-relaxed">
                From investment planning to risk assessment, we provide expert guidance for financial stability and growth.
            </p>
        </div>

        <div x-data="{ hovered: false }"
             x-intersect.once="$el.classList.add('fade-in-up')"
             @mouseenter="hovered = true"
             @mouseleave="hovered = false"
             class="max-w-md mx-auto bg-white border border-gray-200 rounded-2xl p-6 shadow-md transition-all duration-500 transform hover:-translate-y-2 hover:shadow-xl relative overflow-hidden group">

            <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-300 opacity-0 group-hover:opacity-20 rounded-2xl transition duration-500 blur-sm"></div>

            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-gray-200 p-3 rounded-full transition duration-300 group-hover:bg-gray-300">
                    <i data-lucide="land-plot"
                       :class="hovered ? 'animate-ping' : ''"
                       class="w-6 h-6 text-gray-700"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Real Estate & Agriculture Advisory</h3>
            </div>

            <p class="text-gray-600 font-light leading-relaxed">
                Our expertise in agricultural land investment and development ensures profitable and sustainable projects.
            </p>
        </div>

        <div x-data="{ hovered: false }"
             x-intersect.once="$el.classList.add('fade-in-up')"
             @mouseenter="hovered = true"
             @mouseleave="hovered = false"
             class="max-w-md mx-auto bg-white border border-gray-200 rounded-2xl p-6 shadow-md transition-all duration-500 transform hover:-translate-y-2 hover:shadow-xl relative overflow-hidden group">

            <div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-300 opacity-0 group-hover:opacity-20 rounded-2xl transition duration-500 blur-sm"></div>

            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-gray-200 p-3 rounded-full transition duration-300 group-hover:bg-gray-300">
                    <i data-lucide="line-chart"
                       :class="hovered ? 'animate-pulse' : ''"
                       class="w-6 h-6 text-gray-700"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800">Customized Business Strategies</h3>
            </div>

            <p class="text-gray-600 font-light leading-relaxed">
                We analyze market trends to help businesses scale efficiently.
            </p>
        </div>


    </div>
</div>
