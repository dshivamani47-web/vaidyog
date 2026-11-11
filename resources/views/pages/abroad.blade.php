
@extends('layouts.app')

@section('title', 'Abroad Healthcare Careers | Vaidyog')

@section('description', 'Explore international nursing and doctor career opportunities, licensing requirements and overseas healthcare career guides.')

@section('content')

@php

$careers = [

    [
        'slug' => 'nursing-jobs-germany',
        'country' => 'GERMANY',
        'code' => 'DE',
        'category' => 'Nursing',
        'title' => 'Nursing Jobs in Germany for Indian Nurses',
        'subtitle' => 'Build Your Nursing Career in Germany',
        'description' => 'Explore nursing career opportunities in Germany and understand German language requirements, qualification recognition, eligibility and professional registration.',
        'keyword' => 'Nursing jobs in Germany for Indian nurses',
        'icon' => 'fa-hospital',
        'color' => 'from-cyan-600 to-teal-500',
        'highlights' => [
            'German language requirements',
            'Nursing qualification recognition',
            'Professional registration',
            'International recruitment'
        ],
        'requirements' => [
            'Recognised nursing qualification',
            'Valid professional nursing registration',
            'German language proficiency as required',
            'Educational and identity documents',
            'Relevant experience where applicable'
        ],
        'topics' => [
            ['title' => 'Nursing Opportunities in Germany', 'text' => 'Explore nursing roles across hospitals, healthcare institutions, elderly care facilities and specialist medical centres.'],
            ['title' => 'German Language Requirements', 'text' => 'Understand German language proficiency requirements for patient communication and professional nursing practice.'],
            ['title' => 'Qualification Recognition', 'text' => 'Learn how Indian nursing qualifications are assessed and what recognition or adaptation requirements may apply.'],
            ['title' => 'Eligibility and Documents', 'text' => 'Prepare nursing certificates, registration evidence, experience documents and applicable language certificates.'],
            ['title' => 'How to Apply', 'text' => 'Research healthcare employers, review vacancies, prepare your CV and follow the relevant recruitment process.']
        ],
        'steps' => [
            'Check your nursing qualification and registration.',
            'Research German language requirements.',
            'Understand the qualification recognition process.',
            'Prepare your educational and professional documents.',
            'Find suitable vacancies and apply to employers.'
        ]
    ],

    [
        'slug' => 'nurse-jobs-uk-nmc',
        'country' => 'UNITED KINGDOM',
        'code' => 'UK',
        'category' => 'Nursing',
        'title' => 'UK Nursing Jobs for Indian Nurses',
        'subtitle' => 'Explore Nursing Opportunities in the UK',
        'description' => 'Discover UK nursing career opportunities and learn about NMC registration, English language requirements, CBT, OSCE and the application process.',
        'keyword' => 'UK nursing jobs for Indian nurses',
        'icon' => 'fa-user-nurse',
        'color' => 'from-indigo-600 to-blue-500',
        'highlights' => [
            'NMC registration pathway',
            'English language requirements',
            'CBT examination',
            'OSCE examination'
        ],
        'requirements' => [
            'Recognised nursing qualification',
            'Professional registration evidence',
            'English language evidence',
            'CBT and OSCE where applicable',
            'Identity and employment documents'
        ],
        'topics' => [
            ['title' => 'Nursing Opportunities in the UK', 'text' => 'Explore potential nursing roles in NHS organisations, private hospitals and other healthcare institutions.'],
            ['title' => 'NMC Registration', 'text' => 'Understand the Nursing and Midwifery Council registration pathway for internationally educated nurses.'],
            ['title' => 'CBT and OSCE Examinations', 'text' => 'Learn about the Computer Based Test and Objective Structured Clinical Examination.'],
            ['title' => 'English Language Requirements', 'text' => 'Understand the English language evidence accepted by the NMC and check current requirements.'],
            ['title' => 'How to Apply', 'text' => 'Prepare your CV, review employer vacancies and follow the recruitment and registration process.']
        ],
        'steps' => [
            'Review NMC requirements for internationally educated nurses.',
            'Check your nursing qualification and eligibility.',
            'Prepare the required English language evidence.',
            'Understand applicable CBT and OSCE requirements.',
            'Complete the registration process and explore vacancies.'
        ]
    ],

    [
        'slug' => 'gulf-nursing-jobs',
        'country' => 'GULF COUNTRIES',
        'code' => 'GCC',
        'category' => 'Nursing',
        'title' => 'Nursing Jobs in Gulf for Indian Nurses',
        'subtitle' => 'Explore Nursing Careers Across the Gulf',
        'description' => 'Explore nursing career opportunities across Gulf countries and understand DHA, DOH, MOH licensing pathways and professional requirements.',
        'keyword' => 'Nursing jobs in Gulf',
        'icon' => 'fa-globe',
        'color' => 'from-emerald-600 to-teal-500',
        'highlights' => [
            'UAE nursing licensing',
            'DHA and DOH pathways',
            'MOH requirements',
            'Prometric where applicable'
        ],
        'requirements' => [
            'Recognised nursing qualification',
            'Valid nursing registration',
            'Experience as required by the regulator',
            'Licensing assessment where applicable',
            'Professional and identity documents'
        ],
        'topics' => [
            ['title' => 'Nursing Opportunities in Gulf Countries', 'text' => 'Explore nursing opportunities in the UAE, Saudi Arabia, Qatar, Oman, Bahrain and other Gulf destinations.'],
            ['title' => 'DHA Nursing Licence', 'text' => 'Understand the Dubai Health Authority licensing pathway and applicable professional requirements.'],
            ['title' => 'DOH and MOH Licensing', 'text' => 'Learn about licensing authorities and professional requirements for your selected healthcare destination.'],
            ['title' => 'Prometric Examination', 'text' => 'Understand examination requirements where applicable. Requirements depend on the country and professional category.'],
            ['title' => 'Documents and Applications', 'text' => 'Review qualifications, professional registration and experience documents required by regulators and employers.']
        ],
        'steps' => [
            'Choose your preferred Gulf country.',
            'Identify the applicable nursing licensing authority.',
            'Review qualification and experience requirements.',
            'Prepare required documents and examinations.',
            'Apply to suitable healthcare employers.'
        ]
    ],

    [
        'slug' => 'doctor-jobs-uk-plab',
        'country' => 'UNITED KINGDOM',
        'code' => 'UK',
        'category' => 'Doctors',
        'title' => 'PLAB Exam Guide for Indian Doctors',
        'subtitle' => 'Plan Your Medical Career in the UK',
        'description' => 'Explore the UK medical career pathway for Indian doctors. Understand PLAB examinations, GMC registration, eligibility and employment opportunities.',
        'keyword' => 'PLAB exam guide',
        'icon' => 'fa-user-doctor',
        'color' => 'from-violet-600 to-indigo-500',
        'highlights' => [
            'PLAB examination pathway',
            'GMC registration',
            'English language evidence',
            'Medical career opportunities'
        ],
        'requirements' => [
            'Recognised primary medical qualification',
            'English language evidence',
            'Relevant internship and experience evidence where required',
            'PLAB or another applicable GMC pathway',
            'GMC registration requirements'
        ],
        'topics' => [
            ['title' => 'Doctor Career Opportunities in the UK', 'text' => 'Explore medical career pathways, healthcare employers and opportunities for eligible international doctors.'],
            ['title' => 'What is the PLAB Exam?', 'text' => 'Understand the Professional and Linguistic Assessments Board examination and its role in the applicable GMC registration pathway.'],
            ['title' => 'PLAB 1 and PLAB 2', 'text' => 'Learn about the two parts of the PLAB examination, their formats and preparation considerations.'],
            ['title' => 'GMC Registration', 'text' => 'Understand the General Medical Council registration process, eligibility and documentation requirements.'],
            ['title' => 'How to Apply', 'text' => 'Explore vacancies, check registration requirements and prepare your professional CV.']
        ],
        'steps' => [
            'Review the GMC registration requirements.',
            'Check your medical qualification and eligibility.',
            'Understand English language requirements.',
            'Prepare for the applicable PLAB assessments.',
            'Complete the relevant registration and explore vacancies.'
        ]
    ],

    [
        'slug' => 'doctor-jobs-gulf',
        'country' => 'DUBAI AND GULF',
        'code' => 'UAE',
        'category' => 'Doctors',
        'title' => 'Doctor Jobs in Dubai for Indian Doctors',
        'subtitle' => 'Discover Medical Careers in the Gulf',
        'description' => 'Explore doctor career opportunities in Dubai and other Gulf destinations. Learn about DHA licensing, professional eligibility, experience and job applications.',
        'keyword' => 'Doctor jobs in Dubai for Indian doctors',
        'icon' => 'fa-stethoscope',
        'color' => 'from-orange-500 to-amber-500',
        'highlights' => [
            'DHA licensing pathway',
            'Medical qualification assessment',
            'Professional experience',
            'Gulf healthcare opportunities'
        ],
        'requirements' => [
            'Recognised medical qualification',
            'Valid professional registration',
            'Relevant clinical experience',
            'Licensing assessment where applicable',
            'Identity and professional documents'
        ],
        'topics' => [
            ['title' => 'Doctor Jobs in Dubai', 'text' => 'Explore potential medical employment opportunities in hospitals, clinics and specialist healthcare institutions.'],
            ['title' => 'DHA Licence for Doctors', 'text' => 'Understand the Dubai Health Authority professional licensing pathway and applicable requirements.'],
            ['title' => 'Other Gulf Medical Licensing Authorities', 'text' => 'Explore relevant professional licensing authorities for other Gulf destinations.'],
            ['title' => 'Experience and Qualification Requirements', 'text' => 'Review your medical qualification, speciality, registration and experience against regulator requirements.'],
            ['title' => 'How to Apply', 'text' => 'Prepare your medical CV, professional documents and licensing evidence before applying for suitable vacancies.']
        ],
        'steps' => [
            'Choose your preferred Gulf destination.',
            'Identify the applicable medical licensing authority.',
            'Review qualification and experience requirements.',
            'Prepare your professional documents.',
            'Apply for relevant doctor vacancies.'
        ]
    ]

];

$careerSlug = $careerSlug ?? null;

$selectedCareer = $careerSlug
    ? collect($careers)->firstWhere('slug', $careerSlug)
    : null;

abort_if($careerSlug && !$selectedCareer, 404);

$relatedCareers = $selectedCareer
    ? collect($careers)->where('slug', '!=', $selectedCareer['slug'])->values()
    : collect();

@endphp


@if($selectedCareer)

{{-- =====================================================
    INNER PAGE BANNER
===================================================== --}}

<section class="relative flex min-h-[190px] items-center justify-center overflow-hidden bg-gradient-to-r from-[#405D82] via-[#328B91] to-[#29B59F] px-5 py-10 md:min-h-[235px]">

    <div class="pointer-events-none absolute -left-20 -top-24 h-64 w-64 rounded-full bg-white/10"></div>

    <div class="pointer-events-none absolute -right-20 -top-20 h-64 w-64 rounded-full bg-white/10"></div>

    <div class="relative mx-auto max-w-4xl text-center">

        <p class="text-[10px] font-extrabold uppercase tracking-[0.22em] text-white/80 sm:text-xs">
            VAIDYOG CAREER OPPORTUNITIES
        </p>

        <h1 class="mt-3 text-2xl font-extrabold leading-tight text-white sm:text-3xl md:text-[38px]">
            {{ $selectedCareer['title'] }}
        </h1>

        <p class="mt-3 text-xs font-medium text-white/90 sm:text-sm md:text-base">
            {{ $selectedCareer['subtitle'] }}
        </p>

    </div>

</section>


{{-- BREADCRUMB --}}

<div class="border-b border-gray-100 bg-white">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center gap-2 px-5 py-3 text-[11px] text-gray-500 md:px-8">

        <a href="{{ url('/') }}" class="hover:text-[#138F91]">Home</a>

        <i class="fa-solid fa-chevron-right text-[8px]"></i>

        <a href="{{ route('abroad') }}" class="hover:text-[#138F91]">Abroad Careers</a>

        <i class="fa-solid fa-chevron-right text-[8px]"></i>

        <span class="font-semibold text-[#138F91]">{{ $selectedCareer['country'] }}</span>

    </div>
</div>


{{-- CONTENT --}}

<section class="bg-[#F4F7FA] py-8 md:py-10">

    <div class="mx-auto max-w-6xl px-5 md:px-8">

        <a href="{{ route('abroad') }}"
           class="mb-5 inline-flex items-center gap-2 text-xs font-semibold text-[#138F91] hover:text-[#243B63]">

            <i class="fa-solid fa-arrow-left"></i>
            All Abroad Careers

        </a>


        {{-- JOB INFORMATION HEADER --}}

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

            <div class="flex flex-wrap items-start justify-between gap-4">

                <div class="flex items-center gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br {{ $selectedCareer['color'] }} text-lg text-white">
                        <i class="fa-solid {{ $selectedCareer['icon'] }}"></i>
                    </div>

                    <div>
                        <h2 class="text-base font-extrabold text-[#243B63] md:text-lg">
                            {{ $selectedCareer['title'] }}
                        </h2>

                        <p class="mt-1 text-xs text-gray-500">
                            Vaidyog International Career Guide
                        </p>

                        <div class="mt-2 flex flex-wrap gap-2">

                            <span class="rounded-full bg-[#E6F4F2] px-3 py-1 text-[10px] font-semibold text-[#138F91]">
                                {{ $selectedCareer['category'] }}
                            </span>

                            <span class="rounded-full bg-gray-100 px-3 py-1 text-[10px] font-semibold text-gray-600">
                                {{ $selectedCareer['country'] }}
                            </span>

                        </div>
                    </div>

                </div>

                <span class="rounded-full bg-[#FFF5DF] px-3 py-1.5 text-[10px] font-bold text-[#B27A18]">
                    Career Guide
                </span>

            </div>

            <div class="mt-6 grid grid-cols-2 gap-5 border-t border-gray-100 pt-5 md:grid-cols-4">

                <div>
                    <p class="text-[10px] text-gray-400">Destination</p>
                    <p class="mt-1 text-xs font-bold text-[#243B63]">{{ $selectedCareer['country'] }}</p>
                </div>

                <div>
                    <p class="text-[10px] text-gray-400">Profession</p>
                    <p class="mt-1 text-xs font-bold text-[#243B63]">{{ $selectedCareer['category'] }}</p>
                </div>

                <div>
                    <p class="text-[10px] text-gray-400">Career Type</p>
                    <p class="mt-1 text-xs font-bold text-[#243B63]">International</p>
                </div>

                <div>
                    <p class="text-[10px] text-gray-400">Guide</p>
                    <p class="mt-1 text-xs font-bold text-[#243B63]">Professional Guide</p>
                </div>

            </div>

        </div>


        {{-- MAIN TWO COLUMN LAYOUT --}}

        <div class="mt-5 grid grid-cols-1 items-start gap-5 lg:grid-cols-12">

            {{-- LEFT CONTENT --}}

            <div class="space-y-5 lg:col-span-8">

                {{-- OVERVIEW --}}

                <div id="overview" class="scroll-mt-20 rounded-xl border border-gray-200 bg-white p-5 md:p-6">

                    <p class="text-[10px] font-bold uppercase tracking-widest text-[#138F91]">
                        CAREER OVERVIEW
                    </p>

                    <h2 class="mt-2 text-lg font-extrabold text-[#243B63]">
                        {{ $selectedCareer['subtitle'] }}
                    </h2>

                    <p class="mt-3 text-xs leading-7 text-gray-600">
                        {{ $selectedCareer['description'] }}
                    </p>

                    <p class="mt-3 text-xs leading-7 text-gray-600">
                        Explore professional requirements, qualification recognition,
                        registration processes and employment opportunities related
                        to this international career pathway.
                    </p>

                </div>


                {{-- HIGHLIGHTS --}}

                <div id="highlights" class="scroll-mt-20 rounded-xl border border-gray-200 bg-white p-5 md:p-6">

                    <p class="text-[10px] font-bold uppercase tracking-widest text-[#138F91]">
                        KEY CAREER INFORMATION
                    </p>

                    <h2 class="mt-2 text-lg font-extrabold text-[#243B63]">
                        Important Things to Explore
                    </h2>

                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-2">

                        @foreach($selectedCareer['highlights'] as $highlight)

                            <div class="flex items-center gap-3 rounded-lg bg-[#F3F7FA] p-3">

                                <i class="fa-solid fa-circle-check text-sm text-[#13A89E]"></i>

                                <span class="text-xs font-medium text-gray-600">
                                    {{ $highlight }}
                                </span>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- REQUIREMENTS --}}

                <div id="requirements" class="scroll-mt-20 rounded-xl border border-gray-200 bg-white p-5 md:p-6">

                    <p class="text-[10px] font-bold uppercase tracking-widest text-[#138F91]">
                        ELIGIBILITY AND PREPARATION
                    </p>

                    <h2 class="mt-2 text-lg font-extrabold text-[#243B63]">
                        Career Requirements
                    </h2>

                    <div class="mt-4 divide-y divide-gray-100">

                        @foreach($selectedCareer['requirements'] as $index => $requirement)

                            <div class="flex items-center gap-3 py-3">

                                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#E3F3F2] text-[10px] font-bold text-[#138F91]">
                                    {{ sprintf('%02d', $index + 1) }}
                                </span>

                                <p class="text-xs leading-6 text-gray-600">
                                    {{ $requirement }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                    <div class="mt-4 rounded-lg bg-[#F0F7F6] p-4">

                        <p class="text-xs font-bold text-[#243B63]">
                            <i class="fa-solid fa-circle-info mr-2 text-[#138F91]"></i>
                            Important Information
                        </p>

                        <p class="mt-2 text-xs leading-6 text-gray-500">
                            Verify the exact eligibility criteria with the relevant professional regulator and employer.
                        </p>

                    </div>

                </div>


                {{-- CAREER GUIDE TOPICS --}}

                <div id="topics" class="scroll-mt-20 rounded-xl border border-gray-200 bg-white p-5 md:p-6">

                    <p class="text-[10px] font-bold uppercase tracking-widest text-[#138F91]">
                        COMPLETE CAREER GUIDE
                    </p>

                    <h2 class="mt-2 text-lg font-extrabold text-[#243B63]">
                        Everything You Need to Know
                    </h2>

                    <div class="mt-5 space-y-4">

                        @foreach($selectedCareer['topics'] as $index => $topic)

                            <div class="border-b border-gray-100 pb-4 last:border-0 last:pb-0">

                                <div class="flex items-start gap-3">

                                    <span class="text-xs font-extrabold text-[#13A89E]">
                                        0{{ $index + 1 }}
                                    </span>

                                    <div>
                                        <h3 class="text-sm font-bold text-[#243B63]">
                                            {{ $topic['title'] }}
                                        </h3>

                                        <p class="mt-2 text-xs leading-7 text-gray-500">
                                            {{ $topic['text'] }}
                                        </p>
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- APPLICATION PROCESS --}}

                <div id="application" class="scroll-mt-20 rounded-xl border border-gray-200 bg-white p-5 md:p-6">

                    <p class="text-[10px] font-bold uppercase tracking-widest text-[#138F91]">
                        APPLICATION PROCESS
                    </p>

                    <h2 class="mt-2 text-lg font-extrabold text-[#243B63]">
                        How to Start Your Career Journey
                    </h2>

                    <div class="mt-5 space-y-3">

                        @foreach($selectedCareer['steps'] as $index => $step)

                            <div class="flex items-center gap-3 rounded-lg bg-[#F5F8FA] p-3">

                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-[#243B63] text-[10px] font-bold text-white">
                                    {{ sprintf('%02d', $index + 1) }}
                                </span>

                                <p class="text-xs leading-6 text-gray-600">
                                    {{ $step }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>


            {{-- RIGHT SIDEBAR --}}

            <aside class="space-y-4 lg:col-span-4">

                {{-- APPLY NOW CARD --}}

                <div class="sticky top-16 rounded-xl border border-gray-200 bg-white p-5 shadow-sm">

                    <div class="rounded-lg bg-gradient-to-br from-[#243B63] to-[#138F91] p-5 text-center">

                        <div class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-white/15 text-white">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>

                        <h3 class="mt-3 text-sm font-extrabold text-white">
                            Interested in This Opportunity?
                        </h3>

                        <p class="mt-2 text-[11px] leading-5 text-white/80">
                            Find relevant healthcare vacancies and take the next step in your career.
                        </p>

                        <a href="{{ url('/careers') }}"
                           class="mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-white px-4 py-3 text-xs font-extrabold text-[#243B63] transition hover:bg-[#E6F4F2]">

                            Apply Now

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                        <p class="mt-3 text-[10px] text-white/70">
                            Explore available job opportunities
                        </p>

                    </div>

                </div>


                {{-- CAREER INFORMATION --}}

                <div class="rounded-xl border border-gray-200 bg-white p-5">

                    <h3 class="text-xs font-extrabold text-[#243B63]">
                        CAREER INFORMATION
                    </h3>

                    <div class="mt-4 space-y-4">

                        <div>
                            <p class="text-[10px] text-gray-400">Country</p>
                            <p class="mt-1 text-xs font-semibold text-[#243B63]">
                                {{ $selectedCareer['country'] }}
                            </p>
                        </div>

                        <div>
                            <p class="text-[10px] text-gray-400">Profession</p>
                            <p class="mt-1 text-xs font-semibold text-[#243B63]">
                                {{ $selectedCareer['category'] }}
                            </p>
                        </div>

                        <div>
                            <p class="text-[10px] text-gray-400">Primary Keyword</p>
                            <p class="mt-1 text-xs leading-5 font-semibold text-[#243B63]">
                                {{ $selectedCareer['keyword'] }}
                            </p>
                        </div>

                    </div>

                </div>


                {{-- RELATED GUIDES --}}

                <div class="rounded-xl border border-gray-200 bg-white p-5">

                    <h3 class="text-xs font-extrabold text-[#243B63]">
                        RELATED CAREER GUIDES
                    </h3>

                    <div class="mt-4 space-y-3">

                        @foreach($relatedCareers->take(3) as $related)

                            <a href="{{ route('abroad.show', ['career' => $related['slug']]) }}"
                               class="group flex items-center justify-between gap-3 border-b border-gray-100 pb-3 last:border-0 last:pb-0">

                                <div>
                                    <p class="text-[10px] font-bold text-[#138F91]">
                                        {{ $related['country'] }}
                                    </p>

                                    <h4 class="mt-1 text-xs font-semibold leading-5 text-[#243B63] group-hover:text-[#138F91]">
                                        {{ $related['title'] }}
                                    </h4>
                                </div>

                                <i class="fa-solid fa-arrow-right text-xs text-[#138F91]"></i>

                            </a>

                        @endforeach

                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>


@else

{{-- =====================================================
    MAIN ABROAD LISTING PAGE
===================================================== --}}

{{-- HERO --}}

<section class="relative isolate overflow-hidden bg-[#172B49]">

    <div class="absolute inset-0 -z-10">

        <img src="{{ asset('images/abroad-banners.webp') }}"
             alt="International healthcare careers"
             class="h-full w-full object-cover">

<div class="absolute inset-0 bg-gradient-to-r from-[#172B49]/80 via-[#243B63]/50 to-[#137E85]/50"></div>
    </div>

    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-8 py-12 md:px-8 md:py-16 lg:grid-cols-12">

        <div class="lg:col-span-7">

            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-[10px] font-bold tracking-widest text-[#65DED0]">
                <span class="h-2 w-2 rounded-full bg-[#65DED0]"></span>
                INTERNATIONAL HEALTHCARE CAREERS
            </span>

            <h1 class="mt-6 text-[43px] font-extrabold leading-tight text-white sm:text-4xl md:text-5xl">
                Take Your Healthcare Career
                <span class="text-[#65DED0]">Beyond Borders</span>
            </h1>

            <p class="mt-5 max-w-xl text-[16px] leading-7 text-white/80">
                Discover international career pathways for Indian nurses
                and doctors. Explore destination guides, professional
                licensing, examinations and overseas healthcare opportunities.
            </p>

            <div class="mt-7 flex flex-wrap gap-3">

                <a href="#career-guides"
                   class="rounded-lg bg-[#13A89E] px-6 py-3 text-[14px] font-bold text-white transition hover:bg-[#0D8982]">
                    Explore Career Guides
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>

                <a href="{{ url('/careers') }}"
                   class="rounded-lg border border-white/50 px-6 py-3 text-[14px] font-bold text-white transition hover:bg-white hover:text-[#243B63]">
                    View All Jobs
                </a>

            </div>

            <div class="mt-9 flex gap-9 border-t border-white/20 pt-5">

                <div>
<p class="text-center text-3xl font-extrabold text-[#65DED0]">05</p>                    
<p class="mt-1 text-[12px] text-white/70">Career Guides</p>
                </div>

                <div>
                    <p class=" text-center text-3xl font-extrabold text-[#65DED0]">02</p>
                    <p class="mt-1 text-[12px] text-white/70">Professions</p>
                </div>

                <div>
                    <p class=" text-center text-3xl font-extrabold text-[#65DED0]">03+</p>
                    <p class="mt-1 text-[12px] text-white/70">Destinations</p>
                </div>

            </div>

        </div>


        {{-- HERO RIGHT CARD --}}

        <div class="lg:col-span-5">

            <div class="ml-auto w-full max-w-[420px] rounded-xl border border-white/30 bg-white p-5 shadow-xl md:p-6">

                <p class="text-[10px] font-bold uppercase tracking-widest text-[#138F91]">
                    EXPLORE YOUR DESTINATION
                </p>

                <h2 class="mt-2 text-xl font-extrabold text-[#243B63]">
                    Find Your Global Career Path
                </h2>

                <p class="mt-2 text-xs leading-6 text-gray-500">
                    Choose your profession and explore international career guides.
                </p>

                <div class="mt-5 space-y-2">

                    @foreach(collect($careers)->take(4) as $item)

                        <a href="{{ route('abroad.show', ['career' => $item['slug']]) }}"
                           class="group flex items-center gap-3 rounded-lg border border-gray-100 p-3 transition hover:border-[#13A89E] hover:bg-[#F3F7FA]">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br {{ $item['color'] }} text-sm text-white">
                                <i class="fa-solid {{ $item['icon'] }}"></i>
                            </div>

                            <div class="min-w-0 flex-1">

                                <h3 class="text-xs font-bold text-[#243B63] group-hover:text-[#138F91]">
                                    {{ $item['country'] }}
                                </h3>

                                <p class="mt-1 text-[12px] text-gray-500">
                                    {{ $item['category'] }}
                                </p>

                            </div>

                            <i class="fa-solid fa-arrow-right text-xs text-[#138F91]"></i>

                        </a>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>


{{-- INTRODUCTION --}}

<section class="bg-white py-10 md:py-14">

    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-8 px-8 md:px-8 lg:grid-cols-2">

        <div>

            <p class="text-[12px] font-bold uppercase tracking-widest text-[#138F91]">
                YOUR INTERNATIONAL CAREER JOURNEY
            </p>

            <h2 class="mt-3 text-[30px] font-extrabold leading-snug text-[#243B63] md:text-3xl">
                Discover Where Your Healthcare Career Can Take You
            </h2>

            <p class="mt-4 text-[14px] leading-7 text-gray-500">
                Planning an overseas healthcare career involves more than
                finding a vacancy. Understand professional registration,
                licensing requirements, examinations and qualifications
                for your preferred destination.
            </p>

            <p class="mt-3 text-[14px] leading-7 text-gray-500">
                Explore country-specific guides for nursing and medical
                professionals and prepare for your next career opportunity.
            </p>

        </div>

        <div class="grid grid-cols-2 gap-3">

            @foreach([
                ['icon' => 'fa-user-nurse', 'title' => 'Nursing Careers', 'text' => 'International nursing pathways'],
                ['icon' => 'fa-user-doctor', 'title' => 'Doctor Careers', 'text' => 'Medical career pathways'],
                ['icon' => 'fa-file-circle-check', 'title' => 'Licensing Guides', 'text' => 'Professional requirements'],
                ['icon' => 'fa-earth-americas', 'title' => 'Global Careers', 'text' => 'Explore destinations']
            ] as $item)

                <div class="rounded-xl bg-[#F3F7FA] p-5">

                    <i class="fa-solid {{ $item['icon'] }} text-2xl text-[#138F91]"></i>

                    <h3 class="mt-3 text-[16px] font-extrabold text-[#243B63]">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-2 text-[14px] leading-5 text-gray-500">
                        {{ $item['text'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- CAREER LISTING --}}

<section id="career-guides" class="scroll-mt-16 bg-[#F1F5F9] py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-8 md:px-8">

        <div class="mb-9">

            <p class="text-[12px] font-bold uppercase tracking-widest text-[#138F91]">
                EXPLORE INTERNATIONAL OPPORTUNITIES
            </p>

            <h2 class="mt-2 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Overseas Healthcare Career Guides
            </h2>

            <p class="mt-3 text-[14px] leading-7 text-gray-500">
                Find country-specific career information, licensing requirements and application guidance.
            </p>

        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">

            @foreach($careers as $index => $item)

                <a href="{{ route('abroad.show', ['career' => $item['slug']]) }}"
                   aria-label="Explore {{ $item['title'] }}"
                   class="group block rounded-xl focus:outline-none focus:ring-2 focus:ring-[#13A89E]">

                    <article class="flex h-full min-h-[315px] flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition duration-300 group-hover:-translate-y-1 group-hover:border-[#13A89E] group-hover:shadow-lg">

                        <div class="h-1 bg-gradient-to-r {{ $item['color'] }}"></div>

                        <div class="flex flex-1 flex-col p-5 md:p-6">

                            <div class="flex items-center justify-between gap-3">

                                <div class="flex items-center gap-3">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br {{ $item['color'] }} text-base text-white">
                                        <i class="fa-solid {{ $item['icon'] }}"></i>
                                    </div>

                                    <div>
                                        <p class="text-[12px] font-bold uppercase tracking-widest text-[#138F91]">
                                            DESTINATION 0{{ $index + 1 }}
                                        </p>

                                        <h3 class="mt-1 text-xs font-extrabold text-[#243B63]">
                                            {{ $item['country'] }}
                                        </h3>
                                    </div>

                                </div>

                                <span class="rounded-full bg-[#E5F4F2] px-3 py-1.5 text-[11px] font-bold text-[#138F91]">
                                    {{ $item['category'] }}
                                </span>

                            </div>

                            <h2 class="mt-6 text-lg font-extrabold leading-snug text-[#243B63] transition group-hover:text-[#138F91]">
                                {{ $item['title'] }}
                            </h2>

                            <p class="mt-3 text-[14px] leading-6 text-gray-500">
                                {{ $item['description'] }}
                            </p>

                            <div class="mt-5">

                                <p class="mb-3 text-[10px] font-extrabold uppercase tracking-widest text-gray-400">
                                    CAREER HIGHLIGHTS
                                </p>

                                <div class="grid grid-cols-1 gap-2 sm:grid-cols-2">

                                    @foreach($item['highlights'] as $highlight)

                                        <div class="flex items-start gap-2 text-[12px] leading-5 text-gray-600">

                                            <i class="fa-solid fa-circle-check mt-1 shrink-0 text-[#13A89E]"></i>

                                            <span>{{ $highlight }}</span>

                                        </div>

                                    @endforeach

                                </div>

                            </div>

                            <div class="mt-auto flex items-center justify-between gap-2 border-t border-gray-100 pt-4 mt-6">

                                <span class="text-[12px] font-medium text-gray-400">
                                    INTERNATIONAL CAREER GUIDE
                                </span>

                                <span class="inline-flex items-center gap-2 rounded-md bg-[#243B63] px-4 py-2.5 text-[12px] font-bold text-white transition group-hover:bg-[#138F91]">

                                    Explore Guide

                                    <i class="fa-solid fa-arrow-right"></i>

                                </span>

                            </div>

                        </div>

                    </article>

                </a>

            @endforeach

        </div>

    </div>

</section>


{{-- CAREER JOURNEY --}}

<section class="bg-white py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-8 md:px-8">

        <div class="mx-auto mb-9 max-w-xl text-center">

            <p class="text-[12px] font-bold uppercase tracking-widest text-[#138F91]">
                PLAN YOUR NEXT MOVE
            </p>

            <h2 class="mt-2 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Your International Career Journey
            </h2>

        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">

            @foreach([
                ['icon' => 'fa-globe', 'title' => 'Choose Destination', 'text' => 'Explore countries and understand their healthcare career pathways.'],
                ['icon' => 'fa-graduation-cap', 'title' => 'Check Qualifications', 'text' => 'Review your qualifications, experience and eligibility.'],
                ['icon' => 'fa-file-circle-check', 'title' => 'Understand Licensing', 'text' => 'Research registration, examinations and language requirements.'],
                ['icon' => 'fa-briefcase', 'title' => 'Explore Opportunities', 'text' => 'Prepare your CV and apply for suitable healthcare vacancies.']
            ] as $index => $step)

                <div class="rounded-xl border border-gray-200 p-5 transition hover:border-[#13A89E] hover:shadow-md">

                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#E3F3F2] text-base text-[#138F91]">
                        <i class="fa-solid {{ $step['icon'] }}"></i>
                    </div>

                    <p class="mt-4 text-[12px] font-extrabold text-[#13A89E]">
                        STEP 0{{ $index + 1 }}
                    </p>

                    <h3 class="mt-2 text-2xs font-extrabold text-[#243B63]">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-2 text-[14px] leading-6 text-gray-500">
                        {{ $step['text'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- FINAL CTA --}}

<section class="bg-[#F1F5F9] px-5 py-12">

    <div class="mx-auto max-w-7xl rounded-xl bg-gradient-to-r from-[#243B63] to-[#138F91] px-8 py-12 text-center md:px-10">

        <p class="text-[12px] font-bold uppercase tracking-widest text-[#A9F0E6]">
            YOUR GLOBAL CAREER STARTS HERE
        </p>

        <h2 class="mt-3 text-2xl font-extrabold text-white md:text-3xl">
            Ready to Explore International Healthcare Jobs?
        </h2>

        <p class="mx-auto mt-3 max-w-xl text-[14px] leading-7 text-white/80">
            Discover healthcare vacancies and explore opportunities that match your professional qualifications and career goals.
        </p>

        <a href="{{ url('/careers') }}"
           class="mt-6 inline-flex items-center gap-2 rounded-lg bg-white px-7 py-3.5 text-xs font-extrabold text-[#243B63] transition hover:bg-gray-100">

            View All Jobs

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </div>

</section>

@endif

@endsection
