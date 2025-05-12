<div>
    <div
        class=" mt-10 bg-gray-100 p-8 flex flex-col space-y-5 justify-between mx-auto animate-fade-in">

        <!-- Company Info -->
        <div class="flex items-center justify-center gap-x-6 text-center md:text-left md:items-center">
            <img src="{{ asset('images/logo.jpg') }}" alt="Company Logo" class="w-16 h-16 rounded-full shadow-md mb-3">

            <div class="flex-col flex">
                <h3 class="text-xl font-bold text-gray-800 flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M20 13V5a2 2 0 00-2-2H6a2 2 0 00-2 2v8"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 15l8 5 8-5"/>
                    </svg>
                    Teja Group of Companies
                </h3>

                <p class="text-sm text-gray-600 flex items-center gap-1">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16 12a4 4 0 01-8 0m8 0a4 4 0 00-8 0m8 0a4 4 0 01-8 0M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    info@tejagroupofcompanies.com
                </p>
            </div>
        </div>

        <!-- Newsletter Form -->
        <div class="w-full md:w-2/3 flex flex-col-reverse  justify-center items-center gap-6">

            <form class="flex flex-col sm:flex-row items-center gap-4">
                <input
                    type="email"
                    placeholder="Enter your email"
                    class="flex-1 px-8 w-80 py-2 rounded-full bg-transparent border border-gray-300 focus:ring-2 focus:ring-blue-300 text-sm text-gray-800 placeholder-gray-400 transition-all duration-300"
                />
                <button
                    type="submit"
                    class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-semibold shadow-lg hover:scale-105 hover:shadow-xl transition-all duration-300"
                >
                    <svg class="w-4 h-4 text-white animate-pulse" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5 13l4 4L19 7"/>
                    </svg>
                    Subscribe
                </button>
            </form>

            <div>
                <h4 class="text-xl font-semibold text-gray-800 flex items-center gap-2 mb-1">
                    <svg class="w-5 h-5 text-gray-600 animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 14a1 1 0 01-.7-.3l-5-5a1 1 0 011.4-1.4L10 11.59l4.3-4.3a1 1 0 011.4 1.42l-5 5A1 1 0 0110 14z"
                              clip-rule="evenodd"/>
                    </svg>

                    Subscribe With Us
                </h4>
                <p class="text-sm text-gray-600 mb-4">Sign up to hear our latest news and updates</p>
            </div>
        </div>
    </div>

    <!-- Sticky Footer -->
    <div class="w-full  px-4 py-3 flex items-center justify-evenly space-y-2 md:space-y-0">


        <!-- Copyright -->
        <div class="text-sm text-gray-600">
            © 2025 Teja Group of Companies — All Rights Reserved.
        </div>

        <!-- Social Media Icons -->
        <div class="flex space-x-4">
            <a href="#" class="text-gray-500 hover:text-blue-600 transition-transform transform hover:scale-110">
                <i data-lucide="facebook" class="w-5 h-5"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-pink-500 transition-transform transform hover:scale-110">
                <i data-lucide="instagram" class="w-5 h-5"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-blue-700 transition-transform transform hover:scale-110">
                <i data-lucide="linkedin" class="w-5 h-5"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-red-600 transition-transform transform hover:scale-110">
                <i data-lucide="youtube" class="w-5 h-5"></i>
            </a>
        </div>
    </div>

    <!-- Load Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>


</div>
