
<!-- ==========================================
     NEWSLETTER SECTION
========================================== -->

<section class="bg-[#1b2141] border-b border-[#343a58] py-8">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

            <div class="w-full lg:w-2/3">

                <h2 class="text-lg font-bold text-white">
                    Get the latest healthcare job alerts delivered to your inbox
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    Join 50,000+ healthcare professionals.
                    No spam, unsubscribe anytime.
                </p>

            </div>

            <form action="{{ route('newsletter.subscribe') }}"
                  method="POST"
                  class="w-full lg:w-auto flex flex-col sm:flex-row gap-2">

                @csrf

                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                    class="w-full sm:w-72 px-4 py-3 rounded-lg
                           border border-gray-600 bg-[#303650]
                           text-white text-sm placeholder-gray-400
                           focus:outline-none focus:ring-2
                           focus:ring-teal-500"
                >

                <button
                    type="submit"
                    class="px-6 py-3 rounded-lg
                           bg-gradient-to-r from-[#52658d] to-[#36b69c]
                           hover:opacity-90 text-white text-sm
                           font-bold transition duration-300">

                    Subscribe

                </button>

            </form>

        </div>

        @if(session('success'))
            <p class="text-green-400 text-sm mt-3">
                {{ session('success') }}
            </p>
        @endif

        @if(session('error'))
            <p class="text-red-400 text-sm mt-3">
                {{ session('error') }}
            </p>
        @endif

    </div>
</section>


<!-- ==========================================
     MAIN FOOTER
========================================== -->

<footer class="bg-[#1b2141] text-white">

    <div class="max-w-7xl mx-auto px-5 lg:px-8 pt-12 pb-7">


        <!-- FOOTER MAIN GRID -->

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-[35%_repeat(3,minmax(0,1fr))] gap-10 lg:gap-8">

            <!-- COMPANY INFORMATION -->

            <div>

                <!-- LOGO -->
                <a href="https://www.vaidyog.com/"
                   class="inline-flex items-center mb-5">

                    <!-- Replace with your actual logo filename -->
                    <img
                        src="{{ asset('images/vaidyog-logo.png') }}"
                        alt="Vaidyog Logo"
                        class="w-32 h-auto object-contain"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='block';"
                    >

                    <span class="hidden text-3xl font-extrabold tracking-tight text-white">
                        VAIDYOG
                    </span>

                </a>


                <!-- DESCRIPTION -->

                <p class="text-gray-400 text-sm leading-[1.7] mb-4">

                    Vaidyog is India's leading healthcare job portal connecting
                    doctors, nurses, pharmacists, and allied health professionals
                    with top hospitals and clinics across 500+ cities.

                </p>


                <!-- CONTACT DETAILS -->

                <div class="space-y-3">

                    <a href="mailto:contact@vaidyog.com"
                       class="flex items-center gap-3 text-gray-400
                              hover:text-white text-sm transition">

                        <i class="fa-regular fa-envelope text-teal-400"></i>

                        contact@vaidyog.com

                    </a>


                    <div class="flex items-center gap-3 text-gray-400 text-sm">

                        <i class="fa-solid fa-location-dot text-teal-400"></i>

                        India

                    </div>

                </div>


                <!-- SOCIAL MEDIA -->

                <div class="flex items-center gap-3 mt-5">

                    <a href="#"
                       aria-label="LinkedIn"
                       class="w-9 h-9 flex items-center justify-center
                              rounded-lg bg-[#292f4e] text-gray-400
                              hover:bg-blue-600 hover:text-white
                              transition">

                        <i class="fa-brands fa-linkedin text-sm"></i>

                    </a>


                    <a href="#"
                       aria-label="Facebook"
                       class="w-9 h-9 flex items-center justify-center
                              rounded-lg bg-[#292f4e] text-gray-400
                              hover:bg-blue-600 hover:text-white
                              transition">

                        <i class="fa-brands fa-facebook text-sm"></i>

                    </a>


                    <a href="#"
                       aria-label="Instagram"
                       class="w-9 h-9 flex items-center justify-center
                              rounded-lg bg-[#292f4e] text-gray-400
                              hover:bg-pink-600 hover:text-white
                              transition">

                        <i class="fa-brands fa-instagram text-sm"></i>

                    </a>

                </div>

            </div>



            <!-- JOB SEEKERS -->

            <div>

                <h3 class="text-sm font-bold text-white uppercase mb-5">
                    For Job Seekers
                </h3>

                <ul class="space-y-3 text-sm text-gray-300">

                    <li>
                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="hover:text-white transition">
                            Browse Healthcare Jobs
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/register"
                           class="hover:text-white transition">
                            Register as Job Seeker
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/plans"
                           class="hover:text-white transition">
                            Job Seeker Plans
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/blogs"
                           class="hover:text-white transition">
                            Career Advice & Blog
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/best-healthcare-jobs?employment_type=full-time"
                           class="hover:text-white transition">
                            Full-Time Jobs
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/best-healthcare-jobs?employment_type=part-time"
                           class="hover:text-white transition">
                            Part-Time Jobs
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/best-healthcare-jobs?employment_type=contractual"
                           class="hover:text-white transition">
                            Contractual Jobs
                        </a>
                    </li>

                </ul>

            </div>



            <!-- RECRUITERS -->

            <div>

                <h3 class="text-sm font-bold text-white uppercase mb-5">
                    For Recruiters
                </h3>

                <ul class="space-y-3 text-sm text-gray-300">

                    <li>
                        <a href="https://www.vaidyog.com/recruiter/register"
                           class="hover:text-white transition">
                            Post Healthcare Jobs
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/recruiter/login"
                           class="hover:text-white transition">
                            Recruiter Login
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/plans"
                           class="hover:text-white transition">
                            Recruiter Plans & Pricing
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/recruiter/register"
                           class="hover:text-white transition">
                            Hospital Registration
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/recruiter/register"
                           class="hover:text-white transition">
                            Clinic Registration
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/blogs"
                           class="hover:text-white transition">
                            Hiring Tips
                        </a>
                    </li>

                </ul>

            </div>



            <!-- COMPANY LINKS -->

            <div>

                <h3 class="text-sm font-bold text-white uppercase mb-5">
                    Company
                </h3>

                <ul class="space-y-3 text-sm text-gray-300">

                    <li>
                        <a href="https://www.vaidyog.com/blogs"
                           class="hover:text-white transition">
                            Blog
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/terms"
                           class="hover:text-white transition">
                            Terms & Conditions
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/privacy"
                           class="hover:text-white transition">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/disclaimer"
                           class="hover:text-white transition">
                            Disclaimer
                        </a>
                    </li>

                    <li>
                        <a href="mailto:contact@vaidyog.com"
                           class="hover:text-white transition">
                            Contact Us
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/"
                           class="hover:text-white transition">
                            Account Deletion
                        </a>
                    </li>

                    <li>
                        <a href="https://www.vaidyog.com/"
                           class="hover:text-white transition">
                            Sitemap
                        </a>
                    </li>

                </ul>

            </div>

        </div>



        <!-- ======================================
             APP DOWNLOAD + POPULAR SEARCHES
        ======================================= -->

        <div class="border-t border-gray-700 mt-10 pt-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">


                <!-- DOWNLOAD APP -->

                <div>

                    <h3 class="text-sm font-bold text-white mb-4">
                        Download the Vaidyog App
                    </h3>

                    <p class="text-sm text-gray-400 mb-4">
                        Find healthcare jobs and manage your career on the go.
                    </p>


                    <div class="flex flex-wrap items-center gap-3">

                        <!-- GOOGLE PLAY -->

                        <a href="#"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="flex items-center gap-2 bg-black
                                  border border-gray-700 rounded-md
                                  px-3 py-2 text-white
                                  hover:bg-gray-900 transition">

                            <i class="fa-brands fa-google-play text-2xl"></i>

                            <span class="flex flex-col leading-tight">

                                <span class="text-[9px] uppercase">
                                    Get it on
                                </span>

                                <span class="text-base font-semibold">
                                    Google Play
                                </span>

                            </span>

                        </a>


                        <!-- APP STORE -->

                        <a href="#"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="flex items-center gap-2 bg-black
                                  border border-gray-700 rounded-md
                                  px-3 py-2 text-white
                                  hover:bg-gray-900 transition">

                            <i class="fa-brands fa-apple text-3xl"></i>

                            <span class="flex flex-col leading-tight">

                                <span class="text-[9px]">
                                    Available on the
                                </span>

                                <span class="text-base font-semibold">
                                    App Store
                                </span>

                            </span>

                        </a>

                    </div>

                </div>



                <!-- POPULAR SEARCHES -->

                <div>

                    <h3 class="text-sm font-bold text-white mb-4">
                        Popular Searches
                    </h3>

                    <div class="flex flex-wrap gap-2">

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Doctor Jobs
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Nursing Jobs
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Pharmacist Jobs
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Physiotherapy Jobs
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Hospital Jobs Delhi
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Healthcare Jobs Mumbai
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            MBBS Jobs India
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Ayurveda Jobs
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Lab Technician Jobs
                        </a>

                        <a href="https://www.vaidyog.com/best-healthcare-jobs"
                           class="px-3 py-2 rounded-full bg-[#292f4e]
                                  text-gray-400 text-xs
                                  hover:bg-blue-700 hover:text-white transition">
                            Radiology Jobs
                        </a>

                    </div>

                </div>

            </div>

        </div>



        <!-- ======================================
             COPYRIGHT SECTION
        ======================================= -->

        <div class="border-t border-gray-700 mt-10 pt-5">

            <div class="flex flex-col md:flex-row
                        justify-between items-center gap-4">


                <p class="text-xs text-gray-400 text-center">

                    © {{ date('Y') }} Vaidyog Healthcare Private Limited.
                    All rights reserved.

                </p>


                <div class="flex flex-wrap justify-center items-center
                            gap-x-4 gap-y-2 text-xs text-gray-500">

                    <a href="https://www.vaidyog.com/terms"
                       class="hover:text-white transition">
                        Terms
                    </a>

                    <a href="https://www.vaidyog.com/privacy"
                       class="hover:text-white transition">
                        Privacy
                    </a>

                    <a href="https://www.vaidyog.com/disclaimer"
                       class="hover:text-white transition">
                        Disclaimer
                    </a>

                    <span>
                        Made in India 🇮🇳
                    </span>

                    <span>

                        Powered by

                        <a href="https://www.obiikriationz.com/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="text-gray-300 hover:text-blue-400 transition">

                            Obii Kriationz Web LLP

                        </a>

                    </span>

                </div>

            </div>

        </div>

    </div>

</footer>
