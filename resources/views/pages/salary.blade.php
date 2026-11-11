@extends('layouts.app')

@section('title', 'Healthcare Salary Guides in India | Vaidyog')

@section('description', 'Explore healthcare salaries in India by qualification, experience, city and employment sector.')

@section('content')

<div class="font-['Inter'] text-sm text-[#263449]">

    <!-- 1. HERO BANNER -->
    <section class="relative overflow-hidden bg-[#26334f]">
        <div class="absolute inset-0">
            <img src="{{ asset('images/salary-banner.webp') }}" alt="Healthcare salary insights" class="h-full w-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/30"></div>
        </div>

        <div class="relative mx-auto max-w-7xl px-5 py-12 lg:px-8 lg:py-16">
            <div class="grid items-center gap-8 lg:grid-cols-2 lg:gap-10">

                <!-- LEFT CONTENT -->
                <div>
                    <span class="inline-flex items-center gap-2 bg-white/90 border border-blue-100 text-teal-700 px-3 py-2 rounded-full text-xs font-bold mb-5">
                        <span class="w-2 h-2 bg-teal-600 rounded-full"></span>
                        VAIDYOG SALARY INSIGHTS
                    </span>

                    <h1 class="text-[clamp(30px,3.5vw,43px)] font-extrabold leading-[1.2] tracking-[-0.035em] text-white">
                        Healthcare Salary
                        <span class="text-[#00B5A5]">Guides in India</span>
                    </h1>

                    <p class="mt-4 max-w-lg text-[18px] leading-7 text-[#d5d5eb]">
                        Discover healthcare salary trends across India.
                        Compare earnings by qualification, experience,
                        employment sector and city.
                    </p>

                    <!-- BUTTONS -->
                    <div class="flex flex-wrap gap-3 mt-6">
                        <a href="#salary-comparison"
                           class="bg-[#159D94] hover:bg-[#1DBEB2] text-white px-5 py-3 rounded-lg text-sm font-semibold transition">
                            Explore Salary Guides
                        </a>

                        <a href="#salary-calculator"
                           class="bg-white border border-blue-200 text-teal-700 hover:bg-blue-50 px-5 py-3 rounded-lg text-sm font-semibold transition">
                            Salary Calculator
                        </a>
                    </div>

                    <!-- STATISTICS -->
                    <div class="flex flex-wrap items-center justify-start gap-7 mt-8">
                        <div class="min-w-[100px] text-center">
<strong class="block text-[24px] font-extrabold text-[#159D94]">8+</strong>                 
           <span class="mt-1 block text-xs tracking-wide text-white">Healthcare Categories</span>
                        </div>

                        <div class="min-w-[100px] text-center">
                            <strong class="block text-[24px] font-extrabold text-[#159D94]">25+</strong>
                            <span class="mt-1 block text-xs tracking-wide text-white">Salary Guides</span>
                        </div>

                        <div class="min-w-[100px] text-center">
                            <strong class="block text-[24px] font-extrabold text-[#159D94]">2026</strong>
                            <span class="mt-1 block text-xs tracking-wide text-white">Latest Insights</span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDE PANEL -->
                <div class="ml-auto w-full max-w-lg rounded-2xl border border-[#e5edf7] bg-white/95 p-5 shadow-[0_18px_45px_rgba(33,76,125,0.10)] backdrop-blur-sm md:p-6">

                    <div class="flex justify-between items-center mb-5">
                        <div>
                            <p class="text-xs text-slate-500">Explore Salary Insights</p>
                            <h2 class="text-xl font-bold text-slate-900 mt-1">Find Your Career Value</h2>
                        </div>

                        <div class="w-12 h-12 bg-blue-50 text-blue-700 rounded-xl flex items-center justify-center text-2xl">
                            ₹
                        </div>
                    </div>

                    <!-- PROFESSION LINKS -->
                    <div class="space-y-3">
                        @foreach([
                            ['MD','Doctor Salary','MBBS, BAMS and more','bg-blue-100 text-blue-700'],
                            ['RN','Nursing Salary','GNM and B.Sc Nursing','bg-green-100 text-green-700'],
                            ['PH','Pharmacist Salary','D.Pharm and B.Pharm','bg-purple-100 text-purple-700']
                        ] as $item)

                            <a href="#qualification"
                               class="flex items-center justify-between bg-slate-50 hover:bg-blue-50 p-3 rounded-xl transition border border-slate-100 shadow-sm hover:shadow-md">

                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg flex items-center justify-center font-bold text-sm {{ $item[3] }}">
                                        {{ $item[0] }}
                                    </div>

                                    <div>
                                        <h3 class="font-bold text-sm text-slate-800">{{ $item[1] }}</h3>
                                        <p class="text-xs text-slate-500 mt-1">{{ $item[2] }}</p>
                                    </div>
                                </div>

                                <span class="text-blue-600 text-lg">→</span>
                            </a>
                        @endforeach
                    </div>

                    <p class="text-xs text-slate-400 mt-5">
                        Explore profession-specific salary information.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- 2. INTRODUCTION -->
    <section class="bg-white px-5 py-11 md:py-16">
        <div class="max-w-3xl mx-auto px-5 text-center">
            <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                Understand Your Earnings
            </span>

            <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                Explore Healthcare Salary Trends Across India
            </h2>

            <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                Healthcare salaries depend on educational qualifications,
                professional experience, specialisation, hospital type and
                work location. Explore our salary guides to understand
                earning opportunities and make informed career decisions.
            </p>
        </div>
    </section>


    <!-- 3. SALARY BY PROFESSION -->
    <section id="salary-comparison" class="bg-slate-50 px-5 py-11 md:py-16">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                    Explore Professions
                </span>

                <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                    Healthcare Salary Guides by Profession
                </h2>

                <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                    Explore dedicated salary guides for different healthcare
                    professionals and qualifications.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach([
                    ['🩺','Doctor Salary','Explore salaries for MBBS, specialist doctors, BAMS and other medical professionals.','/salary/mbbs-doctor-salaryindia','bg-blue-100'],
                    ['👩‍⚕️','Nursing Salary','Compare salaries for GNM, B.Sc Nursing, staff nurses and senior nursing professionals.','/salary/staff-nurse-salary-india','bg-green-100'],
                    ['💊','Pharmacist Salary','Understand earning opportunities in retail, hospital and pharmaceutical sectors.','/salary/pharmacist-salary-india','bg-purple-100'],
                    ['🏃','Physiotherapist Salary','Explore salary information for BPT, MPT and rehabilitation professionals.','/salary/physiotherapist-salary-india','bg-orange-100'],
                    ['🔬','Lab Technician Salary','Discover salary insights for DMLT, BMLT and diagnostic laboratory professionals.','/salary/lab-technician-salary','bg-cyan-100'],
                    ['🩻','Radiographer Salary','Explore career earnings in radiology and diagnostic imaging.','/salary/radiographer-salary','bg-pink-100'],
                    ['🦷','Dentist Salary','Compare BDS and MDS career earning opportunities in India.','/salary/dentist-salary-india','bg-yellow-100'],
                    ['🏥','Hospital Administrator','Discover salary trends for hospital administration and healthcare management.','/salary/hospital-administrator-salary','bg-indigo-100']
                ] as $item)

                    <article class="group rounded-[13px] border border-[#e7edf5] bg-white p-[23px] transition duration-300 hover:-translate-y-1 hover:border-[#9dc7f5] hover:shadow-[0_12px_30px_rgba(26,77,133,0.08)]">

                        <div class="flex h-[43px] w-[43px] items-center justify-center rounded-[11px] text-[21px] {{ $item[4] }}">
                            {{ $item[0] }}
                        </div>

                        <h3 class="text-base font-bold tracking-tight text-slate-900 mt-4">
                            {{ $item[1] }}
                        </h3>

                        <p class="text-xs leading-6 text-slate-500 mt-2 min-h-[72px]">
                            {{ $item[2] }}
                        </p>

                        <a href="{{ url($item[3]) }}"
                           class="inline-flex items-center gap-2 mt-3 text-sm font-semibold text-[#1DBEB2] hover:text-[#159D94] transition-all duration-300">
                            View Salary Details
                            <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
                        </a>

                    </article>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 4. SALARY BY QUALIFICATION -->
    <section id="qualification" class="bg-white px-5 py-11 md:py-16">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="max-w-2xl mb-9">
                <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                    Education & Earnings
                </span>

                <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                    Compare Salary by Qualification
                </h2>

                <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                    Explore salary guides based on your healthcare education
                    and professional qualification.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach([
                    ['GNM','NURSING','General Nursing and Midwifery salary guide.','/salary/staff-nurse-salary-india'],
                    ['B.Sc Nursing','NURSING','Nursing graduate salary and career opportunities.','/salary/staff-nurse-salary-india'],
                    ['MBBS','MEDICAL','Medical graduate salary and opportunities.','/salary/mbbs-doctor-salary-india'],
                    ['BAMS','AYUSH','Ayurveda graduate salary and career opportunities.','/salary/bams-doctor-salary']
                ] as $item)

                    <a href="{{ url($item[3]) }}"
                       class="rounded-[13px] border border-[#e7edf5] bg-white p-[23px] transition duration-300 hover:-translate-y-1 hover:border-[#9dc7f5] hover:shadow-[0_12px_30px_rgba(26,77,133,0.08)]">

                        <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                            {{ $item[1] }}
                        </span>

                        <h3 class="text-2xl font-extrabold text-slate-900 mt-3">
                            {{ $item[0] }}
                        </h3>

                        <p class="text-xs leading-6 text-slate-500 mt-2">
                            {{ $item[2] }}
                        </p>

                        <span class="mt-5 block text-[13px] font-bold text-[#159D94]">
                            View Salary →
                        </span>
                    </a>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 5. SALARY BY EXPERIENCE -->
    <section class="bg-slate-50 px-5 py-11 md:py-16">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                    Career Growth
                </span>

                <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                    Explore Salary by Experience
                </h2>

                <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                    Understand how professional experience can influence
                    healthcare career earnings.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach([
                    ['01','Fresher','Explore entry-level roles, starting pay and opportunities for new graduates.'],
                    ['02','1 – 3 Years','Discover salary progression as you develop practical clinical experience.'],
                    ['03','3 – 5 Years','Explore opportunities for senior roles and professional specialisation.'],
                    ['04','5+ Years','Understand leadership opportunities, management roles and advanced careers.']
                ] as $item)

                    <div class="rounded-[13px] border border-[#e7edf5] bg-white p-[23px] transition duration-300 hover:-translate-y-1 hover:border-[#9dc7f5] hover:shadow-[0_12px_30px_rgba(26,77,133,0.08)]">

                        <span class="text-2xl font-extrabold text-[#159D94]">
                            {{ $item[0] }}
                        </span>

                        <h3 class="text-base font-bold tracking-tight text-slate-900 mt-4">
                            {{ $item[1] }}
                        </h3>

                        <p class="text-xs leading-6 text-slate-500 mt-2">
                            {{ $item[2] }}
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 6. GOVERNMENT VS PRIVATE -->
    <section class="bg-white px-5 py-11 md:py-16">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                    Employment Comparison
                </span>

                <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                    Government vs Private Healthcare Salaries
                </h2>

                <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                    Understand differences in compensation structures,
                    benefits, career growth and working opportunities.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-5">

                <div class="rounded-2xl bg-blue-50 border border-blue-100 p-7">
                    <div class="flex h-[43px] w-[43px] items-center justify-center rounded-[11px] bg-blue-100 text-[21px] text-blue-700">
                        🏛️
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 mt-4">
                        Government Hospitals
                    </h3>

                    <p class="text-xs text-slate-600 leading-6 mt-3">
                        Government healthcare roles generally follow applicable
                        recruitment rules, pay levels, allowances and service conditions.
                    </p>

                    <ul class="text-xs text-slate-600 space-y-3 mt-5">
                        <li>✓ Structured pay scales</li>
                        <li>✓ Applicable allowances and benefits</li>
                        <li>✓ Defined recruitment procedures</li>
                        <li>✓ Promotion and service rules</li>
                    </ul>

                    <a href="{{ url('/salary/government-healthcare-salary') }}"
                       class="inline-block mt-6 bg-[#159D94] text-white text-xs font-semibold px-5 py-3 rounded-lg hover:bg-[#117F78] transition-all duration-300">
                        Explore Government Salaries →
                    </a>
                </div>

                <div class="rounded-2xl bg-slate-900 p-7 text-white">
                    <div class="flex h-[43px] w-[43px] items-center justify-center rounded-[11px] bg-white/10 text-[21px]">
                        🏥
                    </div>

                    <h3 class="text-xl font-bold mt-4">
                        Private Hospitals
                    </h3>

                    <p class="text-xs text-slate-300 leading-6 mt-3">
                        Private healthcare compensation varies by employer,
                        hospital size, qualification, experience and specialisation.
                    </p>

                    <ul class="text-xs text-slate-300 space-y-3 mt-5">
                        <li>✓ Employer-specific compensation</li>
                        <li>✓ Role-based salary packages</li>
                        <li>✓ Opportunities across hospital chains</li>
                        <li>✓ Variable incentives in some roles</li>
                    </ul>

                    <a href="{{ url('/salary/private-hospital-salary') }}"
                       class="inline-block mt-6 bg-[#159D94] text-white text-xs font-semibold px-5 py-3 rounded-lg hover:bg-[#117F78]">
                        Explore Private Salaries →
                    </a>
                </div>

            </div>

            <p class="text-xs text-slate-500 mt-5 text-center">
                Actual pay depends on recruitment rules, employer, location,
                designation and employment conditions.
            </p>

        </div>
    </section>


    <!-- 7. SALARY BY CITY -->
    <section class="bg-slate-50 px-5 py-11 md:py-16">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-9">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                        Location Insights
                    </span>

                    <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                        Healthcare Salaries by City
                    </h2>

                    <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                        Explore salary information and opportunities across major Indian cities.
                    </p>
                </div>

                <a href="{{ url('/salary/by-city') }}"
                   class="text-[13px] font-bold text-[#159D94] transition hover:text-[#117F78]">
                    View All Cities →
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach([
                    ['Bangalore','Karnataka','/salary/by-city/bangalore'],
                    ['Hyderabad','Telangana','/salary/by-city/hyderabad'],
                    ['Chennai','Tamil Nadu','/salary/by-city/chennai'],
                    ['Mumbai','Maharashtra','/salary/by-city/mumbai'],
                    ['Delhi NCR','Delhi','/salary/by-city/delhi'],
                    ['Pune','Maharashtra','/salary/by-city/pune'],
                    ['Vijayawada','Andhra Pradesh','/salary/by-city/vijayawada'],
                    ['Kochi','Kerala','/salary/by-city/kochi']
                ] as $city)

                    <a href="{{ url($city[2]) }}"
                       class="rounded-[13px] border border-[#e7edf5] bg-white p-[23px] transition duration-300 hover:-translate-y-1 hover:border-[#9dc7f5] hover:shadow-[0_12px_30px_rgba(26,77,133,0.08)]">

                        <div class="flex h-[43px] w-[43px] items-center justify-center rounded-[11px] bg-[#E6F5F3] text-[21px] text-[#159D94]">
                            <i class="fas fa-map-marker-alt text-2xl"></i>
                        </div>

                        <h3 class="font-bold text-sm text-slate-900 mt-4">
                            {{ $city[0] }}
                        </h3>

                        <p class="text-xs text-slate-500 mt-1">
                            {{ $city[1] }}
                        </p>

                        <span class="mt-4 block text-[13px] font-bold text-[#159D94]">
                            Explore Salary →
                        </span>
                    </a>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 8. SALARY CALCULATOR -->
    <section id="salary-calculator" class="relative overflow-hidden bg-[#142d50] px-5 py-11 md:py-16">

        <!-- Background -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,#287bd0,transparent_45%)] opacity-30"></div>

        <div class="relative max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-10 items-center">

                <!-- LEFT CONTENT -->
                <div class="text-white">
                    <span class="text-blue-300 text-xs font-bold uppercase tracking-widest">
                        Free Career Tool
                    </span>

                    <h2 class="text-3xl md:text-4xl font-extrabold mt-4 leading-tight">
                        Healthcare Salary
                        <span class="text-blue-300">Calculator</span>
                    </h2>

                    <p class="text-blue-100/80 text-sm leading-7 mt-4 max-w-lg">
                        Select your profession, qualification, experience
                        and preferred city to explore an estimated salary range.
                    </p>

                    <div class="space-y-4 mt-7 text-sm text-blue-100">
                        <p>✓ Profession-based salary insights</p>
                        <p>✓ Experience and location comparison</p>
                        <p>✓ Customizable salary estimates</p>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="bg-white rounded-2xl p-6 md:p-7 shadow-xl">

                    <h3 class="text-xl font-bold text-slate-900">
                        Estimate Your Salary
                    </h3>

                    <p class="text-xs text-slate-500 mt-2 mb-5">
                        Enter your career details below.
                    </p>

                    <form id="salaryForm" class="space-y-4">

                        <!-- Profession -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-2">
                                Select Profession
                            </label>

                            <select id="profession" required
                                class="w-full rounded-[9px] border border-[#dce5ef] bg-[#f9fbfd] px-[13px] py-3 text-[13px] text-[#263449] outline-none focus:border-[#3988df] focus:ring-2 focus:ring-[#3988df]/10">
                                <option value="">Choose Profession</option>
                                <option value="Staff Nurse">Staff Nurse</option>
                                <option value="MBBS Doctor">MBBS Doctor</option>
                                <option value="BAMS Doctor">BAMS Doctor</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Physiotherapist">Physiotherapist</option>
                                <option value="Lab Technician">Lab Technician</option>
                                <option value="Radiographer">Radiographer</option>
                                <option value="Dentist">Dentist</option>
                            </select>
                        </div>

                        <!-- Qualification -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-2">
                                Qualification
                            </label>

                            <select id="qualificationSelect" required
                                class="w-full rounded-[9px] border border-[#dce5ef] bg-[#f9fbfd] px-[13px] py-3 text-[13px] text-[#263449] outline-none focus:border-[#3988df] focus:ring-2 focus:ring-[#3988df]/10">
                                <option value="">Choose Qualification</option>
                                <option value="GNM">GNM</option>
                                <option value="B.Sc Nursing">B.Sc Nursing</option>
                                <option value="MBBS">MBBS</option>
                                <option value="BAMS">BAMS</option>
                                <option value="B.Pharm">B.Pharm</option>
                                <option value="BPT">BPT</option>
                                <option value="DMLT">DMLT</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Experience -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-2">
                                Work Experience
                            </label>

                            <select id="experience" required
                                class="w-full rounded-[9px] border border-[#dce5ef] bg-[#f9fbfd] px-[13px] py-3 text-[13px] text-[#263449] outline-none focus:border-[#3988df] focus:ring-2 focus:ring-[#3988df]/10">
                                <option value="">Choose Experience</option>
                                <option value="Fresher">Fresher</option>
                                <option value="1–3 Years">1–3 Years</option>
                                <option value="3–5 Years">3–5 Years</option>
                                <option value="5+ Years">5+ Years</option>
                            </select>
                        </div>

                        <!-- City -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-2">
                                Preferred City
                            </label>

                            <select id="city" required
                                class="w-full rounded-[9px] border border-[#dce5ef] bg-[#f9fbfd] px-[13px] py-3 text-[13px] text-[#263449] outline-none focus:border-[#3988df] focus:ring-2 focus:ring-[#3988df]/10">
                                <option value="">Choose City</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi NCR">Delhi NCR</option>
                                <option value="Pune">Pune</option>
                                <option value="Vijayawada">Vijayawada</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Submit -->
                        <button type="submit"
                            class="w-full bg-[#159D94] hover:bg-[#117F78] text-white font-semibold text-sm py-3 rounded-lg transition-all duration-300">
                            Check Salary Estimate →
                        </button>

                    </form>

                    <p class="text-[11px] text-slate-400 mt-4 text-center">
                        Salary estimates are indicative and may vary by employer.
                    </p>
                </div>

            </div>
        </div>


        <!-- COMPACT SALARY RESULT POPUP -->
        <div id="salaryModal"
             class="fixed inset-0 z-[99999] hidden items-center justify-center bg-slate-950/70 backdrop-blur-sm p-3">

            <div id="salaryModalContent"
                 class="bg-white w-full max-w-[450px] rounded-2xl shadow-2xl relative overflow-hidden max-h-[calc(100dvh-24px)]">

                <!-- POPUP HEADER -->
                <div class="bg-[#192950] px-5 py-4 text-white relative">

                    <button type="button"
                        id="closeSalaryModal"
                        aria-label="Close popup"
                        class="absolute top-3 right-4 text-white/70 hover:text-white text-xl leading-none">
                        &times;
                    </button>

                    <span class="text-blue-300 text-[10px] font-bold uppercase tracking-widest">
                        Salary Estimation Result
                    </span>

                    <h3 class="text-xl font-extrabold mt-2">
                        Your Salary Estimate
                    </h3>

                    <p class="text-blue-100/80 text-xs mt-1">
                        Based on your selected career details.
                    </p>
                </div>

                <!-- POPUP BODY -->
                <div class="p-5">

                    <!-- MONTHLY SALARY -->
                    <div class="bg-[#E6F5F3] rounded-xl p-4 text-center">
                        <p class="text-xs font-semibold text-slate-600 uppercase tracking-wide">
                            Estimated Monthly Salary
                        </p>

                        <h2 id="monthlySalary"
                            class="text-2xl md:text-3xl font-extrabold text-[#159D94] mt-2">
                            ₹0 - ₹0
                        </h2>

                        <p class="text-[11px] text-slate-500 mt-1">
                            Indicative salary range per month
                        </p>
                    </div>

                    <!-- ANNUAL SALARY -->
                    <div class="mt-3 bg-slate-50 rounded-xl p-3">
                        <p class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide">
                            Estimated Annual Salary
                        </p>

                        <h3 id="annualSalary" class="text-lg font-bold text-slate-900 mt-1">
                            ₹0 - ₹0
                        </h3>
                    </div>

                    <!-- CAREER DETAILS -->
                    <div class="mt-4">
                        <h4 class="font-bold text-sm text-slate-900 mb-2">
                            Your Career Details
                        </h4>

                        <div class="grid grid-cols-2 gap-2">
                            <div class="bg-slate-50 p-3 rounded-lg">
                                <p class="text-[10px] text-slate-500">Profession</p>
                                <p id="resultProfession" class="text-xs font-semibold text-slate-800 mt-1"></p>
                            </div>

                            <div class="bg-slate-50 p-3 rounded-lg">
                                <p class="text-[10px] text-slate-500">Qualification</p>
                                <p id="resultQualification" class="text-xs font-semibold text-slate-800 mt-1"></p>
                            </div>

                            <div class="bg-slate-50 p-3 rounded-lg">
                                <p class="text-[10px] text-slate-500">Experience</p>
                                <p id="resultExperience" class="text-xs font-semibold text-slate-800 mt-1"></p>
                            </div>

                            <div class="bg-slate-50 p-3 rounded-lg">
                                <p class="text-[10px] text-slate-500">Preferred City</p>
                                <p id="resultCity" class="text-xs font-semibold text-slate-800 mt-1"></p>
                            </div>
                        </div>
                    </div>

                    <!-- DISCLAIMER -->
                    <div class="mt-3 border-l-[3px] border-amber-400 bg-amber-50 p-2.5 rounded-r-lg">
                        <p class="text-[10px] text-amber-900 leading-4">
                            <strong>Note:</strong> These are sample dummy salary estimates
                            for demonstration purposes only. Actual salaries may vary
                            depending on employer, experience and location.
                        </p>
                    </div>

                    <!-- DONE BUTTON -->
                    <button type="button"
                        id="doneSalaryModal"
                        class="w-full mt-3 bg-[#159D94] hover:bg-[#117F78] text-white font-semibold text-xs py-2.5 rounded-lg transition-all duration-300">
                        Done
                    </button>

                </div>
            </div>
        </div>

    </section>


    <!-- SALARY CALCULATOR JAVASCRIPT -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {

        const salaryForm = document.getElementById("salaryForm");
        const salaryModal = document.getElementById("salaryModal");

        const SALARY_DATA = {
            "Staff Nurse": [18000, 28000],
            "MBBS Doctor": [50000, 80000],
            "BAMS Doctor": [25000, 40000],
            "Pharmacist": [18000, 30000],
            "Physiotherapist": [20000, 35000],
            "Lab Technician": [15000, 25000],
            "Radiographer": [18000, 30000],
            "Dentist": [30000, 50000]
        };

        const EXPERIENCE_MULTIPLIER = {
            "Fresher": 1,
            "1–3 Years": 1.25,
            "3–5 Years": 1.55,
            "5+ Years": 1.90
        };

        const CITY_MULTIPLIER = {
            "Bangalore": 1.15,
            "Hyderabad": 1.08,
            "Chennai": 1.08,
            "Mumbai": 1.20,
            "Delhi NCR": 1.18,
            "Pune": 1.10,
            "Vijayawada": 0.90,
            "Other": 1.00
        };

        function formatSalary(amount) {
            return "₹" + Math.round(amount).toLocaleString("en-IN");
        }

        salaryForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const profession = document.getElementById("profession").value;
            const qualification = document.getElementById("qualificationSelect").value;
            const experience = document.getElementById("experience").value;
            const city = document.getElementById("city").value;

            const baseSalary = SALARY_DATA[profession];
            const experienceMultiplier = EXPERIENCE_MULTIPLIER[experience];
            const cityMultiplier = CITY_MULTIPLIER[city];

            if (!baseSalary || !experienceMultiplier || !cityMultiplier) {
                alert("Please select all career details.");
                return;
            }

            // MONTHLY CALCULATION
            const minSalary = baseSalary[0] * experienceMultiplier * cityMultiplier;
            const maxSalary = baseSalary[1] * experienceMultiplier * cityMultiplier;

            // ANNUAL CALCULATION
            const annualMin = minSalary * 12;
            const annualMax = maxSalary * 12;

            // DISPLAY SALARY
            document.getElementById("monthlySalary").textContent =
                formatSalary(minSalary) + " - " + formatSalary(maxSalary);

            document.getElementById("annualSalary").textContent =
                formatSalary(annualMin) + " - " + formatSalary(annualMax);

            // DISPLAY CAREER DETAILS
            document.getElementById("resultProfession").textContent = profession;
            document.getElementById("resultQualification").textContent = qualification;
            document.getElementById("resultExperience").textContent = experience;
            document.getElementById("resultCity").textContent = city;

            // OPEN POPUP
            salaryModal.classList.remove("hidden");
            salaryModal.classList.add("flex");
            document.body.style.overflow = "hidden";
        });

        // CLOSE POPUP
        function closeSalaryModal() {
            salaryModal.classList.add("hidden");
            salaryModal.classList.remove("flex");
            document.body.style.overflow = "";
        }

        document.getElementById("closeSalaryModal")
            .addEventListener("click", closeSalaryModal);

        document.getElementById("doneSalaryModal")
            .addEventListener("click", closeSalaryModal);

        // CLOSE WHEN CLICKING OUTSIDE
        salaryModal.addEventListener("click", function (e) {
            if (e.target === salaryModal) {
                closeSalaryModal();
            }
        });

        // ESCAPE KEY
        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape" && !salaryModal.classList.contains("hidden")) {
                closeSalaryModal();
            }
        });

    });
    </script>


    <!-- 9. LATEST ARTICLES -->
    <section class="bg-white px-5 py-11 md:py-16">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-9">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                        Latest Insights
                    </span>

                    <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                        Latest Healthcare Salary Articles
                    </h2>

                    <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                        Read career insights and salary guides for healthcare professionals.
                    </p>
                </div>

                <a href="{{ url('/blog') }}"
                   class="text-[13px] font-bold text-[#159D94] transition hover:text-[#117F78]">
                    View All Articles →
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-5">
                @foreach([
                    ['👩‍⚕️','Nursing Salary','Staff Nurse Salary in India: Complete Guide','Understand nursing salary factors, qualifications and career opportunities.','/salary/staff-nurse-salary-india','bg-blue-50'],
                    ['🩺','Doctor Salary','MBBS Doctor Salary in India','Explore doctor salary factors, government and private career paths.','/salary/mbbs-doctor-salary-india','bg-green-50'],
                    ['💊','Pharmacy Salary','Pharmacist Salary and Career Opportunities','Learn about pharmacy careers across hospitals, retail and pharmaceutical companies.','/salary/pharmacist-salary-india','bg-purple-50']
                ] as $article)

                    <article class="rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition">
                        <div class="h-36 {{ $article[5] }} flex items-center justify-center text-5xl">
                            {{ $article[0] }}
                        </div>

                        <div class="p-5">
                            <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                                {{ $article[1] }}
                            </span>

                            <h3 class="font-bold text-base text-slate-900 mt-2 leading-6">
                                {{ $article[2] }}
                            </h3>

                            <p class="text-xs leading-6 text-slate-500 mt-2">
                                {{ $article[3] }}
                            </p>

                            <a href="{{ url($article[4]) }}"
                               class="mt-4 inline-block text-[13px] font-bold text-[#159D94]">
                                Read More →
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 10. FAQ -->
    <section class="bg-[#f8fafc] bg-[radial-gradient(#e1e5eb_1px,transparent_1px)] bg-[length:22px_22px] px-5 py-11 md:py-[70px]">

        <div class="mx-auto max-w-[750px] px-5 lg:px-8">

            <!-- FAQ HEADING -->
            <div class="mb-8 text-center">
                <span class="text-[11px] font-bold uppercase tracking-[.12em] text-[#159D94]">
                    Latest Insights
                </span>

                <h2 class="mt-3 text-2xl font-bold leading-tight tracking-[-0.035em] text-[#142D50] md:text-3xl">
                    Latest Healthcare Salary Articles
                </h2>

                <p class="mt-3 text-sm leading-[1.8] text-[#68778b]">
                    Read career insights and salary guides for healthcare professionals.
                </p>
            </div>

            <!-- FAQ ACCORDION -->
            <div class="space-y-4">
                @foreach([
                    [
                        'What is Vaidyog?',
                        "Vaidyog is India's dedicated healthcare job portal connecting doctors, nurses, and allied health professionals with hospitals, clinics, and healthcare organisations across the country."
                    ],
                    [
                        'Is it free to register as a job seeker?',
                        'Yes, job seekers can register on Vaidyog, create their professional profiles, explore healthcare vacancies, and apply for suitable job opportunities.'
                    ],
                    [
                        'What types of healthcare jobs are available?',
                        'Vaidyog features healthcare opportunities for doctors, nurses, pharmacists, physiotherapists, lab technicians, radiographers, dentists, and other allied healthcare professionals.'
                    ],
                    [
                        'How do I apply for a job?',
                        'Create your job seeker profile, browse available healthcare vacancies, select a suitable position, and click the Apply button to submit your application.'
                    ],
                    [
                        'How can hospitals post jobs on Vaidyog?',
                        'Hospitals, clinics, and healthcare organisations can register as employers, create their organisation profiles, and post vacancies to connect with qualified healthcare professionals.'
                    ],
                    [
                        'Can I search for healthcare jobs by city?',
                        'Yes, you can explore healthcare job opportunities across major Indian cities, including Bangalore, Hyderabad, Chennai, Mumbai, Delhi NCR, Pune, and other locations.'
                    ],
                    [
                        'Does Vaidyog provide salary information?',
                        'Yes, Vaidyog provides healthcare salary guides, profession-based salary insights, city-wise salary information, and estimated salary comparisons to help professionals understand career opportunities.'
                    ],
                    [
                        'How can I stay updated about new healthcare jobs?',
                        'Regularly visit Vaidyog to explore newly published vacancies and relevant healthcare career opportunities.'
                    ]
                ] as $faq)

                    <details class="group rounded-[10px] bg-gradient-to-r from-[#46527f] via-[#428c8d] to-[#43b39a] p-4 text-white transition duration-300 hover:shadow-[0_6px_20px_rgba(21,157,148,0.15)] md:p-5"
                        {{ $loop->first ? 'open' : '' }}>

                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-sm font-semibold leading-6 text-white marker:hidden">
                            <span>{{ $faq[0] }}</span>

                            <span class="flex h-[18px] w-[18px] shrink-0 items-center justify-center text-[#c7f1e8] transition-transform duration-300 group-open:rotate-180">
                                <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </span>
                        </summary>

                        <div class="pt-3 text-sm leading-[1.8] text-[#e8f3f7]">
                            <p>{{ $faq[1] }}</p>
                        </div>

                    </details>
                @endforeach
            </div>

        </div>
    </section>


    <!-- 12. FINAL CTA -->
    <section class="relative block w-full overflow-hidden bg-gradient-to-r from-[#46527f] via-[#426b83] to-[#43b39a] px-5 py-16 md:px-5 md:py-[100px]">

        <!-- Decorative Circles -->
        <div class="pointer-events-none absolute -bottom-[170px] -left-[95px] z-[1] h-[340px] w-[340px] rounded-full bg-white/[0.045]"></div>
        <div class="pointer-events-none absolute -right-[165px] -top-[255px] z-[1] h-[510px] w-[510px] rounded-full bg-white/[0.045]"></div>

        <div class="relative z-[5] mx-auto max-w-7xl px-5 lg:px-8">
            <div class="text-center">

                <h2 class="mx-auto max-w-3xl text-[27px] font-bold leading-[1.3] tracking-[-0.035em] text-white md:text-[30px]">
                    Ready to Discover Your Healthcare Salary Potential?
                </h2>

                <p class="mx-auto mt-5 max-w-2xl text-sm leading-[1.7] text-[#e8f2ff] md:text-base">
                    Explore healthcare salary insights, compare earnings by profession and city, and make informed decisions about your healthcare career.
                </p>

                <div class="flex flex-wrap justify-center items-center gap-4 mt-5">

                    <a href="https://www.vaidyog.com/best-healthcare-jobs"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex min-h-[46px] w-full items-center justify-center rounded-[10px] border border-white bg-white px-7 py-3 text-sm font-bold text-[#46527f] no-underline transition duration-300 hover:-translate-y-1 hover:bg-[#eaf8f5] hover:text-[#159D94] sm:w-auto">
                        Browse Salary Guides
                    </a>

                    <a href="{{ url('/careers') }}"
                       class="inline-flex min-h-[46px] w-full items-center justify-center rounded-[10px] border border-white/25 bg-white/[0.08] px-7 py-3 text-sm font-bold text-white no-underline transition duration-300 hover:-translate-y-1 hover:bg-white/[0.18] sm:w-auto">
                        Explore Healthcare Jobs
                    </a>

                </div>
            </div>
        </div>
    </section>

</div>


<!-- SALARY CALCULATOR INTERACTION -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('salaryForm');

    if (!form) return;

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const profession = document.getElementById('profession').value;
        const qualification = document.getElementById('qualificationSelect').value;
        const experience = document.getElementById('experience').value;
        const city = document.getElementById('city').value;

        const result = document.getElementById('salaryResult');
        const message = document.getElementById('salaryMessage');

        if (!profession || !qualification || !experience || !city) return;

        message.textContent =
            'Profession: ' + profession +
            ' | Qualification: ' + qualification +
            ' | Experience: ' + experience +
            ' | City: ' + city +
            '. Verified salary data has not been configured yet.';

        result.classList.remove('hidden');
        result.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });
});
</script>

@endsection