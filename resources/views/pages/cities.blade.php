@extends('layouts.app')

@section('title', 'Healthcare Jobs by City | Vaidyog')
@section('description', 'Explore healthcare jobs in major Indian cities.')

@section('content')

@php
$cities = [
    [
        'slug'=>'healthcare-jobs-bangalore',
        'name'=>'Bangalore','state'=>'Karnataka','code'=>'BLR','region'=>'South India',
        'description'=>'Explore healthcare and hospital career opportunities in Bangalore across medical institutions, nursing services, diagnostics and healthcare administration.',
        'sectors'=>['Multi-speciality Hospitals','Private Healthcare Institutions','Diagnostic Centres','Speciality Clinics'],
        'roles'=>['Doctors & Physicians','Nursing Professionals','Pharmacists','Lab Technicians','Hospital Administration','Allied Healthcare'],
        'salary'=>'Healthcare salaries vary according to qualification, experience, hospital, specialisation and job responsibilities. Check individual Vaidyog listings for disclosed salary information.',
        'cost'=>'Consider accommodation, transportation, food and daily expenses when evaluating job opportunities in Bangalore.'
    ],
    [
        'slug'=>'healthcare-jobs-hyderabad',
        'name'=>'Hyderabad','state'=>'Telangana','code'=>'HYD','region'=>'South India',
        'description'=>'Discover healthcare job opportunities in Hyderabad across hospitals, clinics, nursing departments, diagnostics and medical institutions.',
        'sectors'=>['Multi-speciality Hospitals','Corporate Healthcare Institutions','Speciality Clinics','Diagnostic Centres'],
        'roles'=>['Doctors & Physicians','Staff Nurses','Pharmacists','Medical Laboratory Technicians','Radiology Professionals','Healthcare Administrators'],
        'salary'=>'Salary packages depend on the hospital, position, experience and professional qualifications. Refer to individual job listings for disclosed compensation.',
        'cost'=>'Compare accommodation, transportation, food and commuting costs in your preferred Hyderabad locality.'
    ],
    [
        'slug'=>'healthcare-jobs-chennai',
        'name'=>'Chennai','state'=>'Tamil Nadu','code'=>'CHE','region'=>'South India',
        'description'=>'Find healthcare career opportunities in Chennai across medical institutions, hospitals, nursing services, diagnostics and healthcare support.',
        'sectors'=>['Speciality Hospitals','Multi-speciality Healthcare Centres','Medical Institutions','Diagnostic Centres'],
        'roles'=>['Medical Officers','Doctors & Specialists','Nursing Professionals','Pharmacists','Lab Technicians','Healthcare Support Staff'],
        'salary'=>'Compensation depends on the role, experience, institution and qualification. Review individual vacancies for available salary details.',
        'cost'=>'Consider housing, local transport, food and daily living expenses when choosing a workplace in Chennai.'
    ],
    [
        'slug'=>'healthcare-jobs-mumbai',
        'name'=>'Mumbai','state'=>'Maharashtra','code'=>'MUM','region'=>'West India',
        'description'=>'Explore hospital and healthcare jobs in Mumbai across private hospitals, speciality centres, nursing services and medical organisations.',
        'sectors'=>['Private Multi-speciality Hospitals','Speciality Healthcare Centres','Medical Clinics','Diagnostic Services'],
        'roles'=>['Doctors & Physicians','Staff Nurses','Pharmacists','Operation Theatre Technicians','Medical Laboratory Professionals','Hospital Management'],
        'salary'=>'Healthcare salary packages vary by institution, qualification, experience and specialisation. Check individual job advertisements for disclosed salary ranges.',
        'cost'=>'Consider accommodation, commuting, food and locality-specific living expenses when evaluating Mumbai opportunities.'
    ],
    [
        'slug'=>'healthcare-jobs-pune',
        'name'=>'Pune','state'=>'Maharashtra','code'=>'PUN','region'=>'West India',
        'description'=>'Discover hospital and healthcare career opportunities in Pune across medical institutions, speciality clinics and diagnostic centres.',
        'sectors'=>['Multi-speciality Hospitals','Private Healthcare Centres','Speciality Clinics','Diagnostic Laboratories'],
        'roles'=>['Doctors','Nursing Professionals','Pharmacists','Lab Technicians','Radiology Technicians','Healthcare Administration'],
        'salary'=>'Salary depends on the employer, role, experience and qualification. Check the salary information provided in each vacancy.',
        'cost'=>'Evaluate accommodation, food, transportation and commuting expenses in your preferred Pune area.'
    ],
    [
        'slug'=>'healthcare-jobs-delhi-ncr',
        'name'=>'Delhi NCR','state'=>'Delhi, Haryana & Uttar Pradesh','code'=>'DEL','region'=>'North India',
        'description'=>'Explore healthcare opportunities across Delhi NCR, including hospitals, nursing departments, speciality clinics and medical institutions.',
        'sectors'=>['Large Hospital Networks','Speciality Healthcare Centres','Private Medical Institutions','Diagnostic and Research Centres'],
        'roles'=>['Doctors & Specialists','Nursing Professionals','Pharmacists','Medical Technologists','Healthcare Administrators','Allied Healthcare Professionals'],
        'salary'=>'Compensation differs by city, institution, role and professional experience. Refer to individual vacancies for salary details.',
        'cost'=>'Compare rent, transportation and living expenses across Delhi, Gurugram, Noida and other NCR locations.'
    ],
    [
        'slug'=>'healthcare-jobs-goa',
        'name'=>'Goa','state'=>'Goa','code'=>'GOA','region'=>'West India',
        'description'=>'Find healthcare job opportunities in Goa across hospitals, medical centres, clinics, nursing departments and healthcare services.',
        'sectors'=>['Private Hospitals','Healthcare and Medical Centres','Clinics','Diagnostic Facilities'],
        'roles'=>['Doctors','Nursing Staff','Pharmacists','Medical Laboratory Technicians','Healthcare Assistants','Hospital Administration'],
        'salary'=>'Salary information varies by position, employer, qualifications and experience. Check individual job listings for available compensation details.',
        'cost'=>'Consider accommodation availability, seasonal rental differences, food and transportation expenses in Goa.'
    ],
    [
        'slug'=>'healthcare-jobs-vijayawada',
        'name'=>'Vijayawada','state'=>'Andhra Pradesh','code'=>'VJA','region'=>'South India',
        'description'=>'Explore healthcare and hospital jobs in Vijayawada across medical institutions, private hospitals, clinics and diagnostic centres.',
        'sectors'=>['Private Multi-speciality Hospitals','Local Healthcare Institutions','Medical Clinics','Diagnostic Laboratories'],
        'roles'=>['Doctors & Physicians','Nursing Professionals','Pharmacists','Lab Technicians','Medical Assistants','Hospital Administration'],
        'salary'=>'Salary packages vary according to experience, qualification, hospital and job responsibilities. Refer to individual vacancies for disclosed salary information.',
        'cost'=>'Compare housing, transportation, food and daily expenses when considering a healthcare role in Vijayawada.'
    ],
];

$selectedCitySlug = $citySlug ?? null;
$selectedCity = collect($cities)->firstWhere('slug', $selectedCitySlug);
$isDetailsPage = !empty($selectedCitySlug);

$search = strtolower(trim(request('search','')));
$regionFilter = request('region','');

$filteredCities = collect($cities)->filter(function($city) use ($search,$regionFilter) {
    $searchMatch = !$search ||
        str_contains(strtolower($city['name']),$search) ||
        str_contains(strtolower($city['state']),$search) ||
        str_contains(strtolower($city['description']),$search);

    return $searchMatch && (!$regionFilter || $city['region'] === $regionFilter);
})->values();

// PAGINATION: 6 CITIES PER PAGE
$perPage = 6;
$currentPage = max(1, (int) request()->query('page', 1));

$paginatedCities = new \Illuminate\Pagination\LengthAwarePaginator(
    $filteredCities->forPage($currentPage, $perPage),
    $filteredCities->count(),
    $perPage,
    $currentPage,
    [
        'path' => request()->url(),
        'query' => request()->query(),
        'fragment' => 'city-guides',
    ]
);

$regions = collect($cities)->pluck('region')->unique()->values();
@endphp


@if($isDetailsPage && $selectedCity)

{{-- CITY INNER PAGE --}}

<section class="relative overflow-hidden bg-[#243B63]">
    <div class="absolute inset-0">
        <img src="{{ asset('images/carrers-banner.webp') }}"
             alt="Healthcare careers"
             class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-[#172B49]/95 via-[#243B63]/85 to-[#137E85]/55"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-8 py-14 md:py-20">
        <a href="{{ route('cities') }}"
           class="mb-8 inline-flex items-center gap-2 text-sm font-semibold text-white/80 hover:text-white">
            <i class="fa-solid fa-arrow-left"></i>
            All Cities
        </a>

        <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#65DED0]">
            HEALTHCARE CAREER DESTINATION
        </p>

        <h1 class="mt-4 max-w-3xl text-3xl font-extrabold leading-tight text-white md:text-5xl">
            Healthcare Jobs in
            <span class="text-[#65DED0]">{{ $selectedCity['name'] }}</span>
        </h1>

        <p class="mt-5 max-w-2xl text-sm leading-8 text-white/80 md:text-base">
            {{ $selectedCity['description'] }}
        </p>

        <div class="mt-7 flex flex-wrap gap-5 text-sm text-white/90">
            <span>
                <i class="fa-solid fa-location-dot mr-2 text-[#65DED0]"></i>
                {{ $selectedCity['state'] }}
            </span>
            <span>
                <i class="fa-solid fa-globe mr-2 text-[#65DED0]"></i>
                {{ $selectedCity['region'] }}
            </span>
        </div>

        <a href="{{ url('/careers') }}"
           class="mt-8 inline-flex items-center gap-3 rounded-lg bg-[#13A89E] px-7 py-3.5 text-sm font-bold text-white hover:bg-[#0D8982]">
            Explore Healthcare Jobs
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>

{{-- CITY SECTION NAVIGATION --}}

<div class="sticky top-0 z-30 border-b border-gray-200 bg-white/95 shadow-sm backdrop-blur">
    <nav class="mx-auto flex max-w-7xl gap-7 overflow-x-auto px-8 py-4 text-sm font-semibold text-gray-500">
        <a href="#overview" class="whitespace-nowrap hover:text-[#13A89E]">Overview</a>
        <a href="#hospitals" class="whitespace-nowrap hover:text-[#13A89E]">Hospital Sectors</a>
        <a href="#roles" class="whitespace-nowrap hover:text-[#13A89E]">Job Roles</a>
        <a href="#salary" class="whitespace-nowrap hover:text-[#13A89E]">Salary Guide</a>
        <a href="#living" class="whitespace-nowrap hover:text-[#13A89E]">Cost of Living</a>
        <a href="#apply" class="whitespace-nowrap hover:text-[#13A89E]">How to Apply</a>
    </nav>
</div>

<section class="bg-[#F3F7FA] py-12 md:py-16">
    <div class="mx-auto max-w-7xl px-8">

        {{-- OVERVIEW --}}

        <div id="overview" class="scroll-mt-24 grid grid-cols-1 gap-8 lg:grid-cols-12">
            <div class="lg:col-span-8">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#13A89E]">CITY OVERVIEW</p>

                <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                    Build Your Healthcare Career in {{ $selectedCity['name'] }}
                </h2>

                <p class="mt-5 max-w-3xl text-sm leading-8 text-gray-600">
                    {{ $selectedCity['description'] }}
                    Healthcare professionals can explore opportunities across hospitals,
                    clinics, diagnostic centres and other medical institutions.
                    Check individual job advertisements for current vacancies and eligibility.
                </p>
            </div>

            <div class="lg:col-span-4">
                <div class="border-l-4 border-[#13A89E] bg-white p-6 shadow-sm">
                    <p class="text-xs font-bold uppercase text-gray-400">LOCATION</p>
                    <h3 class="mt-2 text-2xl font-extrabold text-[#243B63]">
                        {{ $selectedCity['name'] }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">{{ $selectedCity['state'] }}</p>

                    <a href="{{ url('/careers') }}"
                       class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#138F91]">
                        Browse Job Listings <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- HOSPITAL SECTORS --}}

        <div id="hospitals" class="scroll-mt-24 mt-16 grid grid-cols-1 gap-10 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#13A89E]">HEALTHCARE INDUSTRY</p>

                <h2 class="mt-3 text-2xl font-extrabold leading-tight text-[#243B63] md:text-3xl">
                    Where Healthcare Professionals Work
                </h2>

                <p class="mt-4 text-sm leading-8 text-gray-500">
                    Explore the major types of healthcare employers and institutions
                    to look for in {{ $selectedCity['name'] }}.
                </p>
            </div>

            <div class="lg:col-span-8">
                <div class="divide-y divide-gray-200 border-y border-gray-200">
                    @foreach($selectedCity['sectors'] as $index => $sector)
                        <div class="group flex items-center gap-5 py-5">
                            <span class="text-sm font-bold text-[#13A89E]">0{{ $index + 1 }}</span>
                            <h3 class="flex-1 text-base font-bold text-[#243B63] group-hover:text-[#138F91]">
                                {{ $sector }}
                            </h3>
                            <i class="fa-solid fa-arrow-up-right-from-square text-sm text-gray-300 group-hover:text-[#13A89E]"></i>
                        </div>
                    @endforeach
                </div>

                <p class="mt-4 text-xs leading-6 text-gray-400">
                    These are healthcare employer categories, not confirmed current vacancies.
                    Check Vaidyog listings for active recruitment.
                </p>
            </div>
        </div>

        {{-- JOB ROLES --}}

        <div id="roles" class="scroll-mt-24 mt-20 border-t border-gray-200 pt-14">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#13A89E]">CAREER OPPORTUNITIES</p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Healthcare Jobs by Profession
            </h2>

            <p class="mt-3 text-sm leading-7 text-gray-500">
                Explore different healthcare specialisations and professional roles.
            </p>

            <div class="mt-8 grid grid-cols-1 gap-x-12 md:grid-cols-2">
                @foreach($selectedCity['roles'] as $role)
                    <a href="{{ url('/careers') }}"
                       class="group flex items-center gap-4 border-b border-gray-200 py-5">

                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#E3F3F2] text-[#138F91]">
                            <i class="fa-solid fa-user-doctor"></i>
                        </span>

                        <span class="flex-1 text-sm font-bold text-[#243B63] group-hover:text-[#138F91]">
                            {{ $role }}
                        </span>

                        <i class="fa-solid fa-arrow-right text-xs text-gray-300 group-hover:text-[#13A89E]"></i>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- SALARY AND COST OF LIVING --}}

        <div class="mt-20 grid grid-cols-1 gap-8 md:grid-cols-2">
            <div id="salary" class="scroll-mt-24 bg-[#243B63] p-7 text-white md:p-9">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 text-xl text-[#65DED0]">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                </div>

                <p class="mt-6 text-xs font-bold uppercase tracking-[0.2em] text-[#65DED0]">
                    COMPENSATION GUIDE
                </p>

                <h2 class="mt-2 text-2xl font-extrabold">Healthcare Salary Information</h2>

                <p class="mt-5 text-sm leading-8 text-white/75">{{ $selectedCity['salary'] }}</p>

                <p class="mt-3 text-sm leading-8 text-white/75">
                    Compare experience requirements, working hours,
                    employment benefits and job responsibilities.
                </p>

                <a href="{{ url('/careers') }}"
                   class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#65DED0]">
                    View Job Listings <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div id="living" class="scroll-mt-24 border border-gray-200 bg-white p-7 md:p-9">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E3F3F2] text-xl text-[#138F91]">
                    <i class="fa-solid fa-house"></i>
                </div>

                <p class="mt-6 text-xs font-bold uppercase tracking-[0.2em] text-[#13A89E]">
                    RELOCATION GUIDE
                </p>

                <h2 class="mt-2 text-2xl font-extrabold text-[#243B63]">Cost of Living</h2>

                <p class="mt-5 text-sm leading-8 text-gray-600">{{ $selectedCity['cost'] }}</p>

                <div class="mt-6 space-y-4">
                    @foreach([
                        ['icon'=>'fa-house','label'=>'Accommodation'],
                        ['icon'=>'fa-bus','label'=>'Transportation'],
                        ['icon'=>'fa-utensils','label'=>'Food and daily expenses']
                    ] as $expense)
                        <div class="flex items-center gap-3 text-sm font-semibold text-gray-600">
                            <i class="fa-solid {{ $expense['icon'] }} w-5 text-[#138F91]"></i>
                            {{ $expense['label'] }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- HOW TO APPLY --}}

        <div id="apply" class="scroll-mt-24 mt-20 border-t border-gray-200 pt-14">
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-12">
                <div class="lg:col-span-4">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#13A89E]">
                        APPLICATION PROCESS
                    </p>

                    <h2 class="mt-3 text-2xl font-extrabold leading-tight text-[#243B63] md:text-3xl">
                        How to Apply for Healthcare Jobs
                    </h2>

                    <p class="mt-4 text-sm leading-8 text-gray-500">
                        Follow these steps to identify and apply for suitable
                        healthcare opportunities in {{ $selectedCity['name'] }}.
                    </p>

                    <a href="{{ url('/careers') }}"
                       class="mt-6 inline-flex items-center gap-2 rounded-lg bg-[#138F91] px-6 py-3 text-sm font-bold text-white hover:bg-[#243B63]">
                        Find Jobs <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="lg:col-span-8">
                    <div class="divide-y divide-gray-200 border-y border-gray-200">
                        @foreach([
                            'Explore available healthcare jobs on Vaidyog.',
                            'Select your preferred job role and experience level.',
                            'Review the hospital, location and eligibility requirements.',
                            'Prepare your updated resume and relevant certificates.',
                            'Submit your application using the job application instructions.'
                        ] as $index => $step)

                            <div class="flex gap-5 py-5">
                                <span class="text-lg font-extrabold text-[#13A89E]">0{{ $index + 1 }}</span>
                                <p class="pt-1 text-sm leading-7 text-gray-600">{{ $step }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- OTHER CITY NAVIGATION --}}

        <div class="mt-20 border-t border-gray-200 pt-14">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#13A89E]">
                EXPLORE MORE LOCATIONS
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Healthcare Jobs in Other Cities
            </h2>

            <div class="mt-7 grid grid-cols-2 gap-x-8 md:grid-cols-4">
                @foreach(collect($cities)->where('slug','!=',$selectedCity['slug']) as $city)
                    <a href="{{ route('cities.show',['city'=>$city['slug']]) }}"
                       class="flex items-center justify-between border-b border-gray-200 py-4 text-sm font-semibold text-gray-600 hover:text-[#138F91]">
                        {{ $city['name'] }}
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>

@elseif($isDetailsPage)

<section class="bg-[#F3F7FA] py-24 text-center">
    <h1 class="text-2xl font-bold text-[#243B63]">City Guide Not Found</h1>
    <p class="mt-3 text-sm text-gray-500">The city guide you are looking for is not available.</p>
    <a href="{{ route('cities') }}"
       class="mt-6 inline-block rounded-lg bg-[#138F91] px-6 py-3 text-sm font-bold text-white">
        Explore All Cities
    </a>
</section>

@else

{{-- MAIN CITIES PAGE --}}

<section class="relative overflow-hidden bg-[#243B63]">
    <div class="absolute inset-0">
        <img src="{{ asset('images/location-banner.webp') }}"
             alt="Healthcare careers across India"
             class="h-full w-full object-cover object-center">

<div class="absolute inset-0 bg-gradient-to-r from-[#172B49]/60 via-[#243B63]/40 to-[#138F91]/20"></div>    </div>

    <div class="relative mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-8 py-12 md:py-16 lg:grid-cols-2">

        {{-- LEFT BANNER CONTENT --}}

        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-3 rounded-full bg-white px-4 py-3 text-xs font-extrabold tracking-wide text-[#138F91]">
                <span class="h-2 w-2 rounded-full bg-[#13A89E]"></span>
                VAIDYOG CITY CAREER GUIDES
            </span>

            <h1 class="mt-6 text-[43px] font-extrabold leading-tight text-white sm:text-5xl">
                Healthcare Jobs
                <span class="text-[#65DED0]">By City</span>
                Across India
            </h1>

            <p class="mt-5 max-w-xl text-sm leading-7 text-gray-200 md:text-base">
                Discover healthcare career opportunities in major Indian cities.
                Explore hospital hiring sectors, job roles, salary information,
                cost of living and application guidance.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#city-guides"
                   class="rounded-lg bg-[#13A89E] px-6 py-3 text-sm font-bold text-white shadow-lg transition hover:-translate-y-1 hover:bg-[#0D8982]">
                    Explore Cities <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>

                 <a href="{{ url('/careers') }}"
                   class="rounded-lg border border-white/50 px-6 py-3 text-[14px] font-bold text-white transition hover:bg-white hover:text-[#243B63]">
                    View All Jobs
                </a>
            </div>

            <div class="mt-10 flex flex-wrap gap-10">
                <div>
                    <p class="text-center text-3xl font-extrabold text-[#65DED0]">08</p>
                    <p class="mt-1 text-xs font-medium text-white">City Guides</p>
                </div>

                <div>
                    <p class="text-center text-3xl font-extrabold text-[#65DED0]">04</p>
                    <p class="mt-1 text-xs font-medium text-white">Regions Covered</p>
                </div>

                <div>
                    <p class="text-center text-3xl font-extrabold text-[#65DED0]">India</p>
                    <p class="mt-1 text-xs font-medium text-white">Career Resources</p>
                </div>
            </div>
        </div>

        {{-- RIGHT BANNER: LOCATION NAVIGATION --}}

        <div class="ml-auto w-full max-w-[490px] rounded-2xl border border-white/60 bg-white/95 p-5 shadow-2xl backdrop-blur-sm md:p-6">
            <div class="mb-5 flex items-center justify-between gap-3">
                <div>
                    <p class="text-xs font-medium text-gray-500">
                        Find Your Preferred Location
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold text-[#243B63] md:text-xl">
                        Explore Healthcare Cities
                    </h2>
                </div>

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#E3F3F2] text-lg text-[#138F91]">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
            </div>

            {{-- ONLY THREE LOCATIONS --}}

            <div class="space-y-2">
                @foreach(collect($cities)->take(3) as $city)
                    <a href="{{ route('cities.show',['city'=>$city['slug']]) }}"
                       class="group flex items-center gap-3 rounded-xl border border-gray-100 bg-[#F3F7FA] p-3 transition duration-300 hover:border-[#13A89E] hover:bg-white hover:shadow-sm">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#243B63] text-xs font-extrabold text-white">
                            {{ $city['code'] }}
                        </div>

                        <div class="min-w-0 flex-1">
                            <h3 class="text-sm font-bold text-[#243B63] transition group-hover:text-[#138F91]">
                                {{ $city['name'] }}
                            </h3>

                            <p class="mt-0.5 text-xs text-gray-500">
                                {{ $city['state'] }}
                            </p>
                        </div>

                        <i class="fa-solid fa-arrow-right text-sm text-[#138F91] transition group-hover:translate-x-1"></i>
                    </a>
                @endforeach
            </div>

            {{-- NAVIGATE TO COMPLETE CITY DIRECTORY --}}

            <a href="#city-guides"
               class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#138F91] transition hover:text-[#243B63]">
                View All Cities
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

{{-- SEARCH BAR --}}

<section class="relative z-10 mx-auto -mt-7 max-w-7xl px-8">
    <form action="{{ route('cities') }}#city-guides"
          method="GET"
          class="grid grid-cols-1 gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-lg md:grid-cols-12">

        <div class="relative md:col-span-8">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

            <input type="text"
                   name="search"
                   value="{{ request('search') }}"
                   placeholder="Search Bangalore, Hyderabad, Mumbai, Chennai..."
                   class="w-full rounded-lg border border-gray-200 py-3 pl-11 pr-4 text-sm outline-none focus:border-[#13A89E] focus:ring-2 focus:ring-[#13A89E]/10">
        </div>

        <div class="md:col-span-2">
            <select name="region"
                    class="w-full rounded-lg border border-gray-200 bg-white px-3 py-3 text-sm text-gray-600 outline-none focus:border-[#13A89E]">
                <option value="">All Regions</option>

                @foreach($regions as $region)
                    <option value="{{ $region }}" @selected(request('region') == $region)>
                        {{ $region }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="md:col-span-2">
            <button type="submit"
                    class="w-full rounded-lg bg-[#138F91] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#243B63]">
                Search Cities
            </button>
        </div>
    </form>
</section>

{{-- ALL CITY GUIDES --}}

<section id="city-guides" class="scroll-mt-24 bg-[#F3F7FA] py-12 md:py-16">
    <div class="mx-auto max-w-7xl px-8">

        <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#138F91]">
                    EXPLORE LOCATIONS
                </p>

                <h2 class="mt-2 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                    Healthcare Jobs by City
                </h2>

                <p class="mt-2 text-sm text-gray-500">
                    Explore healthcare career guides in popular Indian cities.
                </p>
            </div>

            <p class="text-sm font-semibold text-gray-400">
                {{ $filteredCities->count() }} Cities Found
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">

            {{-- FILTER SIDEBAR --}}

            <aside class="h-fit rounded-xl border border-gray-200 bg-white p-5 shadow-sm lg:col-span-3">
                <div class="mb-5 flex items-center justify-between">
                    <h3 class="text-sm font-extrabold text-[#243B63]">Filter Locations</h3>

                    <a href="{{ route('cities') }}#city-guides"
                       class="text-xs font-semibold text-[#138F91]">Reset</a>
                </div>

                <form action="{{ route('cities') }}#city-guides" method="GET">
                    <input type="hidden" name="search" value="{{ request('search') }}">

                    <h4 class="mb-4 text-xs font-bold uppercase tracking-wide text-[#243B63]">
                        Select Region
                    </h4>

                    @foreach($regions as $region)
                        <label class="mb-4 flex cursor-pointer items-center gap-2 text-sm text-gray-600">
                            <input type="radio"
                                   name="region"
                                   value="{{ $region }}"
                                   @checked(request('region') == $region)
                                   onchange="this.form.submit()"
                                   class="accent-[#138F91]">
                            {{ $region }}
                        </label>
                    @endforeach

                    <label class="mt-2 flex cursor-pointer items-center gap-2 border-t border-gray-100 pt-4 text-sm text-gray-600">
                        <input type="radio"
                               name="region"
                               value=""
                               @checked(!request('region'))
                               onchange="this.form.submit()"
                               class="accent-[#138F91]">
                        All Regions
                    </label>
                </form>

                <div class="mt-6 border-t border-gray-100 pt-5">
                    <h4 class="mb-3 text-xs font-bold uppercase tracking-wide text-[#243B63]">
                        Popular Job Categories
                    </h4>

                    @foreach([
                        'Doctors & Physicians',
                        'Nursing Professionals',
                        'Pharmacists',
                        'Lab Technicians',
                        'Allied Healthcare',
                        'Hospital Administration'
                    ] as $role)

                        <p class="mb-3 flex items-center gap-2 text-xs text-gray-600">
                            <i class="fa-solid fa-check text-[#13A89E]"></i>
                            {{ $role }}
                        </p>
                    @endforeach
                </div>
            </aside>

            {{-- CLICKABLE CITY CARDS --}}

            <div class="lg:col-span-9">
                @if($filteredCities->count() > 0)

                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                        @foreach($paginatedCities as $city)

                            <a href="{{ route('cities.show',['city'=>$city['slug']]) }}"
                               aria-label="Explore healthcare jobs in {{ $city['name'] }}"
                               class="group block h-full rounded-2xl focus:outline-none focus:ring-2 focus:ring-[#13A89E] focus:ring-offset-2">

                                <article class="flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 group-hover:-translate-y-1 group-hover:border-[#13A89E] group-hover:shadow-lg">

                                    <div class="h-1.5 bg-gradient-to-r from-[#243B63] to-[#13A89E]"></div>

                                    <div class="flex flex-1 flex-col p-5">
                                        <div class="flex items-center justify-between">
                                            <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-gradient-to-br from-[#243B63] to-[#138F91] text-sm font-extrabold text-white">
                                                {{ $city['code'] }}
                                            </div>

                                            <span class="rounded-full bg-[#E3F3F2] px-3 py-1.5 text-xs font-bold text-[#138F91]">
                                                {{ $city['region'] }}
                                            </span>
                                        </div>

                                        <h3 class="mt-5 text-xl font-extrabold text-[#243B63] transition group-hover:text-[#138F91]">
                                            Healthcare Jobs in {{ $city['name'] }}
                                        </h3>

                                        <p class="mt-1 text-xs font-medium text-gray-400">
                                            <i class="fa-solid fa-location-dot mr-1 text-[#13A89E]"></i>
                                            {{ $city['state'] }}
                                        </p>

                                        <p class="mt-4 min-h-[84px] text-sm leading-7 text-gray-500">
                                            {{ $city['description'] }}
                                        </p>

                                        <div class="mt-4 flex flex-wrap gap-2">
                                            @foreach(collect($city['sectors'])->take(3) as $sector)
                                                <span class="rounded-md bg-[#F0F4F8] px-3 py-2 text-xs text-[#52627A]">
                                                    {{ $sector }}
                                                </span>
                                            @endforeach
                                        </div>

                                        <div class="mt-5 flex items-center justify-between border-t border-gray-100 pt-4">
                                            <span class="text-xs font-medium text-gray-400">
                                                City Career Guide
                                            </span>

                                            <span class="inline-flex items-center gap-2 text-sm font-bold text-[#138F91] transition group-hover:text-[#243B63]">
                                                View Details
                                                <i class="fa-solid fa-chevron-right transition group-hover:translate-x-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </a>

                        @endforeach

                    </div>

                    {{-- CITY PAGINATION --}}

                    @if($paginatedCities->hasPages())
                        <div class="mt-10 flex flex-wrap items-center justify-center gap-2">

                            {{-- PREVIOUS BUTTON --}}

                            @if($paginatedCities->onFirstPage())
                                <span class="rounded-lg border border-gray-200 bg-gray-100 px-4 py-2 text-sm text-gray-400">
                                    Previous
                                </span>
                            @else
                                <a href="{{ $paginatedCities->previousPageUrl() }}"
                                   class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-[#243B63] transition hover:bg-[#138F91] hover:text-white">
                                    Previous
                                </a>
                            @endif

                            {{-- PAGE NUMBERS --}}

                            @foreach($paginatedCities->getUrlRange(1, $paginatedCities->lastPage()) as $page => $url)
                                <a href="{{ $url }}"
                                   aria-current="{{ $paginatedCities->currentPage() == $page ? 'page' : 'false' }}"
                                   class="rounded-lg border px-4 py-2 text-sm font-bold transition {{ $paginatedCities->currentPage() == $page ? 'border-[#138F91] bg-[#138F91] text-white' : 'border-gray-200 bg-white text-[#243B63] hover:border-[#138F91] hover:text-[#138F91]' }}">
                                    {{ $page }}
                                </a>
                            @endforeach

                            {{-- NEXT BUTTON --}}

                            @if($paginatedCities->hasMorePages())
                                <a href="{{ $paginatedCities->nextPageUrl() }}"
                                   class="rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-semibold text-[#243B63] transition hover:bg-[#138F91] hover:text-white">
                                    Next
                                </a>
                            @else
                                <span class="rounded-lg border border-gray-200 bg-gray-100 px-4 py-2 text-sm text-gray-400">
                                    Next
                                </span>
                            @endif

                        </div>

                        <p class="mt-4 text-center text-xs text-gray-400">
                            Showing {{ $paginatedCities->firstItem() }}–{{ $paginatedCities->lastItem() }}
                            of {{ $paginatedCities->total() }} cities
                        </p>
                    @endif

                @else

                    <div class="rounded-xl border border-gray-200 bg-white p-12 text-center">
                        <i class="fa-solid fa-location-dot mb-4 text-4xl text-gray-300"></i>

                        <h3 class="text-xl font-bold text-[#243B63]">No Cities Found</h3>

                        <p class="mt-2 text-sm text-gray-500">
                            Try another city name or region.
                        </p>

                        <a href="{{ route('cities') }}#city-guides"
                           class="mt-5 inline-block rounded-lg bg-[#138F91] px-6 py-3 text-sm font-bold text-white">
                            View All Cities
                        </a>
                    </div>

                @endif
            </div>

        </div>
    </div>
</section>

{{-- WHY VAIDYOG --}}

<section class="bg-white py-14 md:py-16">
    <div class="mx-auto max-w-7xl px-8">
        <div class="mx-auto mb-10 max-w-2xl text-center">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#138F91]">
                YOUR HEALTHCARE CAREER PARTNER
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Find the Right Healthcare Opportunity
            </h2>

            <p class="mt-3 text-sm leading-7 text-gray-500">
                Explore career resources and job opportunities to help you
                make informed decisions about your healthcare career.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach([
                ['icon'=>'fa-location-dot','title'=>'City-Based Opportunities','text'=>'Explore healthcare career resources across multiple Indian cities.'],
                ['icon'=>'fa-hospital','title'=>'Hospital Career Options','text'=>'Discover different healthcare employers and professional roles.'],
                ['icon'=>'fa-file-lines','title'=>'Application Guidance','text'=>'Understand job requirements and prepare your application.'],
                ['icon'=>'fa-user-doctor','title'=>'Healthcare Professions','text'=>'Explore opportunities across doctors, nurses, pharmacy and allied healthcare.']
            ] as $item)

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-[#13A89E] hover:shadow-md">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E3F3F2]">
                        <i class="fa-solid {{ $item['icon'] }} text-xl text-[#138F91]"></i>
                    </div>

                    <h3 class="mt-5 font-extrabold text-[#243B63]">{{ $item['title'] }}</h3>

                    <p class="mt-2 text-sm leading-7 text-gray-500">{{ $item['text'] }}</p>
                </div>

            @endforeach
        </div>
    </div>
</section>

{{-- FINAL CTA --}}

<section class="bg-[#F3F7FA] px-5 py-14">
    <div class="mx-auto w-full max-w-[1216px] overflow-hidden rounded-2xl bg-gradient-to-r from-[#243B63] to-[#138F91] px-6 py-10 text-center md:px-12 md:py-14">

        <h2 class="text-2xl font-extrabold text-white md:text-3xl">
            Ready to Explore Healthcare Jobs?
        </h2>

        <p class="mx-auto mt-3 max-w-2xl text-sm leading-7 text-white/85">
            Browse available healthcare vacancies and discover opportunities
            that match your qualifications and career goals.
        </p>

        <a href="{{ url('/careers') }}"
           class="mt-7 inline-flex items-center gap-2 rounded-lg bg-white px-7 py-3.5 text-sm font-bold text-[#243B63] shadow-md transition hover:-translate-y-1 hover:bg-gray-100">
            Explore All Jobs
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>
</section>

@endif

@endsection