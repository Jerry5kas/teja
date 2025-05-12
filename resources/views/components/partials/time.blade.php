<!-- Working Hours Section -->
<div class="flex flex-col justify-center items-center gap-x-16 p-5">
    <!-- Communication Section -->
    <div class= "w-1/2 flex-1 bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 text-center space-y-6">
        <!-- Header -->
        <h2 class="text-3xl font-extrabold text-gray-800 flex justify-center items-center gap-3 animate-fade-in">
            <svg class="w-8 h-8 text-green-500 animate-ping-slow" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 10h.01M12 14h.01M16 10h.01M21 12c0 4.97-4.03 9-9 9S3 16.97 3 12 7.03 3 12 3s9 4.03 9 9z" />
            </svg>
            Communication is the Key
        </h2>

        <!-- Body Text -->
        <p class="text-gray-600 text-lg leading-relaxed animate-fade-in delay-100">
            We strive to stay in communication with our clients. Have a question about our business,
            or want to see if we match your specific needs? Send us a message or give us a call.
            We're always happy to meet new customers!
        </p>

        <!-- WhatsApp Button -->
        <div>
            <a href="https://wa.me/+917207192562" target="_blank"
               class="inline-flex items-center gap-3 bg-green-500 text-white text-base font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 animate-bounce-slow">
                <svg class="w-5 h-5 text-white animate-spin-slow" fill="currentColor" viewBox="0 0 32 32">
                    <path d="M16 3C9.4 3 4 8.4 4 15c0 2.7.9 5.2 2.4 7.3L4 29l7-2.3C13.2 28 14.6 28 16 28c6.6 0 12-5.4 12-12S22.6 3 16 3zM16 26c-1.2 0-2.4-.2-3.5-.6l-.5-.2-4.2 1.4 1.4-4.1-.3-.6C8.4 20 8 17.6 8 15c0-4.4 3.6-8 8-8s8 3.6 8 8-3.6 8-8 8z" />
                </svg>
                Contact Us on WhatsApp
            </a>
        </div>
    </div>
    <div class=" w-1/2 bg-white rounded-2xl shadow-xl p-8 mt-10">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6 flex items-center justify-center gap-3">
            <svg class="w-7 h-7 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Working Hours
        </h2>

        <ul id="working-hours" class="space-y-3 text-gray-700 text-base font-medium">
            <!-- JavaScript injects items here -->
        </ul>
    </div>

</div>


<!-- Script to render and highlight current day -->
<script>
    const workingHours = [
        { day: "Sunday", time: "Closed", icon: `<svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M9 16h6"/></svg>` },
        { day: "Monday", time: "9:00 AM – 6:00 PM", icon: `<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M5 11h14M5 19h14M5 15h14" /></svg>` },
        { day: "Tuesday", time: "9:00 AM – 6:00 PM", icon: `<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M5 11h14M5 19h14M5 15h14" /></svg>` },
        { day: "Wednesday", time: "9:00 AM – 6:00 PM", icon: `<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M5 11h14M5 19h14M5 15h14" /></svg>` },
        { day: "Thursday", time: "9:00 AM – 6:00 PM", icon: `<svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M5 11h14M5 19h14M5 15h14" /></svg>` },
        { day: "Friday", time: "9:00 AM – 5:00 PM", icon: `<svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3 -3v6m-7 6h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>` },
        { day: "Saturday", time: "10:00 AM – 2:00 PM", icon: `<svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m-9-2a9 9 0 1118 0 9 9 0 01-18 0z" /></svg>` }
    ];

    const today = new Date().toLocaleDateString("en-US", { weekday: "long" });
    const list = document.getElementById("working-hours");

    workingHours.forEach(({ day, time, icon }) => {
        const isToday = day === today;
        const li = document.createElement("li");

        li.className = `
      flex items-center justify-between p-4 rounded-xl transition-all duration-300 border border-gray-100
      ${isToday ? "bg-blue-50 shadow-md animate-fade-in" : "hover:bg-gray-50"}
    `;

        li.innerHTML = `
      <div class="flex items-center gap-3">
        ${icon}
        <span class="font-semibold">${day}</span>
      </div>
      <span class="text-sm text-gray-600">${time}</span>
    `;

        list.appendChild(li);
    });
</script>
