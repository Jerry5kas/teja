<style>
    /* Keyframes */
    @keyframes spin-slow {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes ping-slow {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        75%, 100% {
            transform: scale(2);
            opacity: 0;
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

    @keyframes fade-in {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Animation Classes */
    .animate-spin-slow {
        animation: spin-slow 4s linear infinite;
    }

    .animate-ping-slow {
        animation: ping-slow 2s cubic-bezier(0, 0, 0.2, 1) infinite;
    }

    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }

    .animate-fade-in {
        animation: fade-in 1.5s ease-in-out forwards;
    }

    /* Optional delay utility */
    .delay-100 {
        animation-delay: 0.1s;
    }
</style>

<div class="bg-gray-100 py-12 px-6 md:px-20 flex items-center gap-x-16 justify-between">

    <!-- Appointment Section -->
    <div
        class="flex-1 bg-white p-6 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 relative overflow-hidden group">
        <!-- Decorative Badge -->
        <div
            class="absolute top-4 right-4 bg-blue-100 text-blue-600 text-xs font-bold px-3 py-1 rounded-full shadow-sm animate-bounce">
            Free Session
        </div>

        <!-- Heading -->
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6 flex justify-center items-center gap-2">
            <svg class="w-7 h-7 text-blue-500 animate-pulse" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            Book Your Appointment
        </h2>

        <!-- Image + Info -->
        <div class="flex flex-col items-center gap-4 mb-6">
            <img src="{{ asset('images/apt.jpg') }}" alt="Appointment"
                 class="w-48 h-28 object-cover rounded-lg shadow-md">
            <div class="flex-1">
                <p class="text-gray-700 font-medium mb-1">Get personalized guidance from industry experts.</p>
                <p class="text-sm text-gray-500">Duration: <strong>1 Hour</strong> | Mode: <strong>Online or
                        In-person</strong></p>
                <div class="mt-4 space-y-4 text-sm flex flex-col justify-center items-center text-gray-700">
                    <!-- Item 1 -->
                    <div class="flex items-start gap-3 animate-fade-in">
                        <svg class="w-5 h-5 text-blue-500 animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M5 13l4 4L19 7" />
                        </svg>
                        <span>One-on-one consultation</span>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex items-start gap-3 animate-fade-in delay-100">
                        <svg class="w-5 h-5 text-green-500 animate-pulse" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Business & Career Advice</span>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex items-start gap-3 animate-fade-in delay-200">
                        <svg class="w-5 h-5 text-purple-500 animate-spin-slow" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11 17a4 4 0 100-8 4 4 0 000 8z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Detailed analysis & solutions</span>
                    </div>
                </div>

            </div>
            <button
                class="flex items-center gap-2 bg-gradient-to-r from-blue-500 to-cyan-500 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:scale-105 hover:shadow-xl transition-all duration-300 group-hover:animate-pulse">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                Book Now
            </button>

        </div>

        <!-- CTA Button -->

        <!-- Subtext -->
        <p class="text-xs text-gray-400 mt-4">Limited slots available. Book early to confirm your time!</p>
    </div>


    <!-- Contact Form -->
    <div class="bg-white bg-opacity-80 backdrop-blur-md p-8 rounded-xl shadow-lg transition-all duration-500">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-green-500 animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 10l-6-6M3 21h18a2 2 0 002-2V7a2 2 0 00-2-2H9L3 9v10a2 2 0 002 2z"/>
            </svg>
            Contact Us
        </h2>
        <p class="text-gray-600 mb-6">Get in Touch</p>
        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data" class="grid gap-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" required
                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required
                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" required
                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" required
                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Attach File</label>
                <input type="file" name="file" required
                       class="w-full mt-1 p-1 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>
            <div>
        <textarea name="message" rows="4" placeholder="Message" required
                  class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>
            <div class="flex items-start gap-2">
                <input type="checkbox" name="is_signup" value="1" class="mt-1">
                <span class="text-sm text-gray-600">Sign up for our email list for updates, promotions, and more.</span>
            </div>
            <div>
                <button type="submit"
                        class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-2 rounded-full font-semibold hover:scale-105 transition-transform duration-300 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    Submit
                </button>
            </div>
        </form>


        {{--        <form action="" class="grid gap-4">--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700">Name</label>--}}
{{--                <input type="text"--}}
{{--                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700">Email</label>--}}
{{--                <input type="email"--}}
{{--                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700">Phone</label>--}}
{{--                <input type="number"--}}
{{--                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700">Location</label>--}}
{{--                <input type="text"--}}
{{--                       class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700">Attach File</label>--}}
{{--                <input type="file"--}}
{{--                       class="w-full mt-1 p-1 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                    <textarea rows="4" placeholder="Message"--}}
{{--                              class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>--}}
{{--            </div>--}}
{{--            <div class="flex items-start gap-2">--}}
{{--                <input type="checkbox" class="mt-1">--}}
{{--                <span--}}
{{--                    class="text-sm text-gray-600">Sign up for our email list for updates, promotions, and more.</span>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <button type="submit"--}}
{{--                        class="bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-2 rounded-full font-semibold hover:scale-105 transition-transform duration-300 flex items-center gap-2">--}}
{{--                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"--}}
{{--                         viewBox="0 0 24 24">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round"--}}
{{--                              d="M5 13l4 4L19 7"/>--}}
{{--                    </svg>--}}
{{--                    Submit--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </form>--}}
    </div>

</div>
