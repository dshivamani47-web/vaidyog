@extends('layouts.app')

@section('title', 'Healthcare Careers | Vaidyog')
@section('description', 'Explore healthcare career opportunities across India. Find doctor, nursing, pharmacy and allied healthcare jobs.')

@section('content')

@php

    /*
    |--------------------------------------------------------------------------
    | SAMPLE JOB DATA
    |--------------------------------------------------------------------------
    */

    $jobs = [
        [
            'slug' => 'front-office-administrator',
            'title' => 'Front Office Administrator',
            'company' => 'BM Rehab',
            'initial' => 'BM',
            'location' => 'Hyderabad, Telangana',
            'city' => 'Hyderabad',
            'type' => 'Full-time',
            'experience' => '0.0 – 5.0 yrs',
            'salary' => 'As per industry norms',
            'vacancies' => '2',
            'posted' => '22 hours ago',
            'category' => 'Healthcare Administration',
            'skills' => ['Patient Care', 'Health Education', 'Patient Counselling', 'Team Leadership', 'Communication Skills', 'Time Management'],
            'education' => ['MBA (Hospital Administration)', 'MHA (Master of Hospital Administration)', 'MPH (Master of Public Health)', '10+2 (Science)'],
            'contact' => 'Dharma Reddy',
            'phone' => '85330 63006',
            'description' => 'We are looking for a Front Office Administrator to join our healthcare organization in Hyderabad. The candidate will be responsible for managing front desk operations, welcoming and assisting patients and visitors, handling calls and appointments, maintaining records, and coordinating with different departments to ensure smooth day-to-day operations.',
            'extra' => 'The ideal candidate should have good communication skills, a professional attitude, and the ability to interact effectively with patients, attendants, and hospital staff.',
            'featured' => true,
        ],
        [
            'slug' => 'pharmacist',
            'title' => 'Pharmacist',
            'company' => 'BM Rehab',
            'initial' => 'BM',
            'location' => 'Hyderabad, Telangana',
            'city' => 'Hyderabad',
            'type' => 'Full-time',
            'experience' => '0.0 – 4.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '3',
            'posted' => '22 hours ago',
            'category' => 'Pharmacy',
            'skills' => ['Pharmacy', 'Patient Care', 'Clinical Assessment', 'Medication Management'],
            'education' => ['B.Pharm', 'D.Pharm', 'M.Pharm'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for a qualified Pharmacist to support our healthcare team. Responsibilities include dispensing medicines, checking prescriptions, maintaining medicine inventory, and providing medication guidance to patients.',
            'extra' => 'Candidates should have good pharmaceutical knowledge, attention to detail, and strong patient communication skills.',
            'featured' => true,
        ],
        [
            'slug' => 'laboratory-technician',
            'title' => 'Laboratory Technician',
            'company' => 'BM Rehab',
            'initial' => 'BM',
            'location' => 'Hyderabad, Telangana',
            'city' => 'Hyderabad',
            'type' => 'Full-time',
            'experience' => '0.0 – 4.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '2',
            'posted' => '23 hours ago',
            'category' => 'Laboratory & Pathology',
            'skills' => ['Laboratory Testing', 'Patient Care', 'Clinical Assessment', 'Sample Collection'],
            'education' => ['B.Sc MLT', 'DMLT', 'M.Sc Medical Laboratory Technology'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are hiring a Laboratory Technician to perform diagnostic tests, collect and process samples, maintain laboratory equipment, and prepare accurate reports.',
            'extra' => 'Candidates should have laboratory knowledge, technical skills, and attention to detail.',
            'featured' => true,
        ],
        [
            'slug' => 'duty-medical-officer',
            'title' => 'Duty Medical Officer',
            'company' => 'BM Rehab',
            'initial' => 'BM',
            'location' => 'Hyderabad, Telangana',
            'city' => 'Hyderabad',
            'type' => 'Full-time',
            'experience' => '1.0 – 4.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '2',
            'posted' => '23 hours ago',
            'category' => 'Doctors & Physicians',
            'skills' => ['Patient Care', 'Clinical Assessment', 'Critical Care'],
            'education' => ['MBBS', 'Valid Medical Registration'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for a Duty Medical Officer to provide medical care, assess patients, monitor treatment, and coordinate with the hospital medical team.',
            'extra' => 'Candidates should have strong clinical knowledge and patient management skills.',
            'featured' => true,
        ],
        [
            'slug' => 'bams-doctor',
            'title' => 'BAMS Doctor',
            'company' => 'Spectra Aesthetics',
            'initial' => 'SA',
            'location' => 'Bengaluru, Karnataka',
            'city' => 'Bengaluru',
            'type' => 'Full-time',
            'experience' => '2.0 – 3.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '1',
            'posted' => '1 day ago',
            'category' => 'Doctors & Physicians',
            'skills' => ['Patient Care', 'Clinical Assessment', 'Consultation'],
            'education' => ['BAMS'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for a BAMS Doctor to provide patient consultations, assess health conditions, and support treatment planning.',
            'extra' => 'Good communication and patient counselling skills are preferred.',
            'featured' => true,
        ],
        [
            'slug' => 'staff-nurse',
            'title' => 'Staff Nurse',
            'company' => 'Sankara Nethra Chikitsalaya',
            'initial' => 'SN',
            'location' => 'Vijayawada, Andhra Pradesh',
            'city' => 'Vijayawada',
            'type' => 'Full-time',
            'experience' => '0.0 – 5.0 yrs',
            'salary' => '₹0.2L – ₹0.3L PA',
            'vacancies' => '5',
            'posted' => '1 day ago',
            'category' => 'Nursing Professionals',
            'skills' => ['Nursing Care', 'Patient Care', 'Clinical Assessment'],
            'education' => ['GNM', 'B.Sc Nursing', 'M.Sc Nursing'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are hiring Staff Nurses to provide quality nursing care, monitor patients, assist doctors, administer medications, and maintain patient records.',
            'extra' => 'Candidates should have nursing knowledge, compassion, and effective communication skills.',
            'featured' => true,
        ],
        [
            'slug' => 'customer-support-executive',
            'title' => 'Customer Support Executive',
            'company' => 'PNG Healthcare Pvt Ltd',
            'initial' => 'PN',
            'location' => 'Bengaluru, Karnataka',
            'city' => 'Bengaluru',
            'type' => 'Full-time',
            'experience' => '2.0 – 3.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '2',
            'posted' => '1 day ago',
            'category' => 'Healthcare Administration',
            'skills' => ['Communication Skills', 'Customer Support', 'Patient Coordination'],
            'education' => ['Any Graduate'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for a Customer Support Executive to handle patient enquiries, coordinate appointments, and provide support to healthcare customers.',
            'extra' => 'Good communication and customer service skills are required.',
            'featured' => true,
        ],
        [
            'slug' => 'hr-intern',
            'title' => 'HR Intern',
            'company' => 'VAIDYOG HealthTech Pvt. Ltd.',
            'initial' => 'V',
            'location' => 'Bengaluru, Karnataka',
            'city' => 'Bengaluru',
            'type' => 'Part-time',
            'experience' => '0.0 – 2.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '2',
            'posted' => '2 days ago',
            'category' => 'Healthcare Administration',
            'skills' => ['Team Leadership', 'Communication Skills', 'Time Management'],
            'education' => ['Any Graduate', 'MBA HR'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for an HR Intern to assist with recruitment, candidate coordination, interview scheduling, and day-to-day HR activities.',
            'extra' => 'This is a good opportunity for candidates interested in building a career in human resources.',
            'featured' => true,
        ],
        [
            'slug' => 'general-practitioner',
            'title' => 'General Practitioner (MBBS)',
            'company' => 'Vida Clinics',
            'initial' => 'VC',
            'location' => 'Sancoale, Goa',
            'city' => 'Goa',
            'type' => 'Full-time',
            'experience' => '2.0 – 10.0 yrs',
            'salary' => '₹0.5L – ₹0.6L PA',
            'vacancies' => '2',
            'posted' => '4 days ago',
            'category' => 'Doctors & Physicians',
            'skills' => ['Patient Care', 'Clinical Assessment', 'CPR / BLS'],
            'education' => ['MBBS', 'Valid Medical Registration'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for a General Practitioner to provide outpatient consultations, evaluate patients, diagnose common medical conditions, and recommend appropriate treatment.',
            'extra' => 'Candidates should have strong clinical knowledge and patient care experience.',
            'featured' => false,
        ],
        [
            'slug' => 'nurse-male-female',
            'title' => 'Nurse - Male/Female',
            'company' => 'Vida Clinics',
            'initial' => 'VC',
            'location' => 'Sancoale, Goa',
            'city' => 'Goa',
            'type' => 'Full-time',
            'experience' => '2.0 –  10.0 yrs',
            'salary' => '₹0.1L – ₹0.2L PA',
            'vacancies' => '3',
            'posted' => '4 days ago',
            'category' => 'Nursing Professionals',
            'skills' => ['Nursing Care', 'Patient Care', 'Clinical Assessment'],
            'education' => ['GNM', 'B.Sc Nursing'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for Nurses to provide patient care, monitor vital signs, assist doctors, and maintain accurate medical records.',
            'extra' => 'Candidates should have relevant nursing qualifications and patient care experience.',
            'featured' => false,
        ],
        [
            'slug' => 'xray-technician',
            'title' => 'Xray Technician',
            'company' => 'Vida Clinics',
            'initial' => 'VC',
            'location' => 'Sancoale, Goa',
            'city' => 'Goa',
            'type' => 'Full-time',
            'experience' => '2.0 – 10.0 yrs',
            'salary' => '₹0.1L – ₹0.2L PA',
            'vacancies' => '1',
            'posted' => '4 days ago',
            'category' => 'Radiology & Imaging',
            'skills' => ['Radiology', 'Patient Care', 'Medical Imaging'],
            'education' => ['Diploma in Radiology', 'B.Sc Radiology'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are hiring an Xray Technician to perform diagnostic imaging procedures and support doctors with accurate imaging reports.',
            'extra' => 'Knowledge of imaging equipment and patient safety procedures is preferred.',
            'featured' => false,
        ],
        [
            'slug' => 'marketing-executive',
            'title' => 'Marketing Executive',
            'company' => 'Currex Hospital',
            'initial' => 'CH',
            'location' => 'Bengaluru, Karnataka',
            'city' => 'Bengaluru',
            'type' => 'Full-time',
            'experience' => '3.0 – 4.0 yrs',
            'salary' => 'Not disclosed',
            'vacancies' => '2',
            'posted' => '4 days ago',
            'category' => 'Healthcare Administration',
            'skills' => ['Marketing', 'Communication Skills', 'Business Development'],
            'education' => ['Any Graduate', 'MBA Marketing'],
            'contact' => 'HR Department',
            'phone' => 'Contact through employer',
            'description' => 'We are looking for a Marketing Executive to support hospital marketing activities, develop business opportunities, and build relationships with healthcare partners.',
            'extra' => 'Candidates should have marketing experience and strong communication skills.',
            'featured' => true,
        ],
    ];

    $categories = [
        'Doctors & Physicians',
        'Nursing Professionals',
        'Dental Professionals',
        'Pharmacy',
        'Physiotherapy',
        'Radiology & Imaging',
        'Laboratory & Pathology',
        'Healthcare Administration',
        'Allied Health Sciences',
        'Emergency & Critical Care',
        'Surgery & Anaesthesiology',
        'Cardiology',
    ];

    $popularCareers = [
        [
            'name' => 'Doctor Jobs',
            'sub' => 'MBBS, BAMS and more',
            'initial' => 'MD',
            'color' => 'bg-blue-100 text-blue-700',
            'category' => 'Doctors & Physicians'
        ],
        [
            'name' => 'Nursing Jobs',
            'sub' => 'GNM and B.Sc Nursing',
            'initial' => 'RN',
            'color' => 'bg-green-100 text-green-700',
            'category' => 'Nursing Professionals'
        ],
        [
            'name' => 'Pharmacy Jobs',
            'sub' => 'D.Pharm and B.Pharm',
            'initial' => 'PH',
            'color' => 'bg-purple-100 text-purple-700',
            'category' => 'Pharmacy'
        ],
    ];

    // Get the selected job from the clean URL: /careers/job-title
    $selectedJob = collect($jobs)->firstWhere('slug', $selectedJobSlug ?? null);

    $search = strtolower(trim(request('search', '')));
    $cityFilter = request('city', '');
    $typeFilter = request('type', '');
    $categoryFilter = request('category', '');
    $experienceFilter = request('experience', '');

    $filteredJobs = collect($jobs)->filter(function ($job) use (
        $search, $cityFilter, $typeFilter, $categoryFilter, $experienceFilter
    ) {
        $searchMatch = !$search ||
            str_contains(strtolower($job['title']), $search) ||
            str_contains(strtolower($job['company']), $search) ||
            str_contains(strtolower($job['category']), $search) ||
            str_contains(strtolower($job['location']), $search);

        $cityMatch = !$cityFilter || $job['city'] === $cityFilter;
        $typeMatch = !$typeFilter || $job['type'] === $typeFilter;
        $categoryMatch = !$categoryFilter || $job['category'] === $categoryFilter;

        $experienceMatch = true;

        if ($experienceFilter === 'Fresher') {
            $experienceMatch = str_contains($job['experience'], '0.0');
        } elseif ($experienceFilter === '1-3 years') {
            $experienceMatch = str_contains($job['experience'], '1.0') ||
                               str_contains($job['experience'], '2.0') ||
                               str_contains($job['experience'], '3.0');
        } elseif ($experienceFilter === '3-5 years') {
            $experienceMatch = str_contains($job['experience'], '3.0') ||
                               str_contains($job['experience'], '4.0') ||
                               str_contains($job['experience'], '5.0');
        } elseif ($experienceFilter === '5-10 years') {
            $experienceMatch = str_contains($job['experience'], '5.0') ||
                               str_contains($job['experience'], '10.0');
        }

        return $searchMatch && $cityMatch && $typeMatch && $categoryMatch && $experienceMatch;
    })->values();

    $perPage = 6;
    $totalJobs = $filteredJobs->count();
    $totalPages = max(1, (int) ceil($totalJobs / $perPage));
    $currentPage = min(max(1, (int) request('page', 1)), $totalPages);
    $paginatedJobs = $filteredJobs->slice(($currentPage - 1) * $perPage, $perPage);

    // Important: use the route parameter, not request('job')
    $isDetailsPage = !empty($selectedJobSlug);

@endphp

@if($isDetailsPage && $selectedJob)

    {{-- =========================================================
         JOB DETAILS PAGE
    ========================================================== --}}

    <section class="relative overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C] py-9 md:py-11">
        <div class="absolute -left-16 -top-20 h-64 w-64 rounded-full bg-white/10"></div>
        <div class="absolute -right-16 -bottom-24 h-72 w-72 rounded-full bg-white/10"></div>

        <div class="relative mx-auto max-w-7xl px-5 text-center">
            <p class="mb-2 text-xs font-bold uppercase tracking-[0.2em] text-white/80">
                VAIDYOG CAREER OPPORTUNITIES
            </p>

            <h1 class="text-2xl font-extrabold text-white md:text-3xl">
                {{ $selectedJob['title'] }}
            </h1>

            <p class="mt-2 text-sm text-white/85">
                Find your next opportunity in healthcare.
            </p>
        </div>
    </section>

    <section class="bg-slate-50 py-10 md:py-14">
        <div class="mx-auto max-w-5xl px-5">

            <a href="{{ route('careers') }}"
               class="mb-6 inline-flex items-center gap-2 text-sm font-semibold text-[#008F86] hover:text-[#34466F]">
                <i class="fa-solid fa-arrow-left"></i>
                All Jobs
            </a>

            {{-- JOB SUMMARY --}}

            <div class="mb-5 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                <div class="flex flex-col gap-5 md:flex-row md:items-center">

                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-[#46577F] to-[#3DB49C] text-xl font-extrabold text-white">
                        {{ $selectedJob['initial'] }}
                    </div>

                    <div class="min-w-0 flex-1">

                        <h2 class="text-xl font-extrabold text-[#253452] md:text-2xl">
                            {{ $selectedJob['title'] }}
                        </h2>

                        <p class="mt-1 text-sm font-medium text-gray-500">
                            {{ $selectedJob['company'] }}
                        </p>

                        <div class="mt-3 flex flex-wrap gap-2 text-xs font-medium text-gray-600">
                            <span class="rounded-full bg-slate-100 px-3 py-1">{{ $selectedJob['type'] }}</span>
                            <span class="rounded-full bg-slate-100 px-3 py-1">{{ $selectedJob['location'] }}</span>

                            @if($selectedJob['featured'])
                                <span class="rounded-full bg-amber-100 px-3 py-1 font-bold text-amber-700">
                                    Featured
                                </span>
                            @endif
                        </div>

                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-5 border-t border-gray-100 pt-5 md:grid-cols-4">

                    <div>
                        <p class="text-xs text-gray-400">Vacancies</p>
                        <p class="mt-1 text-sm font-bold text-[#253452]">{{ $selectedJob['vacancies'] }}</p>
                    </div>

                    <div>
                        <p class="text-xs text-gray-400">Experience</p>
                        <p class="mt-1 text-sm font-bold text-[#253452]">{{ $selectedJob['experience'] }}</p>
                    </div>

                    <div>
                        <p class="text-xs text-gray-400">Salary</p>
                        <p class="mt-1 text-sm font-bold text-[#253452]">{{ $selectedJob['salary'] }}</p>
                    </div>

                    <div>
                        <p class="text-xs text-gray-400">Posted</p>
                        <p class="mt-1 text-sm font-bold text-[#253452]">{{ $selectedJob['posted'] }}</p>
                    </div>

                </div>
            </div>

            {{-- JOB DESCRIPTION AND SIDEBAR --}}

            <div class="grid grid-cols-1 gap-5 md:grid-cols-3">

                <div class="space-y-5 md:col-span-2">

                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

                        <h3 class="mb-4 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                            Job Description
                        </h3>

                        <p class="text-sm leading-7 text-gray-600">
                            {{ $selectedJob['description'] }}
                        </p>

                        <p class="mt-4 text-sm leading-7 text-gray-600">
                            {{ $selectedJob['extra'] }}
                        </p>

                    </div>

                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-6">

                        <h3 class="mb-4 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                            Key Skills
                        </h3>

                        <div class="flex flex-wrap gap-2">

                            @foreach($selectedJob['skills'] as $skill)
                                <span class="rounded-md bg-slate-100 px-3 py-2 text-xs font-medium text-gray-600">
                                    {{ $skill }}
                                </span>
                            @endforeach

                        </div>

                        <h3 class="mb-4 mt-7 text-sm font-bold uppercase tracking-wide text-[#34466F]">
                            Education
                        </h3>

                        <div class="flex flex-wrap gap-2">

                            @foreach($selectedJob['education'] as $education)
                                <span class="rounded-md bg-slate-100 px-3 py-2 text-xs font-medium text-gray-600">
                                    {{ $education }}
                                </span>
                            @endforeach

                        </div>

                    </div>

                </div>

                {{-- RIGHT SIDEBAR --}}

                <div class="space-y-5">

                    <div class="rounded-2xl bg-gradient-to-br from-[#46577F] to-[#3DB49C] p-5 text-center shadow-md">

                        <h3 class="text-sm font-bold text-white">
                            Interested in this position?
                        </h3>

                        <a href="#"
                           class="mt-4 block rounded-lg bg-white px-4 py-3 text-sm font-bold text-[#34466F] transition hover:bg-gray-100">
                            Apply Now
                        </a>

                        <a href="#"
                           class="mt-2 block rounded-lg border border-white/40 px-4 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                            <i class="fa-regular fa-bookmark mr-1"></i>
                            Save Job
                        </a>

                    </div>

                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                        <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-gray-400">
                            Contact
                        </h3>

                        <p class="text-sm font-semibold text-[#253452]">
                            {{ $selectedJob['contact'] }}
                        </p>

                        <p class="mt-1 text-xs text-gray-500">
                            {{ $selectedJob['phone'] }}
                        </p>

                    </div>

                    <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                        <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-gray-400">
                            Location
                        </h3>

                        <p class="text-sm font-semibold text-[#253452]">
                            {{ $selectedJob['location'] }}
                        </p>

                        <p class="mt-2 text-xs leading-5 text-gray-500">
                            Location details will be shared by the employer.
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </section>

@elseif($isDetailsPage)

    <section class="bg-slate-50 py-24 text-center">

        <h1 class="text-2xl font-bold text-[#34466F]">
            Job Not Found
        </h1>

        <p class="mt-2 text-sm text-gray-500">
            The job you are looking for may no longer be available.
        </p>

        <a href="{{ route('careers') }}"
           class="mt-5 inline-block rounded-lg bg-[#34466F] px-6 py-3 text-sm font-bold text-white">
            Browse Careers
        </a>

    </section>

@else
    {{-- =========================================================
         CAREERS LISTING PAGE
    ========================================================== --}}

    {{-- HERO BANNER --}}

    <section class="relative overflow-hidden bg-[#26334f]">

        <div class="absolute inset-0">

            <!-- Background Image -->
            <img
                src="{{ asset('images/carrers-banner.webp') }}"
                alt="Healthcare professionals"
                class="h-full w-full object-cover object-center"
            >

            <!-- Dark Overlay + Gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-black/30"></div>

        </div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 items-center gap-8 px-8 py-12 md:py-16 lg:grid-cols-2 lg:gap-10">

            {{-- LEFT BANNER CONTENT --}}

            <div class="max-w-2xl">

                <span class="inline-flex items-center gap-3 rounded-full bg-white px-4 py-3 text-xs font-extrabold tracking-wide text-[#008F86]">

                    <span class="h-2 w-2.5 rounded-full bg-[#00A69A]"></span>

                    VAIDYOG CAREER OPPORTUNITIES

                </span>

                <h1 class="mt-6 text-[32px] font-extrabold leading-[1.18] text-white sm:text-5xl lg:text-[43px]">

                    Explore Healthcare

                    <span class="text-[#00B5A5]">Careers</span>

                    Across India

                </h1>

                <p class="mt-5 max-w-xl text-sm leading-7 text-[#d5d5eb] md:text-base">

                    Discover exciting healthcare job opportunities across India.
                    Explore doctor, nursing, pharmacy and allied healthcare roles
                    and find the right opportunity for your professional journey.

                </p>

                <div class="mt-7 flex flex-wrap gap-3">

                    <a href="#career-jobs"
                       class="rounded-lg bg-[#00A69A] px-3 py-3 text-sm font-bold text-white shadow-lg transition duration-300 hover:-translate-y-1 hover:bg-[#008F86]">

                        Explore Careers
                        <i class="fa-solid fa-arrow-right ml-2"></i>

                    </a>

                    <a href="#career-jobs"
                       class="rounded-lg border border-white/70 bg-white px-3 py-3 text-sm font-bold text-[#34466F] transition duration-300 hover:-translate-y-1 hover:bg-gray-100">

                        Browse All Jobs

                    </a>

                </div>

                {{-- BANNER STATS --}}

                <div class="mt-9 flex flex-wrap justify-left gap-8 md:gap-10">

                    <div class="text-center">
                        <p class="text-2xl font-extrabold text-[#00B5A5]">12+</p>
                        <p class="mt-1.5 text-xs font-medium tracking-wide text-white">
                            Job Opportunities
                        </p>
                    </div>

                    <div class="text-center">
                        <p class="text-2xl font-extrabold text-[#00B5A5]">10+</p>
                        <p class="mt-1.5 text-xs font-medium tracking-wide text-white">
                            Healthcare Roles
                        </p>
                    </div>

                    <div class="text-center">
                        <p class="text-2xl font-extrabold text-[#00B5A5]">India</p>
                        <p class="mt-1.5 text-xs font-medium tracking-wide text-white">
                            Career Locations
                        </p>
                    </div>

                </div>

            </div>

            {{-- RIGHT BANNER CARD --}}

            <div class="ml-auto w-full max-w-[500px] rounded-2xl border border-white/60 bg-white/95 p-4 shadow-2xl backdrop-blur-sm md:p-5">

                <div class="mb-4 flex items-center justify-between gap-3">

                    <div>
                        <p class="text-xs font-medium text-[#71829e]">
                            Explore Career Opportunities
                        </p>

                        <h2 class="mt-1 text-lg font-extrabold tracking-tight text-[#172033] md:text-xl">
                            Find Your Next Role
                        </h2>
                    </div>

                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-xl text-blue-600">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>

                </div>

                <div class="space-y-2">

                    @foreach($popularCareers as $career)

                        <a href="{{ route('careers', ['category' => $career['category']]) }}"
                           class="group flex items-center gap-3 rounded-xl border border-gray-100 bg-slate-50 p-3 shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-[#00A69A]/40 hover:bg-white hover:shadow-md">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg {{ $career['color'] }} text-base font-extrabold">
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
                        Explore profession-specific healthcare opportunities.
                    </p>

                    <a href="#career-jobs"
                       class="mt-2 inline-flex items-center gap-2 text-xs font-bold text-[#008F86] hover:text-[#34466F]">

                        Explore All Careers
                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- SEARCH BAR --}}

    <section class="relative z-10 mx-auto -mt-7 max-w-7xl px-8">

        <form action="{{ route('careers') }}" method="GET"
              class="grid grid-cols-1 gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-lg md:grid-cols-12">

            <div class="relative md:col-span-5">

                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Job title, skills, institution..."
                    class="w-full rounded-lg border border-gray-200 py-3 pl-11 pr-4 text-sm outline-none transition focus:border-[#00A69A] focus:ring-2 focus:ring-[#00A69A]/10"
                >

            </div>

            <div class="relative md:col-span-3">

                <i class="fa-solid fa-location-dot absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

                <select name="city"
                        class="w-full appearance-none rounded-lg border border-gray-200 bg-white py-3 pl-11 pr-4 text-sm text-gray-600 outline-none focus:border-[#00A69A]">

                    <option value="">All Locations</option>

                    @foreach(['Bengaluru', 'Hyderabad', 'Vijayawada', 'Goa'] as $city)

                        <option value="{{ $city }}" @selected(request('city') == $city)>
                            {{ $city }}
                        </option>

                    @endforeach

                </select>

            </div>

            <div class="md:col-span-2">

                <select name="experience"
                        class="w-full rounded-lg border border-gray-200 bg-white px-3 py-3 text-sm text-gray-600 outline-none focus:border-[#00A69A]">

                    <option value="">Experience</option>
                    <option value="Fresher" @selected(request('experience') == 'Fresher')>Fresher</option>
                    <option value="1-3 years" @selected(request('experience') == '1-3 years')>1–3 years</option>
                    <option value="3-5 years" @selected(request('experience') == '3-5 years')>3–5 years</option>
                    <option value="5-10 years" @selected(request('experience') == '5-10 years')>5–10 years</option>

                </select>

            </div>

            <div class="md:col-span-2">

                <button type="submit"
                        class="w-full rounded-lg bg-[#008F86] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#34466F]">

                    Search Jobs

                </button>

            </div>

        </form>

    </section>

    {{-- JOB LISTING AND FILTERS --}}

    <section id="career-jobs" class="bg-slate-50 py-10 md:py-14">

        <div class="mx-auto max-w-7xl px-8">

            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

                <div>

                    <h2 class="text-xl font-extrabold text-[#253452]">
                        Explore Healthcare Jobs
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        {{ $totalJobs }} jobs found
                    </p>

                </div>

                <a href="{{ route('careers') }}"
                   class="text-xs font-semibold text-[#008F86] hover:text-[#34466F]">

                    Reset All Filters

                </a>

            </div>

            <div class="grid grid-cols-1 gap-5 lg:grid-cols-12">

                {{-- LEFT FILTER SIDEBAR --}}

                <aside class="h-fit rounded-xl border border-gray-200 bg-white p-5 shadow-sm lg:col-span-3">

                    <div class="mb-5 flex items-center justify-between">

                        <h2 class="text-sm font-extrabold text-[#253452]">
                            Filters
                        </h2>

                        <a href="{{ route('careers') }}"
                           class="text-xs font-semibold text-[#008F86]">
                            Reset
                        </a>

                    </div>

                    <form action="{{ route('careers') }}" method="GET">

                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <input type="hidden" name="city" value="{{ request('city') }}">
                        <input type="hidden" name="experience" value="{{ request('experience') }}">

                        {{-- EMPLOYMENT TYPE --}}

                        <div class="border-b border-gray-100 pb-5">

                            <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-[#34466F]">
                                Employment Type
                            </h3>

                            @foreach(['Full-time', 'Part-time', 'Contractual'] as $type)

                                <label class="mb-3 flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                    <input
                                        type="radio"
                                        name="type"
                                        value="{{ $type }}"
                                        @checked(request('type') == $type)
                                        onchange="this.form.submit()"
                                        class="accent-[#008F86]"
                                    >

                                    {{ $type }}

                                </label>

                            @endforeach

                            <label class="flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                <input
                                    type="radio"
                                    name="type"
                                    value=""
                                    @checked(!request('type'))
                                    onchange="this.form.submit()"
                                    class="accent-[#008F86]"
                                >

                                All Types

                            </label>

                        </div>

                        {{-- SPECIALTY --}}

                        <div class="border-b border-gray-100 py-5">

                            <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-[#34466F]">
                                Specialty
                            </h3>

                            @foreach($categories as $category)

                                <label class="mb-2 flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                    <input
                                        type="radio"
                                        name="category"
                                        value="{{ $category }}"
                                        @checked(request('category') == $category)
                                        onchange="this.form.submit()"
                                        class="accent-[#008F86]"
                                    >

                                    {{ $category }}

                                </label>

                            @endforeach

                            <label class="mt-2 flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                <input
                                    type="radio"
                                    name="category"
                                    value=""
                                    @checked(!request('category'))
                                    onchange="this.form.submit()"
                                    class="accent-[#008F86]"
                                >

                                All Specialties

                            </label>

                        </div>

                        {{-- EXPERIENCE --}}

                        <div class="pt-5">

                            <h3 class="mb-3 text-xs font-bold uppercase tracking-wide text-[#34466F]">
                                Experience
                            </h3>

                            @foreach(['Fresher', '1-3 years', '3-5 years', '5-10 years'] as $exp)

                                <label class="mb-3 flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                    <input
                                        type="radio"
                                        name="experience"
                                        value="{{ $exp }}"
                                        @checked(request('experience') == $exp)
                                        onchange="this.form.submit()"
                                        class="accent-[#008F86]"
                                    >

                                    {{ $exp }}

                                </label>

                            @endforeach

                            <label class="flex cursor-pointer items-center gap-2 text-xs text-gray-600">

                                <input
                                    type="radio"
                                    name="experience"
                                    value=""
                                    @checked(!request('experience'))
                                    onchange="this.form.submit()"
                                    class="accent-[#008F86]"
                                >

                                Any Experience

                            </label>

                        </div>

                    </form>

                </aside>

                {{-- RIGHT JOB CARDS --}}

                <div class="lg:col-span-9">

                    @if($paginatedJobs->isNotEmpty())

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

                            @foreach($paginatedJobs as $job)

                                {{-- FULL CLICKABLE JOB CARD --}}

                                <a
                                    href="{{ route('careers.show', ['job' => $job['slug']]) }}"
                                    class="group relative flex h-full flex-col rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#3DB49C] hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-[#00A69A]"
                                >

                                    @if($job['featured'])

                                        <span class="absolute right-4 top-4 rounded-full bg-amber-50 px-3 py-1 text-[10px] font-bold text-amber-700">
                                            Featured
                                        </span>

                                    @endif

                                    {{-- COMPANY --}}

                                    <div class="mb-4 flex items-center gap-3 pr-16">

                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-[#46577F] to-[#3DB49C] text-xs font-extrabold text-white">

                                            {{ $job['initial'] }}

                                        </div>

                                        <div>

                                            <h3 class="text-sm font-bold text-[#253452]">
                                                {{ $job['company'] }}
                                            </h3>

                                            <p class="mt-1 text-[11px] text-gray-400">
                                                {{ $job['category'] }}
                                            </p>

                                        </div>

                                    </div>

                                    {{-- JOB TITLE --}}

                                    <h2 class="text-base font-extrabold text-[#253452] transition group-hover:text-[#008F86]">

                                        {{ $job['title'] }}

                                    </h2>

                                    {{-- JOB META --}}

                                    <div class="mt-3 flex flex-wrap gap-x-3 gap-y-2 text-[11px] text-gray-500">

                                        <span>
                                            <i class="fa-solid fa-location-dot mr-1 text-[#008F86]"></i>
                                            {{ $job['location'] }}
                                        </span>

                                        <span>
                                            <i class="fa-regular fa-clock mr-1 text-[#008F86]"></i>
                                            {{ $job['type'] }}
                                        </span>

                                        <span>
                                            <i class="fa-solid fa-briefcase mr-1 text-[#008F86]"></i>
                                            {{ $job['experience'] }}
                                        </span>

                                    </div>

                                    {{-- SALARY --}}

                                    <div class="mt-4">

                                        <p class="text-xs text-gray-400">
                                            Salary
                                        </p>

                                        <p class="mt-1 text-sm font-bold text-[#34466F]">
                                            {{ $job['salary'] }}
                                        </p>

                                    </div>

                                    {{-- SKILLS --}}

                                    <div class="mt-4 flex flex-wrap gap-2">

                                        @foreach(array_slice($job['skills'], 0, 3) as $skill)

                                            <span class="rounded-md bg-slate-100 px-2 py-1 text-[10px] font-medium text-gray-500">
                                                {{ $skill }}
                                            </span>

                                        @endforeach

                                    </div>

                                    {{-- CARD FOOTER --}}

                                    <div class="mt-auto mt-5 flex items-center justify-between border-t border-gray-100 pt-4">

                                        <span class="text-[11px] text-gray-400">
                                            {{ $job['posted'] }}
                                        </span>

                                        <span class="text-xs font-bold text-[#008F86] transition group-hover:text-[#34466F]">

                                            View Details

                                            <i class="fa-solid fa-chevron-right ml-1 text-[9px] transition group-hover:translate-x-1"></i>

                                        </span>

                                    </div>

                                </a>

                            @endforeach

                        </div>
                                                {{-- PAGINATION --}}

                        @if($totalPages > 1)

                            <div class="mt-9 flex flex-wrap items-center justify-center gap-2">

                                {{-- PREVIOUS BUTTON --}}

                                @if($currentPage > 1)

                                    <a
                                        href="{{ route('careers', array_merge(request()->except('page'), ['page' => $currentPage - 1])) }}"
                                        class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm text-[#34466F] transition hover:border-[#008F86] hover:bg-[#008F86] hover:text-white"
                                    >
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </a>

                                @endif

                                {{-- PAGE NUMBERS --}}

                                @php
                                    $startPage = max(1, $currentPage - 2);
                                    $endPage = min($totalPages, $currentPage + 2);
                                @endphp

                                @if($startPage > 1)

                                    <a
                                        href="{{ route('careers', array_merge(request()->except('page'), ['page' => 1])) }}"
                                        class="flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm text-[#34466F] hover:border-[#008F86]"
                                    >
                                        1
                                    </a>

                                    @if($startPage > 2)
                                        <span class="px-1 text-gray-400">...</span>
                                    @endif

                                @endif

                                @for($page = $startPage; $page <= $endPage; $page++)

                                    <a
                                        href="{{ route('careers', array_merge(request()->except('page'), ['page' => $page])) }}"
                                        class="flex h-9 min-w-9 items-center justify-center rounded-lg border px-3 text-sm font-semibold transition
                                        {{ $currentPage == $page ? 'border-[#008F86] bg-[#008F86] text-white shadow-sm' : 'border-gray-200 bg-white text-[#34466F] hover:border-[#008F86] hover:text-[#008F86]' }}"
                                    >
                                        {{ $page }}
                                    </a>

                                @endfor

                                @if($endPage < $totalPages)

                                    @if($endPage < $totalPages - 1)
                                        <span class="px-1 text-gray-400">...</span>
                                    @endif

                                    <a
                                        href="{{ route('careers', array_merge(request()->except('page'), ['page' => $totalPages])) }}"
                                        class="flex h-9 min-w-9 items-center justify-center rounded-lg border border-gray-200 bg-white px-3 text-sm text-[#34466F] hover:border-[#008F86]"
                                    >
                                        {{ $totalPages }}
                                    </a>

                                @endif

                                {{-- NEXT BUTTON --}}

                                @if($currentPage < $totalPages)

                                    <a
                                        href="{{ route('careers', array_merge(request()->except('page'), ['page' => $currentPage + 1])) }}"
                                        class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 bg-white text-sm text-[#34466F] transition hover:border-[#008F86] hover:bg-[#008F86] hover:text-white"
                                    >
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>

                                @endif

                            </div>

                            <p class="mt-4 text-center text-xs text-gray-400">

                                Showing
                                {{ ($currentPage - 1) * $perPage + 1 }}
                                to
                                {{ min($currentPage * $perPage, $totalJobs) }}
                                of
                                {{ $totalJobs }} jobs

                            </p>

                        @endif

                    @else

                        <div class="rounded-xl border border-gray-200 bg-white px-5 py-16 text-center shadow-sm">

                            <i class="fa-solid fa-magnifying-glass mb-4 text-3xl text-gray-300"></i>

                            <h3 class="text-lg font-bold text-[#34466F]">
                                No Jobs Found
                            </h3>

                            <p class="mt-2 text-sm text-gray-500">
                                Try changing your search or filters.
                            </p>

                            <a href="{{ route('careers') }}"
                               class="mt-5 inline-block rounded-lg bg-[#008F86] px-6 py-3 text-sm font-bold text-white hover:bg-[#34466F]">
                                View All Jobs
                            </a>

                        </div>

                    @endif

                </div>

            </div>

        </div>

    </section>

@endif

@endsection