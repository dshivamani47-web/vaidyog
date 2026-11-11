
@extends('layouts.app')

@section('title', 'MBBS Doctor Salary in India 2026 – Experience & City Wise Salary | Vaidyog')

@section('description', 'Explore MBBS doctor salary in India in 2026. Compare salary by experience, city, hospital type and career opportunities for medical graduates.')

@section('content')

<!-- HERO BANNER -->
<section class="relative overflow-hidden bg-gradient-to-r from-[#34466F] via-[#2F7F86] to-[#00A69A] py-20 md:py-24">
    <div class="absolute -left-16 bottom-[-100px] w-72 h-72 rounded-full bg-white/5"></div>
    <div class="absolute -right-16 -top-24 w-96 h-96 rounded-full bg-white/5"></div>

    <div class="relative max-w-7xl mx-auto px-8 text-center">
        <span class="inline-block text-white/80 text-sm font-semibold uppercase tracking-widest mb-4">
            Healthcare Salary Guide
        </span>

        <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
            MBBS Doctor Salary in India
        </h1>

        <p class="text-white/80 text-base md:text-xl mt-5 max-w-3xl mx-auto">
            Explore doctor salaries across India, compare earning opportunities and plan your medical career.
        </p>

        <div class="flex flex-wrap justify-center gap-3 mt-7">
            <span class="px-4 py-2 rounded-full bg-white/15 text-white text-sm">Salary Insights</span>
            <span class="px-4 py-2 rounded-full bg-white/15 text-white text-sm">Career Growth</span>
            <span class="px-4 py-2 rounded-full bg-white/15 text-white text-sm">Healthcare Jobs</span>
        </div>
    </div>
</section>


<!-- BREADCRUMB -->
<div class="max-w-7xl mx-auto px-8 pt-7">
    <nav class="flex flex-wrap items-center gap-2 text-sm text-gray-500">
        <a href="/" class="hover:text-[#00A69A]">Home</a>
        <span>/</span>
        <a href="/" class="hover:text-[#00A69A]">Salary Guides</a>
        <span>/</span>
        <span class="text-[#34466F] font-semibold">MBBS Doctor Salary</span>
    </nav>
</div>


<!-- MAIN CONTENT -->
<section class="max-w-7xl mx-auto px-8 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

        <!-- LEFT CONTENT -->
        <div class="lg:col-span-8 min-w-0">

            <!-- INTRODUCTION -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">
                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Salary Overview
                </span>

                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">
                    How Much Does an MBBS Doctor Earn in India?
                </h2>

                <p class="text-gray-600 text-sm md:text-base leading-7 mt-4">
                    MBBS doctors play an important role in India's healthcare system.
                    Their salaries depend on experience, medical specialization,
                    location, hospital type and professional responsibilities.
                </p>

                <p class="text-gray-600 text-sm md:text-base leading-7 mt-3">
                    Doctors can work in government hospitals, private hospitals,
                    clinics, healthcare organizations and medical institutions.
                    With experience and additional qualifications, their earning
                    opportunities may increase.
                </p>
            </div>


            <!-- SALARY OVERVIEW CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">

                <div class="bg-white border border-gray-200 rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-[#00A69A]/40">
                    <div class="w-10 h-10 rounded-lg bg-[#E8F7F5] flex items-center justify-center text-[#00A69A] mb-4">
                        <i class="fa-solid fa-wallet text-lg"></i>
                    </div>
                    <p class="text-sm text-gray-500">Entry-Level Salary</p>
                    <h3 class="text-2xl font-extrabold text-gray-900 mt-2">₹3–6 LPA</h3>
                    <p class="text-xs text-gray-400 mt-2">Indicative annual range</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-[#00A69A]/40">
                    <div class="w-10 h-10 rounded-lg bg-[#E8F7F5] flex items-center justify-center text-[#008F86] mb-4">
                        <i class="fa-solid fa-chart-line text-lg"></i>
                    </div>
                    <p class="text-sm text-gray-500">Experienced Doctors</p>
                    <h3 class="text-2xl font-extrabold text-gray-900 mt-2">₹8–15 LPA</h3>
                    <p class="text-xs text-gray-400 mt-2">Indicative annual range</p>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-[#00A69A]/40">
                    <div class="w-10 h-10 rounded-lg bg-[#E8F7F5] flex items-center justify-center text-[#008F86] mb-4">
                        <i class="fa-solid fa-user-doctor text-lg"></i>
                    </div>
                    <p class="text-sm text-gray-500">Senior Doctors</p>
                    <h3 class="text-2xl font-extrabold text-gray-900 mt-2">₹12–25+ LPA</h3>
                    <p class="text-xs text-gray-400 mt-2">Varies by role and experience</p>
                </div>

            </div>


            <!-- SALARY BY EXPERIENCE -->
            <div id="experience" class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">

                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Experience Wise Salary
                </span>

                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-3">
                    MBBS Doctor Salary by Experience
                </h2>

                <p class="text-gray-600 text-sm leading-7 mb-6">
                    Experience is an important factor in determining a doctor's earning
                    potential. Salary can increase with clinical exposure,
                    responsibilities and additional qualifications.
                </p>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[550px]">
                        <thead>
                            <tr class="bg-[#E8F7F5] text-[#34466F] text-sm">
                                <th class="p-4 rounded-l-lg">Experience</th>
                                <th class="p-4">Job Level</th>
                                <th class="p-4 rounded-r-lg">Estimated Salary</th>
                            </tr>
                        </thead>

                        <tbody class="text-sm">
                            <tr class="border-b border-gray-100 hover:bg-[#F0FAF9]">
                                <td class="p-4 font-medium text-gray-800">0–1 Years</td>
                                <td class="p-4 text-gray-600">Junior Doctor</td>
                                <td class="p-4 font-bold text-gray-900">₹3–6 LPA</td>
                            </tr>

                            <tr class="border-b border-gray-100 hover:bg-[#F0FAF9]">
                                <td class="p-4 font-medium text-gray-800">1–4 Years</td>
                                <td class="p-4 text-gray-600">Medical Officer</td>
                                <td class="p-4 font-bold text-gray-900">₹5–10 LPA</td>
                            </tr>

                            <tr class="border-b border-gray-100 hover:bg-[#F0FAF9]">
                                <td class="p-4 font-medium text-gray-800">5–9 Years</td>
                                <td class="p-4 text-gray-600">Experienced Doctor</td>
                                <td class="p-4 font-bold text-gray-900">₹8–15 LPA</td>
                            </tr>

                            <tr class="hover:bg-[#F0FAF9]">
                                <td class="p-4 font-medium text-gray-800">10+ Years</td>
                                <td class="p-4 text-gray-600">Senior Doctor</td>
                                <td class="p-4 font-bold text-gray-900">₹12–25+ LPA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="text-xs text-gray-400 mt-4">
                    Note: These are illustrative salary ranges, not verified market averages or guaranteed offers.
                </p>
            </div>


            <!-- SALARY BY CITY -->
            <div id="city" class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">

                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Location Wise Salary
                </span>

                <h2 class="text-2xl font-bold text-gray-900 mt-2">
                    MBBS Doctor Salary by City
                </h2>

                <p class="text-gray-600 text-sm leading-7 mt-3 mb-6">
                    Salaries may differ between metropolitan cities and smaller
                    locations because of healthcare demand, hospital networks,
                    cost of living and available opportunities.
                </p>

                <div class="space-y-5">

                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-semibold text-gray-800">Bangalore</span>
                            <span class="font-bold text-gray-900">₹4 – 10 LPA</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#00A69A] h-2.5 rounded-full w-[75%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-semibold text-gray-800">Hyderabad</span>
                            <span class="font-bold text-gray-900">₹4 – 9 LPA</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#00A69A] h-2.5 rounded-full w-[68%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-semibold text-gray-800">Mumbai</span>
                            <span class="font-bold text-gray-900">₹5 – 12 LPA</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#00A69A] h-2.5 rounded-full w-[85%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-semibold text-gray-800">Delhi NCR</span>
                            <span class="font-bold text-gray-900">₹4 – 11 LPA</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#00A69A] h-2.5 rounded-full w-[80%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="font-semibold text-gray-800">Chennai</span>
                            <span class="font-bold text-gray-900">₹4 – 9 LPA</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#00A69A] h-2.5 rounded-full w-[68%]"></div>
                        </div>
                    </div>

                </div>

                <p class="text-xs text-gray-400 mt-5">
                    Illustrative ranges for comparison only. Actual salaries depend on employer, role and experience.
                </p>
            </div>


            <!-- SALARY BY CAREER PATH -->
            <div id="specialization" class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">

                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Career Opportunities
                </span>

                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-3">
                    Salary by Medical Career Path
                </h2>

                <p class="text-gray-600 text-sm leading-7 mb-6">
                    After completing MBBS, doctors can pursue different career paths
                    depending on their interests, qualifications and professional goals.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div class="p-5 rounded-lg bg-gray-50 border border-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-md hover:border-[#00A69A]/40">
                        <div class="text-[#00A69A] mb-3">
                            <i class="fa-solid fa-user-doctor text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">General Physician</h3>
                        <p class="text-sm text-gray-500 mt-2">₹3 – 10 LPA</p>
                    </div>

                    <div class="p-5 rounded-lg bg-gray-50 border border-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-md hover:border-[#00A69A]/40">
                        <div class="text-[#00A69A] mb-3">
                            <i class="fa-solid fa-hospital text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Medical Officer</h3>
                        <p class="text-sm text-gray-500 mt-2">₹4 – 10 LPA</p>
                    </div>

                    <div class="p-5 rounded-lg bg-gray-50 border border-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-md hover:border-[#00A69A]/40">
                        <div class="text-[#00A69A] mb-3">
                            <i class="fa-solid fa-briefcase-medical text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Emergency Medicine</h3>
                        <p class="text-sm text-gray-500 mt-2">₹4 – 12 LPA</p>
                    </div>

                    <div class="p-5 rounded-lg bg-gray-50 border border-gray-100 transition-all duration-300 hover:-translate-y-1 hover:shadow-md hover:border-[#00A69A]/40">
                        <div class="text-[#00A69A] mb-3">
                            <i class="fa-solid fa-heart-pulse text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-900">Hospital Consultant</h3>
                        <p class="text-sm text-gray-500 mt-2">₹5 – 15 LPA</p>
                    </div>

                </div>

                <p class="text-xs text-gray-400 mt-5">
                    Indicative examples only. Specialist roles may require postgraduate qualifications such as MD or MS.
                </p>
            </div>


            <!-- GOVERNMENT VS PRIVATE -->
            <div id="sector" class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">

                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Employment Comparison
                </span>

                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-6">
                    Government vs Private Hospital Salary
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                    <div class="border border-[#D4F0EC] bg-[#E8F7F5] rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">

                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-[#D4F0EC] flex items-center justify-center text-[#00A69A]">
                                <i class="fa-solid fa-building-columns"></i>
                            </div>
                            <h3 class="font-bold text-gray-900">Government Hospitals</h3>
                        </div>

                        <ul class="space-y-3 text-sm text-gray-600">
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Structured pay scales</li>
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Applicable allowances and benefits</li>
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Defined recruitment processes</li>
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Opportunities for career progression</li>
                        </ul>

                    </div>

                    <div class="border border-[#D4F0EC] bg-[#E8F7F5] rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">

                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-[#D4F0EC] flex items-center justify-center text-[#008F86]">
                                <i class="fa-solid fa-hospital"></i>
                            </div>
                            <h3 class="font-bold text-gray-900">Private Hospitals</h3>
                        </div>

                        <ul class="space-y-3 text-sm text-gray-600">
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Salary varies by organization</li>
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Performance-based opportunities</li>
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Different hospital environments</li>
                            <li class="flex gap-2"><i class="fa-solid fa-check text-[#008F86] mt-1"></i>Negotiable employment packages</li>
                        </ul>

                    </div>

                </div>
            </div>


            <!-- FACTORS AFFECTING SALARY -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">

                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Salary Insights
                </span>

                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-6">
                    Factors That Affect an MBBS Doctor's Salary
                </h2>

                <div class="space-y-5">

                    <div class="flex gap-4">
                        <div class="w-11 h-11 shrink-0 rounded-lg bg-[#E8F7F5] text-[#00A69A] flex items-center justify-center">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Work Experience</h3>
                            <p class="text-sm text-gray-600 leading-6 mt-1">
                                Clinical experience and professional responsibilities can influence salary offers.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-11 h-11 shrink-0 rounded-lg bg-[#E8F7F5] text-[#00A69A] flex items-center justify-center">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Additional Qualifications</h3>
                            <p class="text-sm text-gray-600 leading-6 mt-1">
                                Postgraduate degrees and relevant certifications may open additional career opportunities.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-11 h-11 shrink-0 rounded-lg bg-[#E8F7F5] text-[#00A69A] flex items-center justify-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Job Location</h3>
                            <p class="text-sm text-gray-600 leading-6 mt-1">
                                City, hospital location and local demand can influence compensation.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-11 h-11 shrink-0 rounded-lg bg-[#E8F7F5] text-[#00A69A] flex items-center justify-center">
                            <i class="fa-solid fa-hospital-user"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">Employer and Hospital Type</h3>
                            <p class="text-sm text-gray-600 leading-6 mt-1">
                                Government institutions, private hospitals and clinics may offer different salary packages.
                            </p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- CAREER GROWTH -->
            <div class="bg-white border border-gray-200 rounded-xl p-6 md:p-8 mb-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:border-[#00A69A]/40">

                <span class="text-[#00A69A] text-xs font-bold uppercase tracking-wider">
                    Career Development
                </span>

                <h2 class="text-2xl font-bold text-gray-900 mt-2 mb-6">
                    MBBS Doctor Career Growth Path
                </h2>

                <div class="space-y-4">

                    <div class="flex gap-4 items-start">
                        <div class="w-9 h-9 shrink-0 rounded-full bg-[#00A69A] text-white flex items-center justify-center font-bold text-sm">1</div>
                        <div>
                            <h3 class="font-bold text-gray-900">Complete MBBS</h3>
                            <p class="text-sm text-gray-600 mt-1">Complete your medical degree from a recognized institution.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-9 h-9 shrink-0 rounded-full bg-[#00A69A] text-white flex items-center justify-center font-bold text-sm">2</div>
                        <div>
                            <h3 class="font-bold text-gray-900">Complete Internship and Registration</h3>
                            <p class="text-sm text-gray-600 mt-1">Complete the required internship and obtain registration as per applicable regulations.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-9 h-9 shrink-0 rounded-full bg-[#00A69A] text-white flex items-center justify-center font-bold text-sm">3</div>
                        <div>
                            <h3 class="font-bold text-gray-900">Start Working as a Doctor</h3>
                            <p class="text-sm text-gray-600 mt-1">Explore opportunities in hospitals, clinics and healthcare organizations.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-9 h-9 shrink-0 rounded-full bg-[#00A69A] text-white flex items-center justify-center font-bold text-sm">4</div>
                        <div>
                            <h3 class="font-bold text-gray-900">Pursue Higher Education</h3>
                            <p class="text-sm text-gray-600 mt-1">Consider postgraduate education and specialization based on your career goals.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="w-9 h-9 shrink-0 rounded-full bg-[#00A69A] text-white flex items-center justify-center font-bold text-sm">5</div>
                        <div>
                            <h3 class="font-bold text-gray-900">Build a Senior Medical Career</h3>
                            <p class="text-sm text-gray-600 mt-1">Develop expertise and explore senior clinical, academic or leadership positions.</p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- FAQ SECTION - INCLUDED DIRECTLY -->
            
<!-- FAQ SECTION -->

<!-- FAQ SECTION -->
<section id="faqs" class="mb-7 rounded-xl border border-gray-200 bg-white p-5 md:p-6 shadow-sm">

    <!-- FAQ TITLE -->
    <div class="mb-5">
        <span class="text-[#00A69A] text-xs font-semibold uppercase tracking-wider">
            Frequently Asked Questions
        </span>

        <h2 class="mt-1 text-xl md:text-2xl font-bold text-gray-900">
            MBBS Doctor Salary FAQs
        </h2>
    </div>

    <div class="space-y-2">

        <!-- FAQ 1 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]" open>
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>What is the starting salary of an MBBS doctor in India?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                Starting salaries vary by location, employer and role. An illustrative entry-level range is ₹3–6 LPA.
            </div>
        </details>

        <!-- FAQ 2 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>Do MBBS doctors earn more in private hospitals?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                Not always. Salaries depend on the hospital, experience, responsibilities and employment package.
            </div>
        </details>

        <!-- FAQ 3 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>Which city offers good opportunities for MBBS doctors?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                Cities such as Bangalore, Hyderabad, Mumbai, Delhi and Chennai have multiple healthcare employers and medical institutions.
            </div>
        </details>

        <!-- FAQ 4 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>Can an MBBS doctor pursue postgraduate education?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                Yes. Eligible MBBS graduates can pursue postgraduate medical education through the applicable admission process.
            </div>
        </details>

        <!-- FAQ 5 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>Does experience increase an MBBS doctor salary?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                Experience can improve earning opportunities, particularly when combined with relevant qualifications and clinical expertise.
            </div>
        </details>

        <!-- FAQ 6 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>What factors affect an MBBS doctor salary?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                Experience, qualifications, job location, hospital type and professional responsibilities can influence salary.
            </div>
        </details>

        <!-- FAQ 7 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>What career options are available after MBBS?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                MBBS graduates can explore medical officer, junior doctor, general physician and other eligible healthcare roles.
            </div>
        </details>

        <!-- FAQ 8 -->
        <details class="group rounded-xl overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C]">
            <summary class="flex items-center justify-between gap-4 px-[27px] py-4 text-white text-sm font-semibold leading-[21px] cursor-pointer list-none">
                <span>Where can I find MBBS doctor jobs in India?</span>
                <i class="fa-solid fa-chevron-down text-xs shrink-0 transition-transform duration-300 group-open:rotate-180"></i>
            </summary>
            <div class="px-[27px] pb-5 text-[#E8F3F7] text-sm font-normal leading-[25px]">
                You can explore healthcare job opportunities across India through Vaidyog.
            </div>
        </details>

    </div>
</section>




            <!-- DISCLAIMER -->
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-5 mb-7 transition-all duration-300 hover:shadow-md">

                <div class="flex items-start gap-3">
                    <i class="fa-solid fa-circle-info text-amber-600 mt-1"></i>

                    <div>
                        <h3 class="font-bold text-gray-900 text-sm">
                            Salary Information Disclaimer
                        </h3>

                        <p class="text-sm text-gray-600 leading-6 mt-2">
                            Salary figures on this page are illustrative estimates
                            for general career guidance. They are not official
                            salary statistics or guaranteed compensation.
                            Actual salary may vary depending on employer,
                            location, qualifications, experience and job role.
                        </p>
                    </div>
                </div>
            </div>


            <!-- JOB CTA -->
            <div class="bg-gradient-to-r from-[#34466F] to-[#00A69A] rounded-xl p-7 md:p-9 text-white transition-all duration-300 hover:shadow-xl">

                <h2 class="text-2xl font-bold">
                    Looking for MBBS Doctor Jobs?
                </h2>

                <p class="text-white/80 text-sm leading-7 mt-3 max-w-xl">
                    Explore healthcare job opportunities across India.
                    Find suitable positions and take the next step in your
                    medical career with Vaidyog.
                </p>

                <a href="https://www.vaidyog.com/best-healthcare-jobs"
                   class="inline-flex items-center gap-2 mt-6 bg-white text-[#34466F] px-6 py-3 rounded-lg font-bold text-sm hover:bg-gray-100 hover:-translate-y-0.5 hover:shadow-md transition-all duration-300">
                    Explore Healthcare Jobs
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
        <!-- END LEFT CONTENT -->


        <!-- RIGHT SIDEBAR -->
        <aside class="lg:col-span-4 space-y-5">

            <!-- QUICK NAVIGATION -->
            <div class="bg-white border border-gray-200 rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-[#00A69A]/40">

                <h3 class="font-bold text-gray-900 text-base mb-4">
                    On This Page
                </h3>

                <ul class="space-y-3 text-sm text-gray-600">
                    <li>
                        <a href="#experience" class="hover:text-[#00A69A]">MBBS Salary by Experience</a>
                    </li>
                    <li>
                        <a href="#city" class="hover:text-[#00A69A]">Salary by City</a>
                    </li>
                    <li>
                        <a href="#specialization" class="hover:text-[#00A69A]">Salary by Career Path</a>
                    </li>
                    <li>
                        <a href="#sector" class="hover:text-[#00A69A]">Government vs Private</a>
                    </li>
                    <li>
                        <a href="#faqs" class="hover:text-[#00A69A]">Frequently Asked Questions</a>
                    </li>
                </ul>
            </div>


            <!-- SALARY HIGHLIGHT -->
            <div class="bg-[#34466F] rounded-xl p-6 text-white transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">

                <div class="w-11 h-11 rounded-lg bg-white/15 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-indian-rupee-sign text-xl"></i>
                </div>

                <h3 class="font-bold text-lg">
                    Explore Healthcare Salaries
                </h3>

                <p class="text-white/75 text-sm leading-6 mt-2">
                    Understand salary trends and compare opportunities
                    across different healthcare professions.
                </p>

                <a href="#experience" class="inline-flex items-center gap-2 mt-5 text-sm font-bold hover:underline">
                    View Salary Details
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>


            <!-- RELATED CAREERS -->
            <div class="bg-white border border-gray-200 rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-[#00A69A]/40">

                <h3 class="font-bold text-gray-900 text-base mb-4">
                    Related Healthcare Careers
                </h3>

                <div class="space-y-3">
                    <a href="#" class="flex items-center justify-between gap-3 text-sm text-gray-600 hover:text-[#00A69A]">
                        <span>MBBS Doctor Jobs</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>

                    <a href="#" class="flex items-center justify-between gap-3 text-sm text-gray-600 hover:text-[#00A69A]">
                        <span>Medical Officer Jobs</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>

                    <a href="#" class="flex items-center justify-between gap-3 text-sm text-gray-600 hover:text-[#00A69A]">
                        <span>General Physician Jobs</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>

                    <a href="#" class="flex items-center justify-between gap-3 text-sm text-gray-600 hover:text-[#00A69A]">
                        <span>Hospital Doctor Jobs</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>


            <!-- CAREER TIP -->
            <div class="bg-[#E8F7F5] border border-[#D4F0EC] rounded-xl p-5 transition-all duration-300 hover:-translate-y-1 hover:shadow-md">

                <div class="flex items-center gap-2 text-[#00A69A] mb-3">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3 class="font-bold text-sm">Career Tip</h3>
                </div>

                <p class="text-sm text-gray-600 leading-7">
                    Compare job responsibilities, working hours, benefits and
                    professional development opportunities instead of evaluating
                    an offer only by its salary.
                </p>
            </div>

        </aside>
        <!-- END RIGHT SIDEBAR -->

    </div>
</section>

@endsection
