@extends('layouts.app')

@section('title', 'AYUSH Career Guides | Vaidyog')

@section('description', 'Explore Ayurveda, BAMS, Homeopathy, BHMS, Unani, Siddha, Yoga and Naturopathy career guides, qualifications and registration information.')

@section('content')

@php

$guides = [

    [
        'slug' => 'ayurveda-doctorjobs-guide',
        'title' => 'Ayurveda Doctor Career Guide',
        'category' => 'Ayurveda',
        'initial' => 'AY',
        'qualification' => 'BAMS',
        'duration' => '5.5 years including internship',
        'short' => 'Explore career opportunities for Ayurveda graduates in hospitals, clinics, wellness centres and Panchakarma centres.',
        'description' => 'Ayurveda is a traditional system of healthcare in India. BAMS graduates can explore professional opportunities in clinical practice, hospitals, wellness centres, education and research, subject to applicable registration and eligibility requirements.',
        'careers' => [
            'Ayurveda Doctor',
            'Panchakarma Doctor',
            'AYUSH Medical Officer',
            'Ayurveda Consultant',
            'Clinical Practitioner',
            'Ayurveda Research Associate',
            'Ayurveda Lecturer'
        ],
        'skills' => [
            'Knowledge of Ayurvedic principles',
            'Patient consultation',
            'Clinical assessment',
            'Treatment planning',
            'Communication skills',
            'Medical documentation'
        ],
        'steps' => [
            'Complete a recognised BAMS programme.',
            'Complete the required internship.',
            'Obtain applicable professional registration.',
            'Check the eligibility requirements for each position.',
            'Apply to suitable hospitals, clinics and healthcare organisations.'
        ],
        'keyword' => 'Ayurveda doctor jobs, BAMS jobs in hospitals, Panchakarma doctor jobs',
        'icon' => 'fa-leaf'
    ],

    [
        'slug' => 'bams-governmentjobs',
        'title' => 'BAMS Government Jobs Guide',
        'category' => 'Ayurveda',
        'initial' => 'BM',
        'qualification' => 'BAMS',
        'duration' => '5.5 years including internship',
        'short' => 'Understand government career opportunities for BAMS graduates in AYUSH departments and public healthcare.',
        'description' => 'BAMS graduates may be eligible for government healthcare positions depending on recruitment notifications, registration requirements and state-specific eligibility criteria. Opportunities may be announced by state AYUSH departments, government hospitals and public health programmes.',
        'careers' => [
            'AYUSH Medical Officer',
            'Government Ayurveda Doctor',
            'NHM Medical Officer',
            'Government Hospital Doctor',
            'Research Officer',
            'Teaching Positions',
            'Public Health Programme Roles'
        ],
        'skills' => [
            'Clinical knowledge',
            'Patient management',
            'Knowledge of recruitment notifications',
            'Medical documentation',
            'Communication skills',
            'Competitive examination preparation'
        ],
        'steps' => [
            'Complete a recognised BAMS qualification.',
            'Complete the required internship and registration.',
            'Check official state and central government notifications.',
            'Review age, qualification and experience requirements.',
            'Submit applications according to the official notification.'
        ],
        'keyword' => 'BAMS government jobs, AYUSH Medical Officer recruitment, NHM BAMS jobs',
        'icon' => 'fa-building-columns'
    ],

    [
        'slug' => 'homeopathy-career',
        'title' => 'Homeopathy & BHMS Career Guide',
        'category' => 'Homeopathy',
        'initial' => 'BH',
        'qualification' => 'BHMS',
        'duration' => '5.5 years including internship',
        'short' => 'Discover BHMS career options in clinical practice, hospitals, education, research and healthcare organisations.',
        'description' => 'BHMS graduates can explore professional opportunities in homeopathic clinical practice, healthcare institutions, teaching and research. Career eligibility depends on recognised qualifications, applicable registration and employer requirements.',
        'careers' => [
            'Homeopathy Doctor',
            'Homeopathic Consultant',
            'Private Practitioner',
            'Medical Officer',
            'Homeopathy Lecturer',
            'Research Associate',
            'Healthcare Consultant'
        ],
        'skills' => [
            'Knowledge of homeopathic principles',
            'Patient consultation',
            'Clinical documentation',
            'Communication skills',
            'Patient counselling',
            'Healthcare ethics'
        ],
        'steps' => [
            'Complete a recognised BHMS programme.',
            'Complete the required internship.',
            'Obtain applicable professional registration.',
            'Explore clinical, teaching and research opportunities.',
            'Verify eligibility requirements before applying.'
        ],
        'keyword' => 'BHMS career scope, homeopathy doctor jobs, BHMS career opportunities',
        'icon' => 'fa-heart-pulse'
    ],

    [
        'slug' => 'unani-siddha-careers',
        'title' => 'Unani & Siddha Career Guide',
        'category' => 'Unani & Siddha',
        'initial' => 'US',
        'qualification' => 'BUMS / BSMS',
        'duration' => 'As prescribed by the recognised programme',
        'short' => 'Explore Unani and Siddha career opportunities in clinical practice, government healthcare and education.',
        'description' => 'Unani and Siddha graduates can explore career opportunities in traditional medicine, clinical services, government healthcare, research and education. The required qualification and professional registration depend on the applicable medical system and relevant authority.',
        'careers' => [
            'Unani Doctor',
            'Siddha Doctor',
            'Medical Officer',
            'Private Practitioner',
            'Government Healthcare Doctor',
            'Research Associate',
            'Teaching Professional'
        ],
        'skills' => [
            'Knowledge of the respective medical system',
            'Patient consultation',
            'Clinical assessment',
            'Communication skills',
            'Medical documentation',
            'Healthcare ethics'
        ],
        'steps' => [
            'Complete the relevant recognised BUMS or BSMS programme.',
            'Complete the prescribed internship.',
            'Verify applicable registration requirements.',
            'Explore relevant government and private opportunities.',
            'Check qualification requirements in each recruitment notification.'
        ],
        'keyword' => 'BUMS career, BSMS career, Unani doctor jobs, Siddha doctor jobs',
        'icon' => 'fa-staff-snake'
    ],

    [
        'slug' => 'yoga-naturopathycareers',
        'title' => 'Yoga & Naturopathy Career Guide',
        'category' => 'Yoga & Naturopathy',
        'initial' => 'YN',
        'qualification' => 'BNYS',
        'duration' => 'As prescribed by the recognised university',
        'short' => 'Learn about BNYS opportunities in wellness centres, yoga therapy, naturopathy and healthcare services.',
        'description' => 'Yoga and Naturopathy graduates can explore professional opportunities in wellness centres, hospitals, educational institutions, rehabilitation settings and related healthcare services. Professional scope and eligibility depend on the recognised qualification and applicable rules.',
        'careers' => [
            'Naturopathy Doctor',
            'Yoga Therapist',
            'Wellness Consultant',
            'Yoga Instructor',
            'Naturopathy Practitioner',
            'Wellness Centre Professional',
            'Research Associate'
        ],
        'skills' => [
            'Yoga and naturopathy knowledge',
            'Wellness assessment',
            'Communication skills',
            'Patient guidance',
            'Lifestyle counselling',
            'Professional documentation'
        ],
        'steps' => [
            'Complete a recognised BNYS programme.',
            'Complete the required practical training.',
            'Verify applicable registration or professional requirements.',
            'Explore wellness, education and healthcare opportunities.',
            'Check the scope and eligibility for each role.'
        ],
        'keyword' => 'BNYS career, yoga therapist jobs, naturopathy doctor jobs',
        'icon' => 'fa-spa'
    ],

    [
        'slug' => 'ayush-registrationguide',
        'title' => 'AYUSH Practitioner Registration Guide',
        'category' => 'Registration',
        'initial' => 'RG',
        'qualification' => 'Recognised AYUSH Qualification',
        'duration' => 'Depends on the relevant authority',
        'short' => 'Understand registration requirements, documents and eligibility for AYUSH practitioners.',
        'description' => 'Professional registration requirements vary depending on the medical system, qualification and applicable national or state framework. Practitioners should verify the latest requirements with the relevant official council, board or authority before starting professional practice.',
        'careers' => [
            'Ayurveda Practitioner Registration',
            'Homeopathy Practitioner Registration',
            'Unani Practitioner Registration',
            'Siddha Practitioner Registration',
            'Applicable Yoga and Naturopathy Requirements',
            'State Council Registration',
            'Professional Registration Renewal'
        ],
        'skills' => [
            'Understanding registration rules',
            'Document preparation',
            'Qualification verification',
            'Knowledge of state council procedures',
            'Professional compliance'
        ],
        'steps' => [
            'Identify the relevant medical system and registration authority.',
            'Verify whether your qualification is recognised.',
            'Check the current application requirements.',
            'Prepare educational and internship documents as applicable.',
            'Submit the application through the official authority.',
            'Follow the authority instructions for verification and registration.'
        ],
        'keyword' => 'AYUSH practitioner registration, state Ayurveda board registration',
        'icon' => 'fa-id-card'
    ],

    [
        'slug' => 'ayush-teaching-research-careers',
        'title' => 'AYUSH Teaching & Research Career Guide',
        'category' => 'Ayurveda',
        'initial' => 'TR',
        'qualification' => 'Relevant AYUSH Degree / Postgraduate Qualification',
        'duration' => 'Varies by qualification',
        'short' => 'Explore teaching, academic and research opportunities in AYUSH fields.',
        'description' => 'AYUSH graduates and postgraduate professionals can explore opportunities in education, academic institutions and research organisations, subject to the required qualifications and eligibility.',
        'careers' => [
            'AYUSH Lecturer',
            'Assistant Professor',
            'Research Assistant',
            'Research Associate',
            'Clinical Research Professional'
        ],
        'skills' => [
            'Subject knowledge',
            'Research methodology',
            'Communication skills',
            'Academic writing',
            'Clinical knowledge'
        ],
        'steps' => [
            'Complete a recognised AYUSH qualification.',
            'Pursue postgraduate studies where required.',
            'Develop research and academic skills.',
            'Check the eligibility criteria for teaching or research positions.',
            'Apply to eligible institutions and research organisations.'
        ],
        'keyword' => 'AYUSH teaching careers, AYUSH research jobs, AYUSH lecturer',
        'icon' => 'fa-graduation-cap'
    ],

];

$categories = [
    'Ayurveda',
    'Homeopathy',
    'Unani & Siddha',
    'Yoga & Naturopathy',
    'Registration'
];

$selectedGuideSlug = $guideSlug ?? null;
$selectedGuide = collect($guides)->firstWhere('slug', $selectedGuideSlug);

$isDetailsPage = !empty($selectedGuideSlug);

$search = strtolower(trim(request('search', '')));
$categoryFilter = request('category', '');

$filteredGuides = collect($guides)->filter(function ($guide) use ($search, $categoryFilter) {

    $searchMatch = !$search ||
        str_contains(strtolower($guide['title']), $search) ||
        str_contains(strtolower($guide['short']), $search) ||
        str_contains(strtolower($guide['qualification']), $search) ||
        str_contains(strtolower($guide['keyword']), $search);

    $categoryMatch = !$categoryFilter ||
        $guide['category'] === $categoryFilter;

    return $searchMatch && $categoryMatch;

})->values();

/* PAGINATION */

$perPage = 6;

$totalGuides = $filteredGuides->count();

$totalPages = max(1, (int) ceil($totalGuides / $perPage));

$currentPage = min(
    max(1, (int) request('page', 1)),
    $totalPages
);

$paginatedGuides = $filteredGuides->slice(
    ($currentPage - 1) * $perPage,
    $perPage
);

$startGuide = $totalGuides > 0
    ? (($currentPage - 1) * $perPage) + 1
    : 0;

$endGuide = min($currentPage * $perPage, $totalGuides);

@endphp


{{-- =====================================================
     INDIVIDUAL AYUSH DETAIL PAGE
===================================================== --}}

@if($isDetailsPage && $selectedGuide)

<section class="relative overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C] py-9 md:py-11">

    <div class="absolute -left-16 -top-20 h-64 w-64 rounded-full bg-white/10"></div>
    <div class="absolute -right-16 -bottom-24 h-72 w-72 rounded-full bg-white/10"></div>

    <div class="relative mx-auto max-w-7xl px-8 text-center">

        <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-white/80">
            VAIDYOG AYUSH CAREER GUIDES
        </p>

        <h1 class="text-2xl font-extrabold text-white md:text-3xl">
            {{ $selectedGuide['title'] }}
        </h1>

        <p class="mt-2 text-sm text-white/85">
            Explore your career opportunities in AYUSH.
        </p>

    </div>

</section>


<section class="bg-slate-50 py-10 md:py-14">

    <div class="mx-auto max-w-5xl px-8">

        <a href="{{ route('ayush') }}"
           class="mb-6 inline-flex items-center gap-2 text-sm font-semibold text-[#008F86] hover:text-[#34466F]">

            <i class="fa-solid fa-arrow-left"></i>
            All AYUSH Guides

        </a>


        {{-- GUIDE SUMMARY --}}

        <div class="mb-5 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

            <div class="flex flex-col gap-5 md:flex-row md:items-center">

                <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-[#46577F] to-[#3DB49C] text-xl font-extrabold text-white">
                    {{ $selectedGuide['initial'] }}
                </div>

                <div class="min-w-0 flex-1">

                    <h2 class="text-xl font-extrabold text-[#253452] md:text-2xl">
                        {{ $selectedGuide['title'] }}
                    </h2>

                    <p class="mt-2 text-sm font-medium text-gray-500">
                        {{ $selectedGuide['category'] }} Career Guide
                    </p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs font-medium text-gray-600">

                        <span class="rounded-full bg-slate-100 px-3 py-1">
                            {{ $selectedGuide['qualification'] }}
                        </span>

                        <span class="rounded-full bg-slate-100 px-3 py-1">
                            {{ $selectedGuide['category'] }}
                        </span>

                    </div>

                </div>

            </div>


            <div class="mt-6 grid grid-cols-1 gap-5 border-t border-gray-100 pt-5 sm:grid-cols-2">

                <div>
                    <p class="text-xs text-gray-400">Qualification</p>
                    <p class="mt-1 text-sm font-bold text-[#253452]">
                        {{ $selectedGuide['qualification'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Course Duration</p>
                    <p class="mt-1 text-sm font-bold text-[#253452]">
                        {{ $selectedGuide['duration'] }}
                    </p>
                </div>

            </div>

        </div>


        {{-- MAIN CONTENT AND SIDEBAR --}}

        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">

            <div class="space-y-5 md:col-span-2">

                {{-- OVERVIEW --}}

                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

                    <h3 class="mb-4 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                        Career Overview
                    </h3>

                    <p class="text-sm leading-7 text-gray-600">
                        {{ $selectedGuide['description'] }}
                    </p>

                </div>


                {{-- CAREER OPPORTUNITIES --}}

                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

                    <h3 class="mb-4 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                        Career Opportunities
                    </h3>

                    <div class="grid gap-3 sm:grid-cols-2">

                        @foreach($selectedGuide['careers'] as $career)

                            <div class="flex items-start gap-3 rounded-lg bg-slate-50 p-3">

                                <i class="fa-solid fa-check-circle mt-0.5 text-[#008F86]"></i>

                                <span class="text-sm text-gray-600">
                                    {{ $career }}
                                </span>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- SKILLS --}}

                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

                    <h3 class="mb-4 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                        Important Skills
                    </h3>

                    <div class="flex flex-wrap gap-2">

                        @foreach($selectedGuide['skills'] as $skill)

                            <span class="rounded-md bg-slate-100 px-3 py-2 text-xs font-medium text-gray-600">
                                {{ $skill }}
                            </span>

                        @endforeach

                    </div>

                </div>


                {{-- HOW TO START --}}

                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

                    <h3 class="mb-5 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                        How to Start Your Career
                    </h3>

                    <div class="space-y-4">

                        @foreach($selectedGuide['steps'] as $index => $step)

                            <div class="flex gap-4">

                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#E8F5F1] text-sm font-bold text-[#008F86]">
                                    {{ $index + 1 }}
                                </div>

                                <p class="pt-1 text-sm leading-6 text-gray-600">
                                    {{ $step }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- IMPORTANT NOTE --}}

                <div class="rounded-2xl border border-[#DCEAE6] bg-[#F0F7F5] p-5 md:p-6">

                    <h3 class="mb-2 text-sm font-bold text-[#34466F]">
                        Important Information
                    </h3>

                    <p class="text-sm leading-7 text-gray-600">
                        Qualifications, registration, professional scope and recruitment
                        eligibility may vary by state and relevant authority. Verify
                        the latest requirements through official government notifications,
                        recognised institutions and applicable councils.
                    </p>

                </div>

            </div>


            {{-- RIGHT SIDEBAR --}}

            <div class="space-y-5">

                <div class="rounded-2xl bg-gradient-to-br from-[#46577F] to-[#3DB49C] p-5 text-center shadow-md">

                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-white/20 text-white">
                        <i class="fa-solid fa-graduation-cap text-xl"></i>
                    </div>

                    <h3 class="mt-4 text-base font-bold text-white">
                        Explore AYUSH Careers
                    </h3>

                    <p class="mt-2 text-xs leading-6 text-white/85">
                        Discover more career guides and professional opportunities.
                    </p>

                    <a href="{{ route('ayush') }}"
                       class="mt-4 block rounded-lg bg-white px-4 py-3 text-sm font-bold text-[#34466F] transition hover:bg-gray-100">
                        Browse All Guides
                    </a>

                </div>


                {{-- RELATED GUIDES --}}

                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                    <h3 class="mb-4 text-xs font-bold uppercase tracking-wide text-gray-400">
                        Other AYUSH Guides
                    </h3>

                    <div class="space-y-4">

                        @foreach(collect($guides)->where('slug', '!=', $selectedGuide['slug'])->take(5) as $related)

                            <a href="{{ route('ayush.show', ['guide' => $related['slug']]) }}"
                               class="group flex items-center gap-3">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-[#E8F5F1] text-sm font-bold text-[#008F86]">
                                    {{ $related['initial'] }}
                                </div>

                                <div class="min-w-0 flex-1">

                                    <p class="text-sm font-semibold text-[#253452] group-hover:text-[#008F86]">
                                        {{ $related['title'] }}
                                    </p>

                                    <p class="mt-1 text-xs text-gray-400">
                                        {{ $related['category'] }}
                                    </p>

                                </div>

                                <i class="fa-solid fa-arrow-right text-xs text-gray-400 group-hover:text-[#008F86]"></i>

                            </a>

                        @endforeach

                    </div>

                </div>


                {{-- CATEGORY LINKS --}}

                <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                    <h3 class="mb-4 text-xs font-bold uppercase tracking-wide text-gray-400">
                        AYUSH Categories
                    </h3>

                    <div class="space-y-3">

                        @foreach($categories as $cat)

                            <a href="{{ route('ayush', ['category' => $cat]) }}#ayush-guides"
                               class="flex items-center justify-between text-sm text-gray-600 hover:text-[#008F86]">

                                {{ $cat }}

                                <i class="fa-solid fa-chevron-right text-xs"></i>

                            </a>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


@elseif($isDetailsPage)

{{-- GUIDE NOT FOUND --}}

<section class="bg-slate-50 py-24 text-center">

    <h1 class="text-2xl font-bold text-[#34466F]">
        AYUSH Guide Not Found
    </h1>

    <p class="mt-2 text-sm text-gray-500">
        The guide you are looking for may not be available.
    </p>

    <a href="{{ route('ayush') }}"
       class="mt-5 inline-block rounded-lg bg-[#34466F] px-6 py-3 text-sm font-bold text-white">
        Browse AYUSH Guides
    </a>

</section>


@else

{{-- =====================================================
     AYUSH LISTING PAGE
===================================================== --}}


{{-- HERO BANNER --}}

<section class="relative overflow-hidden bg-[#26334f]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/ayush.webp') }}"
            alt="AYUSH healthcare careers"
            class="h-full w-full object-cover object-center"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/30"></div>

    </div>


    <div class="relative mx-auto grid max-w-7xl grid-cols-1 items-center gap-8 px-8 py-12 md:py-16 lg:grid-cols-2 lg:gap-10">

        {{-- LEFT BANNER CONTENT --}}

        <div class="max-w-2xl">

            <span class="inline-flex items-center gap-3 rounded-full bg-white px-4 py-3 text-xs font-extrabold tracking-wide text-[#008F86]">

                <span class="h-2 w-2.5 rounded-full bg-[#00A69A]"></span>

                VAIDYOG AYUSH CAREER GUIDES

            </span>


            <h1 class="mt-6 text-[32px] font-extrabold leading-[1.18] text-white sm:text-5xl lg:text-[43px]">

                Explore AYUSH

                <span class="text-[#00B5A5]">Careers</span>

                Across India

            </h1>


            <p class="mt-5 max-w-xl text-sm leading-7 text-[#d5d5eb] md:text-base">

                Discover career opportunities across Ayurveda, Homeopathy,
                Unani, Siddha, Yoga and Naturopathy. Explore qualifications,
                government job guidance and professional registration resources.

            </p>


            <div class="mt-7 flex flex-wrap gap-3">

                <a href="#ayush-guides"
                   class="rounded-lg bg-[#00A69A] px-4 py-3 text-sm font-bold text-white shadow-lg transition duration-300 hover:-translate-y-1 hover:bg-[#008F86]">

                    Explore AYUSH Guides
                    <i class="fa-solid fa-arrow-right ml-2"></i>

                </a>

                <a href="{{ url('/careers') }}"
                   class="rounded-lg border border-white/70 bg-white px-4 py-3 text-sm font-bold text-[#34466F] transition duration-300 hover:-translate-y-1 hover:bg-gray-100">

                    General Careers

                </a>

            </div>


            {{-- BANNER STATS --}}

            <div class="mt-9 flex flex-wrap justify-left gap-8 md:gap-10">

                <div class="text-center">
                    <p class="text-2xl font-extrabold text-[#00B5A5]">{{ count($guides) }}</p>
                    <p class="mt-1.5 text-xs font-medium tracking-wide text-white">
                        Career Guides
                    </p>
                </div>

                <div class="text-center">
                    <p class="text-2xl font-extrabold text-[#00B5A5]">5+</p>
                    <p class="mt-1.5 text-xs font-medium tracking-wide text-white">
                        AYUSH Systems
                    </p>
                </div>

                <div class="text-center">
                    <p class="text-2xl font-extrabold text-[#00B5A5]">India</p>
                    <p class="mt-1.5 text-xs font-medium tracking-wide text-white">
                        Career Resources
                    </p>
                </div>

            </div>

        </div>


        {{-- RIGHT BANNER CARD --}}

        <div class="ml-auto w-full max-w-[500px] rounded-2xl border border-white/60 bg-white/95 p-4 shadow-2xl backdrop-blur-sm md:p-5">

            <div class="mb-4 flex items-center justify-between gap-3">

                <div>

                    <p class="text-xs font-medium text-[#71829e]">
                        Explore AYUSH Opportunities
                    </p>

                    <h2 class="mt-1 text-lg font-extrabold tracking-tight text-[#172033] md:text-xl">
                        Discover Your Career Path
                    </h2>

                </div>

                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-xl text-blue-600">
                    <i class="fa-solid fa-leaf"></i>
                </div>

            </div>


            <div class="space-y-2">

                @foreach([
                    ['name' => 'Ayurveda Careers', 'sub' => 'BAMS career opportunities', 'initial' => 'AY', 'color' => 'bg-green-100 text-green-700', 'category' => 'Ayurveda'],
                    ['name' => 'Homeopathy Careers', 'sub' => 'BHMS career opportunities', 'initial' => 'BH', 'color' => 'bg-purple-100 text-purple-700', 'category' => 'Homeopathy'],
                    ['name' => 'AYUSH Registration', 'sub' => 'Practitioner registration guide', 'initial' => 'RG', 'color' => 'bg-indigo-100 text-indigo-700', 'category' => 'Registration']
                ] as $career)

                    <a href="{{ route('ayush', ['category' => $career['category']]) }}#ayush-guides"
                       class="group flex items-center gap-3 rounded-xl border border-gray-100 bg-slate-50 p-3 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-[#00A69A]/40 hover:bg-white hover:shadow-md">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg {{ $career['color'] }} text-sm font-extrabold">
                            {{ $career['initial'] }}
                        </div>

                        <div class="min-w-0 flex-1">

                            <h3 class="text-[13px] font-extrabold text-[#253044]">
                                {{ $career['name'] }}
                            </h3>

                            <p class="mt-0.5 text-xs text-[#71829e]">
                                {{ $career['sub'] }}
                            </p>

                        </div>

                        <span class="text-base text-blue-600 transition duration-300 group-hover:translate-x-1">
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                    </a>

                @endforeach

            </div>


            <div class="mt-4">

                <p class="text-xs leading-5 text-[#8a9ab2]">
                    Explore profession-specific AYUSH career information.
                </p>

                <a href="#ayush-guides"
                   class="mt-2 inline-flex items-center gap-2 text-xs font-bold text-[#008F86] hover:text-[#34466F]">

                    Explore All Guides
                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>



{{-- SEARCH BAR --}}

<section class="relative z-10 mx-auto -mt-7 max-w-7xl px-8">

    <form action="{{ route('ayush') }}#ayush-guides"
          method="GET"
          class="grid grid-cols-1 gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-lg md:grid-cols-12">

        <div class="relative md:col-span-8">

            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search Ayurveda, BAMS, BHMS, Unani, Yoga..."
                class="w-full rounded-lg border border-gray-200 py-3 pl-11 pr-4 text-sm outline-none transition focus:border-[#00A69A] focus:ring-2 focus:ring-[#00A69A]/10"
            >

        </div>


        <div class="relative md:col-span-2">

            <select name="category"
                    class="w-full appearance-none rounded-lg border border-gray-200 bg-white px-3 py-3 text-sm text-gray-600 outline-none focus:border-[#00A69A]">

                <option value="">All Categories</option>

                @foreach($categories as $cat)

                    <option value="{{ $cat }}" @selected(request('category') == $cat)>
                        {{ $cat }}
                    </option>

                @endforeach

            </select>

        </div>


        <div class="md:col-span-2">

            <button type="submit"
                    class="w-full rounded-lg bg-[#008F86] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#34466F]">

                Search Guides

            </button>

        </div>

    </form>

</section>



{{-- GUIDE LISTING AND FILTERS --}}

<section id="ayush-guides" class="scroll-mt-24 bg-slate-50 py-10 md:py-14">

    <div class="mx-auto max-w-7xl px-8">


        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

            <div>

                <h2 class="text-xl font-extrabold text-[#253452]">
                    Explore AYUSH Career Guides
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    {{ $totalGuides }} guides found
                </p>

            </div>


            <a href="{{ route('ayush') }}#ayush-guides"
               class="text-xs font-semibold text-[#008F86] hover:text-[#34466F]">

                Reset All Filters

            </a>

        </div>



        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12">


            {{-- LEFT FILTER SIDEBAR --}}

            <aside class="h-fit rounded-xl border border-gray-200 bg-white p-5 shadow-sm lg:col-span-3">

                <div class="mb-5 flex items-center justify-between">

                    <h2 class="text-sm font-extrabold text-[#253452]">
                        Filter Guides
                    </h2>

                    <a href="{{ route('ayush') }}#ayush-guides"
                       class="text-xs font-semibold text-[#008F86]">
                        Reset
                    </a>

                </div>


                <form action="{{ route('ayush') }}#ayush-guides" method="GET">

                    <input type="hidden" name="search" value="{{ request('search') }}">


                    <div>

                        <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-[#34466F]">
                            AYUSH Category
                        </h3>

                        @foreach($categories as $cat)

                            <label class="mb-3 flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                <input
                                    type="radio"
                                    name="category"
                                    value="{{ $cat }}"
                                    @checked(request('category') == $cat)
                                    onchange="this.form.submit()"
                                    class="accent-[#008F86]"
                                >

                                {{ $cat }}

                            </label>

                        @endforeach


                        <label class="flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                            <input
                                type="radio"
                                name="category"
                                value=""
                                @checked(!request('category'))
                                onchange="this.form.submit()"
                                class="accent-[#008F86]"
                            >

                            All Categories

                        </label>

                    </div>

                </form>


                <div class="mt-6 border-t border-gray-100 pt-5">

                    <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-[#34466F]">
                        Popular Qualifications
                    </h3>

                    @foreach(['BAMS', 'BHMS', 'BUMS', 'BSMS', 'BNYS'] as $qualification)

                        <p class="mb-2 flex items-center gap-2 text-xs text-gray-600">

                            <i class="fa-solid fa-graduation-cap text-[#008F86]"></i>

                            {{ $qualification }}

                        </p>

                    @endforeach

                </div>

            </aside>



            {{-- RIGHT GUIDE CARDS --}}

            <div class="lg:col-span-9">


                @if($paginatedGuides->count() > 0)

                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">

                        @foreach($paginatedGuides as $guide)

                            <article class="group flex flex-col overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">

                                <div class="h-1.5 bg-gradient-to-r from-[#46577F] to-[#3DB49C]"></div>

                                <div class="flex flex-1 flex-col p-5">


                                    <div class="mb-4 flex items-center justify-between">

                                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#46577F] to-[#3DB49C] text-lg font-extrabold text-white">

                                            {{ $guide['initial'] }}

                                        </div>

                                        <span class="rounded-full bg-[#E8F5F1] px-3 py-1 text-xs font-bold text-[#008F86]">

                                            {{ $guide['category'] }}

                                        </span>

                                    </div>


                                    <h3 class="text-lg font-extrabold text-[#253452] transition group-hover:text-[#008F86]">

                                        {{ $guide['title'] }}

                                    </h3>


                                    <p class="mt-3 min-h-[84px] text-sm leading-7 text-gray-500">

                                        {{ $guide['short'] }}

                                    </p>


                                    <div class="mt-4 border-t border-gray-100 pt-4">

                                        <div class="flex items-center gap-2 text-xs text-gray-500">

                                            <i class="fa-solid fa-graduation-cap text-[#008F86]"></i>

                                            <span>{{ $guide['qualification'] }}</span>

                                        </div>


                                        <a href="{{ route('ayush.show', ['guide' => $guide['slug']]) }}"
                                           class="mt-5 flex items-center justify-between rounded-lg bg-[#F0F7F5] px-4 py-3 text-sm font-bold text-[#008F86] transition hover:bg-[#008F86] hover:text-white">

                                            Explore Guide

                                            <i class="fa-solid fa-arrow-right transition group-hover:translate-x-1"></i>

                                        </a>

                                    </div>

                                </div>

                            </article>

                        @endforeach

                    </div>


                    {{-- CAREERS-STYLE PAGINATION --}}

                    @if($totalPages > 1)

                        <div class="mt-10 flex flex-col items-center gap-5">

                            <div class="flex items-center justify-center gap-3">

                                {{-- PAGE NUMBERS --}}

                                @for($page = 1; $page <= $totalPages; $page++)

                                    <a
                                        href="{{ request()->fullUrlWithQuery(['page' => $page]) }}#ayush-guides"
                                        class="flex h-12 min-w-12 items-center justify-center rounded-xl border font-semibold transition
                                        {{ $currentPage == $page
                                            ? 'border-[#008F86] bg-[#008F86] text-white'
                                            : 'border-gray-200 bg-white text-[#34466F] hover:border-[#008F86] hover:text-[#008F86]' }}"
                                    >
                                        {{ $page }}
                                    </a>

                                @endfor


                                {{-- NEXT ARROW --}}

                                @if($currentPage < $totalPages)

                                    <a
                                        href="{{ request()->fullUrlWithQuery(['page' => $currentPage + 1]) }}#ayush-guides"
                                        class="flex h-12 min-w-12 items-center justify-center rounded-xl border border-gray-200 bg-white text-[#34466F] transition hover:border-[#008F86] hover:text-[#008F86]"
                                        aria-label="Next page"
                                    >

                                        <i class="fa-solid fa-chevron-right"></i>

                                    </a>

                                @endif

                            </div>


                            {{-- SHOWING COUNT --}}

                            <p class="text-sm text-gray-400">

                                Showing {{ $startGuide }} to {{ $endGuide }}
                                of {{ $totalGuides }} guides

                            </p>

                        </div>

                    @endif


                @else

                    {{-- NO RESULTS --}}

                    <div class="rounded-xl border border-gray-200 bg-white p-12 text-center">

                        <i class="fa-solid fa-magnifying-glass mb-4 text-4xl text-gray-300"></i>

                        <h3 class="text-xl font-bold text-[#34466F]">
                            No AYUSH Guides Found
                        </h3>

                        <p class="mt-2 text-sm text-gray-500">
                            Try another search term or category.
                        </p>

                        <a href="{{ route('ayush') }}#ayush-guides"
                           class="mt-5 inline-block rounded-lg bg-[#008F86] px-6 py-3 text-sm font-bold text-white">

                            View All Guides

                        </a>

                    </div>

                @endif


            </div>

        </div>

    </div>

</section>



{{-- BOTTOM INFORMATION SECTION --}}

<section class="bg-white py-14">

    <div class="mx-auto max-w-7xl px-8">

        <div class="mb-9 max-w-2xl">

            <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#008F86]">
                AYUSH CAREER RESOURCES
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#253452] md:text-3xl">
                Plan Your Future in AYUSH Healthcare
            </h2>

            <p class="mt-3 text-sm leading-7 text-gray-500">
                Understand your qualification, explore career paths and learn
                about professional requirements before choosing your next step.
            </p>

        </div>


        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

            @foreach([
                ['icon' => 'fa-graduation-cap', 'title' => 'Education & Qualifications', 'text' => 'Understand BAMS, BHMS, BUMS, BSMS and BNYS qualifications.'],
                ['icon' => 'fa-briefcase', 'title' => 'Career Opportunities', 'text' => 'Explore clinical, teaching, research and healthcare roles.'],
                ['icon' => 'fa-building-columns', 'title' => 'Government Jobs', 'text' => 'Understand recruitment notifications and eligibility criteria.'],
                ['icon' => 'fa-id-card', 'title' => 'Practitioner Registration', 'text' => 'Learn about professional registration and relevant authorities.']
            ] as $item)

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-[#E8F5F1]">

                        <i class="fa-solid {{ $item['icon'] }} text-xl text-[#008F86]"></i>

                    </div>

                    <h3 class="font-extrabold text-[#253452]">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        {{ $item['text'] }}
                    </p>

                </div>

            @endforeach

        </div>


        <div class="mt-8 rounded-xl border border-[#DCEAE6] bg-[#F0F7F5] p-5 md:p-6">

            <div class="flex items-start gap-3">

                <i class="fa-solid fa-circle-info mt-1 text-lg text-[#008F86]"></i>

                <div>

                    <h3 class="font-bold text-[#34466F]">
                        Important Information
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-gray-600">
                        Career opportunities, professional scope, registration and
                        recruitment eligibility may vary by state and authority.
                        Always verify current information through official government
                        notifications, recognised universities and applicable councils.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endif

@endsection