@extends('layouts.app')

@section('title', 'Exams & Licensing | Vaidyog')

@section('description', 'Explore healthcare entrance exams, nursing council registration, medical licensing, pharmacy registration and exam preparation guides in India.')

@section('content')

@php

$examPages = [

    'nursing-council-registration' => [
        'title' => 'Nursing Council Registration',
        'short' => 'Nursing Registration Guide',
        'subtitle' => 'Complete Guide to Nursing Council Registration in India',
        'keyword' => 'nursing council registration',
        'secondary' => 'INC registration, state nursing council renewal',
        'type' => 'Professional Registration',
        'initial' => 'NC',
        'color' => 'bg-blue-100 text-blue-700',

        'intro' => 'Nursing council registration is an important professional requirement for eligible nursing professionals who want to practice nursing in India. Learn about registration, eligibility, required documents and renewal procedures.',

        'overview' => 'Nursing professionals who complete recognized nursing qualifications generally need to register with the relevant State Nursing Registration Council. Registration establishes professional recognition and helps nurses meet applicable requirements for employment and practice.',

        'purpose' => [
            'Obtain professional nursing registration.',
            'Meet applicable requirements for nursing employment.',
            'Maintain valid registration details.',
            'Complete registration renewal where required.'
        ],

        'eligibility' => [
            'Candidates should possess a recognized nursing qualification.',
            'GNM and B.Sc Nursing graduates may apply according to applicable council rules.',
            'Candidates must satisfy the requirements of the concerned State Nursing Council.',
            'Additional requirements may apply depending on the qualification and registration category.'
        ],

        'process' => [
            'Identify the State Nursing Council responsible for your registration.',
            'Visit the official council website or registration portal.',
            'Select the appropriate registration application.',
            'Enter educational and personal details.',
            'Upload the required documents.',
            'Pay the applicable registration fee.',
            'Complete verification and track the application status.'
        ],

        'documents' => [
            'Nursing qualification certificate',
            'Nursing marksheets',
            'Identity proof',
            'Address proof',
            'Passport-size photograph',
            'Internship or training certificate, if applicable',
            'Previous registration certificate for renewal or transfer, if applicable'
        ],

        'preparation' => [
            'Keep your educational documents ready.',
            'Verify that your nursing qualification is recognized.',
            'Check the requirements of your respective State Nursing Council.',
            'Verify application details before submission.',
            'Keep your registration number and application acknowledgement safely.'
        ],

        'career' => [
            'Staff Nurse',
            'Nursing Officer',
            'Clinical Nurse',
            'Community Health Nurse',
            'Hospital Nursing Supervisor'
        ],

        'faqs' => [
            [
                'q' => 'What is nursing council registration?',
                'a' => 'It is professional registration with the relevant nursing council for eligible nursing professionals.'
            ],
            [
                'q' => 'Who can apply for nursing registration?',
                'a' => 'Candidates with recognized nursing qualifications such as GNM or B.Sc Nursing may apply, subject to the applicable council rules.'
            ],
            [
                'q' => 'Is nursing registration required for government jobs?',
                'a' => 'Many nursing recruitment notifications require valid nursing council registration. Always check the specific recruitment notification.'
            ],
            [
                'q' => 'Can I renew my nursing registration online?',
                'a' => 'Some State Nursing Councils provide online renewal facilities. The process depends on the concerned state council.'
            ]
        ],

        'official' => 'https://indiannursingcouncil.org/'
    ],

    'aiims-norcet-guide' => [
        'title' => 'AIIMS NORCET',
        'short' => 'AIIMS NORCET Guide',
        'subtitle' => 'Nursing Officer Recruitment Common Eligibility Test',
        'keyword' => 'AIIMS NORCET',
        'secondary' => 'NORCET syllabus, NORCET salary',
        'type' => 'Nursing Entrance Exam',
        'initial' => 'AN',
        'color' => 'bg-green-100 text-green-700',

        'intro' => 'AIIMS NORCET is a national-level recruitment examination conducted by AIIMS for Nursing Officer positions. Understand the examination pattern, eligibility, syllabus and preparation strategy.',

        'overview' => 'The Nursing Officer Recruitment Common Eligibility Test (NORCET) is conducted by the All India Institute of Medical Sciences for recruitment to Nursing Officer posts at participating AIIMS institutions and other participating organizations, as specified in the recruitment notification.',

        'purpose' => [
            'Recruit eligible candidates for Nursing Officer positions.',
            'Assess nursing knowledge and clinical understanding.',
            'Evaluate reasoning and general aptitude.',
            'Provide a common recruitment examination for participating institutions.'
        ],

        'eligibility' => [
            'B.Sc Nursing or Post-Basic B.Sc Nursing from an institution recognized as specified in the notification, or',
            'Diploma in General Nursing and Midwifery from an eligible institution.',
            'Diploma candidates must satisfy the applicable experience requirements.',
            'Candidates must meet the age and registration requirements in the current notification.',
            'Valid nursing council registration is generally required.'
        ],

        'process' => [
            'Visit the official AIIMS examination website.',
            'Check the latest NORCET recruitment notification.',
            'Read eligibility and qualification requirements.',
            'Complete online registration.',
            'Fill in personal and educational details.',
            'Upload photograph, signature and required documents.',
            'Pay the applicable examination fee.',
            'Download the admit card when released.',
            'Appear for the examination and check the result.'
        ],

        'documents' => [
            'Educational certificates',
            'GNM or B.Sc Nursing qualification documents',
            'Nursing council registration certificate',
            'Identity proof',
            'Passport-size photograph',
            'Scanned signature',
            'Category certificate, if applicable'
        ],

        'preparation' => [
            'Study Medical-Surgical Nursing.',
            'Revise Community Health Nursing.',
            'Practice Obstetrics and Gynaecological Nursing.',
            'Study Child Health Nursing.',
            'Revise Mental Health Nursing.',
            'Practice Nursing Foundations.',
            'Solve previous examination questions.',
            'Take regular mock tests and improve time management.'
        ],

        'career' => [
            'AIIMS Nursing Officer',
            'Hospital Nursing Officer',
            'Clinical Nursing Professional',
            'Government Healthcare Institution Nurse'
        ],

        'faqs' => [
            [
                'q' => 'What is AIIMS NORCET?',
                'a' => 'NORCET stands for Nursing Officer Recruitment Common Eligibility Test. It is conducted by AIIMS for Nursing Officer recruitment.'
            ],
            [
                'q' => 'Who is eligible for NORCET?',
                'a' => 'Eligible B.Sc Nursing and GNM candidates can apply, subject to the educational, experience, registration and age requirements in the notification.'
            ],
            [
                'q' => 'What is the NORCET syllabus?',
                'a' => 'The examination covers nursing subjects and other areas specified in the official examination scheme, including nursing fundamentals and clinical subjects.'
            ],
            [
                'q' => 'Where can I check NORCET notifications?',
                'a' => 'Visit the official AIIMS examination website for recruitment notifications, application details and results.'
            ]
        ],

        'official' => 'https://www.aiimsexams.ac.in/'
    ],

    'neet-pg-guide' => [
        'title' => 'NEET PG',
        'short' => 'NEET PG Guide',
        'subtitle' => 'National Eligibility cum Entrance Test for Postgraduate Medical Courses',
        'keyword' => 'NEET PG',
        'secondary' => 'NEET PG counselling, NEET PG cut-off',
        'type' => 'Medical Entrance Exam',
        'initial' => 'PG',
        'color' => 'bg-purple-100 text-purple-700',

        'intro' => 'NEET PG is the entrance examination for eligible medical graduates seeking admission to postgraduate medical courses in India. Explore eligibility, examination details, counselling and preparation guidance.',

        'overview' => 'The National Eligibility cum Entrance Test for Postgraduate courses is conducted for admission to eligible postgraduate medical programmes such as MD, MS and PG Diploma courses, subject to applicable regulations and admission rules.',

        'purpose' => [
            'Admission to postgraduate medical programmes.',
            'Assessment of undergraduate medical knowledge.',
            'Participation in centralized postgraduate medical counselling.',
            'Allocation of seats based on merit, eligibility and applicable reservation rules.'
        ],

        'eligibility' => [
            'An MBBS degree or provisional MBBS pass certificate recognized under applicable regulations.',
            'Completion of the required internship by the prescribed deadline.',
            'Medical registration with the applicable authority.',
            'Fulfilment of the eligibility conditions in the current examination information bulletin.'
        ],

        'process' => [
            'Visit the official NBEMS website.',
            'Read the current NEET PG information bulletin.',
            'Register using the prescribed application process.',
            'Fill in academic and personal details.',
            'Upload the required documents and photograph.',
            'Pay the examination fee.',
            'Download the admit card.',
            'Appear for the examination.',
            'Check the result and participate in applicable counselling.'
        ],

        'documents' => [
            'MBBS degree or provisional certificate',
            'MBBS academic records',
            'Internship completion certificate',
            'Medical registration certificate',
            'Identity proof',
            'Passport-size photograph',
            'Category certificate, if applicable'
        ],

        'preparation' => [
            'Build a study plan covering all MBBS subjects.',
            'Focus on Anatomy and Physiology.',
            'Revise Pathology and Pharmacology.',
            'Practice Medicine and Surgery questions.',
            'Cover Obstetrics and Gynaecology.',
            'Revise Preventive and Social Medicine.',
            'Practice previous-year questions and mock tests.',
            'Analyse mistakes and revise high-priority topics.'
        ],

        'career' => [
            'Doctor',
            'MD Specialist',
            'MS Specialist',
            'Medical Consultant',
            'Clinical Specialist'
        ],

        'faqs' => [
            [
                'q' => 'What is NEET PG?',
                'a' => 'NEET PG is an entrance examination for admission to eligible postgraduate medical courses in India.'
            ],
            [
                'q' => 'Who can apply for NEET PG?',
                'a' => 'Eligible MBBS graduates who meet the internship and registration requirements can apply.'
            ],
            [
                'q' => 'Which courses are available through NEET PG?',
                'a' => 'Eligible courses include MD, MS and PG Diploma programmes, depending on the applicable admission rules and seat availability.'
            ],
            [
                'q' => 'Where can I find NEET PG counselling details?',
                'a' => 'Check the official counselling authority and current admission notifications for the relevant counselling process.'
            ]
        ],

        'official' => 'https://natboard.edu.in/'
    ],

    'fmge-guide' => [
        'title' => 'FMGE',
        'short' => 'FMGE Guide',
        'subtitle' => 'Foreign Medical Graduate Examination',
        'keyword' => 'FMGE',
        'secondary' => 'FMGE eligibility, foreign MBBS jobs India',
        'type' => 'Medical Licensing Examination',
        'initial' => 'FM',
        'color' => 'bg-orange-100 text-orange-700',

        'intro' => 'FMGE is a screening examination associated with the medical registration pathway for eligible Indian citizens and overseas citizens of India who obtained their primary medical qualification outside India.',

        'overview' => 'The Foreign Medical Graduate Examination is conducted by the National Board of Examinations in Medical Sciences. Eligible foreign medical graduates must follow the applicable screening and registration requirements before obtaining permission to practice medicine in India.',

        'purpose' => [
            'Assess the medical knowledge of eligible foreign medical graduates.',
            'Support the prescribed screening process.',
            'Help eligible candidates proceed towards medical registration.',
            'Establish the required qualification pathway for medical practice in India.'
        ],

        'eligibility' => [
            'Candidate must fall within the eligible citizenship categories.',
            'Must possess a primary medical qualification from a recognized foreign institution.',
            'Must meet applicable qualification recognition requirements.',
            'Must satisfy the requirements prescribed by the relevant Indian medical authorities.',
            'Additional conditions may apply based on the date and country of qualification.'
        ],

        'process' => [
            'Check the latest FMGE information bulletin.',
            'Verify your foreign medical qualification and eligibility.',
            'Complete the prescribed online registration.',
            'Submit the educational and identity documents.',
            'Pay the examination fee.',
            'Download the admit card.',
            'Appear for the screening examination.',
            'Check the result and follow the prescribed registration process.'
        ],

        'documents' => [
            'Primary medical qualification certificate',
            'Academic transcripts',
            'Passport',
            'Identity proof',
            'Eligibility certificate, where applicable',
            'Photograph and signature',
            'Other documents prescribed in the current bulletin'
        ],

        'preparation' => [
            'Revise all major MBBS subjects.',
            'Focus on Medicine and Surgery.',
            'Study Pathology and Pharmacology.',
            'Practice Microbiology and Biochemistry.',
            'Revise Obstetrics and Gynaecology.',
            'Study Community Medicine.',
            'Solve previous FMGE questions.',
            'Take full-length mock examinations.'
        ],

        'career' => [
            'Registered Medical Practitioner',
            'Hospital Medical Officer',
            'Clinical Doctor',
            'Medical Consultant'
        ],

        'faqs' => [
            [
                'q' => 'What is FMGE?',
                'a' => 'FMGE is a screening examination for eligible foreign medical graduates following the applicable Indian medical registration requirements.'
            ],
            [
                'q' => 'Who needs to take FMGE?',
                'a' => 'Eligible Indian citizens and OCI candidates with primary medical qualifications from outside India may be required to take the examination, subject to applicable exemptions and rules.'
            ],
            [
                'q' => 'Who conducts FMGE?',
                'a' => 'The National Board of Examinations in Medical Sciences conducts FMGE.'
            ],
            [
                'q' => 'Can foreign MBBS graduates practice in India immediately?',
                'a' => 'They must first satisfy the applicable screening, internship and medical registration requirements.'
            ]
        ],

        'official' => 'https://natboard.edu.in/'
    ],

    'ayush-neet-pg' => [
        'title' => 'AIAPGET',
        'short' => 'AYUSH NEET PG Guide',
        'subtitle' => 'All India AYUSH Post Graduate Entrance Test',
        'keyword' => 'AIAPGET',
        'secondary' => 'AYUSH PG entrance',
        'type' => 'AYUSH Entrance Exam',
        'initial' => 'AY',
        'color' => 'bg-teal-100 text-teal-700',

        'intro' => 'AIAPGET is an entrance examination for eligible candidates seeking admission to postgraduate AYUSH courses. Explore the examination process, eligibility, subjects and preparation guidance.',

        'overview' => 'The All India AYUSH Post Graduate Entrance Test is conducted for admission to eligible postgraduate courses in Ayurveda, Homoeopathy, Siddha and Unani systems of medicine, according to the applicable admission framework.',

        'purpose' => [
            'Admission to postgraduate AYUSH programmes.',
            'Assessment of undergraduate AYUSH knowledge.',
            'Participation in the prescribed counselling process.',
            'Allocation of postgraduate seats based on merit and eligibility.'
        ],

        'eligibility' => [
            'A recognized undergraduate qualification in the relevant AYUSH discipline.',
            'Completion of the applicable compulsory internship.',
            'Valid registration with the relevant professional authority, where required.',
            'Fulfilment of the eligibility criteria in the current information bulletin.'
        ],

        'process' => [
            'Visit the official examination authority website.',
            'Read the latest AIAPGET information bulletin.',
            'Complete online registration.',
            'Enter educational and personal details.',
            'Upload the required documents.',
            'Pay the prescribed examination fee.',
            'Download the admit card.',
            'Appear for the examination.',
            'Check the result and participate in counselling.'
        ],

        'documents' => [
            'BAMS, BHMS, BUMS or BSMS qualification certificate, as applicable',
            'Academic marksheets',
            'Internship completion certificate',
            'Professional registration certificate',
            'Identity proof',
            'Photograph and signature',
            'Category certificate, if applicable'
        ],

        'preparation' => [
            'Understand the syllabus for your AYUSH discipline.',
            'Revise core undergraduate subjects.',
            'Focus on important clinical concepts.',
            'Create subject-wise revision notes.',
            'Practice previous examination questions.',
            'Take mock tests regularly.',
            'Follow the official examination pattern.'
        ],

        'career' => [
            'AYUSH Medical Officer',
            'Ayurveda Specialist',
            'Homoeopathy Specialist',
            'Unani Medical Professional',
            'Siddha Medical Professional'
        ],

        'faqs' => [
            [
                'q' => 'What is AIAPGET?',
                'a' => 'AIAPGET is an entrance examination for admission to eligible postgraduate AYUSH programmes.'
            ],
            [
                'q' => 'Which courses are covered under AIAPGET?',
                'a' => 'The examination covers Ayurveda, Homoeopathy, Siddha and Unani disciplines.'
            ],
            [
                'q' => 'Who is eligible for AIAPGET?',
                'a' => 'Candidates with relevant recognized undergraduate AYUSH qualifications who satisfy internship and registration conditions may apply.'
            ],
            [
                'q' => 'Is counselling conducted after AIAPGET?',
                'a' => 'Eligible candidates participate in the applicable counselling process according to the current admission notification.'
            ]
        ],

        'official' => 'https://exams.nta.nic.in/aiapget/'
    ],

    'pharmacist-registration' => [
        'title' => 'Pharmacist Registration',
        'short' => 'Pharmacy Registration Guide',
        'subtitle' => 'Complete Guide to Pharmacy Council Registration in India',
        'keyword' => 'pharmacy council registration',
        'secondary' => 'PCI registration',
        'type' => 'Professional Registration',
        'initial' => 'PR',
        'color' => 'bg-pink-100 text-pink-700',

        'intro' => 'Pharmacist registration is an important professional requirement for eligible pharmacy graduates and diploma holders who want to work as registered pharmacists in India.',

        'overview' => 'Pharmacy registration is generally handled by the respective State Pharmacy Council under the applicable provisions of pharmacy regulations. The Pharmacy Council of India provides regulatory information and guidance related to pharmacy education and professional standards.',

        'purpose' => [
            'Obtain professional pharmacist registration.',
            'Meet applicable requirements for pharmacy practice.',
            'Support employment in eligible pharmacy positions.',
            'Maintain registration details and renewal where applicable.'
        ],

        'eligibility' => [
            'Candidates must possess an eligible pharmacy qualification such as D.Pharm or B.Pharm.',
            'The qualification must meet applicable recognition requirements.',
            'Candidates must satisfy the concerned State Pharmacy Council rules.',
            'Additional conditions may apply to registration and qualification verification.'
        ],

        'process' => [
            'Identify your relevant State Pharmacy Council.',
            'Visit the official council website.',
            'Select new pharmacist registration.',
            'Complete the application form.',
            'Provide educational and personal details.',
            'Upload the required documents.',
            'Pay the prescribed registration fee.',
            'Complete document verification.',
            'Receive the registration certificate after approval.'
        ],

        'documents' => [
            'D.Pharm or B.Pharm certificate',
            'Academic marksheets',
            'Practical training certificate, where applicable',
            'Identity proof',
            'Address proof',
            'Passport-size photographs',
            'Other documents requested by the State Pharmacy Council'
        ],

        'preparation' => [
            'Verify your pharmacy qualification recognition.',
            'Check the registration rules of your state.',
            'Keep all educational certificates ready.',
            'Check the required application fee.',
            'Ensure that the details in the application are correct.',
            'Keep your registration acknowledgement for future reference.'
        ],

        'career' => [
            'Registered Pharmacist',
            'Hospital Pharmacist',
            'Community Pharmacist',
            'Clinical Pharmacist',
            'Pharmacy Store Professional'
        ],

        'faqs' => [
            [
                'q' => 'What is pharmacist registration?',
                'a' => 'It is professional registration with the relevant State Pharmacy Council for eligible pharmacy professionals.'
            ],
            [
                'q' => 'Who can apply for pharmacy registration?',
                'a' => 'Eligible D.Pharm and B.Pharm candidates may apply subject to the applicable recognition and council requirements.'
            ],
            [
                'q' => 'Is PCI registration the same as State Pharmacy Council registration?',
                'a' => 'PCI is the national regulatory body for pharmacy education and professional standards. Individual pharmacist registration is generally processed through the relevant State Pharmacy Council.'
            ],
            [
                'q' => 'Can I apply for pharmacist registration online?',
                'a' => 'Some State Pharmacy Councils provide online registration facilities. Check your respective state council portal.'
            ]
        ],

        'official' => 'https://www.pci.nic.in/'
    ],

];

$selectedExamSlug = $selectedExamSlug ?? null;

$selectedExam = $selectedExamSlug
    ? ($examPages[$selectedExamSlug] ?? null)
    : null;

$search = strtolower(trim(request('search', '')));

$filteredExams = collect($examPages)->filter(function ($exam) use ($search) {

    if (!$search) {
        return true;
    }

    return str_contains(strtolower($exam['title']), $search)
        || str_contains(strtolower($exam['keyword']), $search)
        || str_contains(strtolower($exam['type']), $search)
        || str_contains(strtolower($exam['secondary']), $search);

});

@endphp


{{-- ==========================================================
    INNER EXAM DETAILS PAGE
========================================================== --}}

@if($selectedExamSlug)

    @if($selectedExam)

        {{-- INNER HERO BANNER --}}

       {{-- INNER PAGE HERO BANNER --}}

<section class="relative flex min-h-[315px] items-center justify-center overflow-hidden bg-gradient-to-r from-[#46577F] to-[#3DB49C] px-5 py-16">

    {{-- Decorative Circles --}}
    <div class="absolute -left-16 -top-20 h-72 w-72 rounded-full bg-white/10"></div>

    <div class="absolute -right-16 -top-20 h-72 w-72 rounded-full bg-white/10"></div>

    {{-- Banner Content --}}
    <div class="relative z-10 mx-auto max-w-6xl text-center">

<p class="text-[12px] font-extrabold uppercase tracking-[0.2em] text-white/85">
                VAIDYOG EXAMS & LICENSING
        </p>

<h1 class="mt-4 text-[34px] font-extrabold leading-tight text-white">
                {{ $selectedExam['title'] }}
        </h1>

<p class="mt-4 text-[16px] font-medium text-white/90">
                {{ $selectedExam['subtitle'] }}
        </p>

    </div>

</section>


        {{-- BREADCRUMB --}}

        <section class="border-b border-gray-100 bg-white">

            <div class="mx-auto max-w-7xl px-5 py-4 md:px-8">

                <div class="flex flex-wrap items-center gap-2 text-xs text-gray-500">

                    <a href="{{ url('/') }}" class="hover:text-[#008F86]">Home</a>

                    <i class="fa-solid fa-chevron-right text-[9px]"></i>

                    <a href="{{ route('exams') }}" class="hover:text-[#008F86]">Exams & Licensing</a>

                    <i class="fa-solid fa-chevron-right text-[9px]"></i>

                    <span class="font-semibold text-[#34466F]">{{ $selectedExam['title'] }}</span>

                </div>

            </div>

        </section>


        {{-- DETAILS CONTENT --}}

        <section class="bg-slate-50 py-10 md:py-14">

            <div class="mx-auto max-w-7xl px-5 md:px-8">

                <div class="grid grid-cols-1 items-start gap-7 lg:grid-cols-12">

                    {{-- LEFT CONTENT --}}

                    <div class="space-y-6 lg:col-span-8">


                        {{-- OVERVIEW --}}

                        <div id="overview" class="scroll-mt-24 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-5 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#e7f6f3] text-lg text-[#008F86]">

                                    <i class="fa-solid fa-book-open"></i>

                                </div>

                                <div>

                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Introduction</p>

                                    <h2 class="text-xl font-extrabold text-[#253452]">Overview</h2>

                                </div>

                            </div>

                            <p class="text-sm leading-8 text-gray-600">

                                {{ $selectedExam['overview'] }}

                            </p>

                        </div>


                        {{-- PURPOSE --}}

                        <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-5 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-lg text-[#46577F]">

                                    <i class="fa-solid fa-bullseye"></i>

                                </div>

                                <h2 class="text-xl font-extrabold text-[#253452]">Purpose & Importance</h2>

                            </div>

                            <div class="space-y-3">

                                @foreach($selectedExam['purpose'] as $item)

                                    <div class="flex items-start gap-3">

                                        <i class="fa-solid fa-circle-check mt-1 text-sm text-[#3DB49C]"></i>

                                        <p class="text-sm leading-6 text-gray-600">{{ $item }}</p>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- ELIGIBILITY --}}

                        <div id="eligibility" class="scroll-mt-24 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-5 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-lg text-purple-600">

                                    <i class="fa-solid fa-user-graduate"></i>

                                </div>

                                <div>

                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Candidate Requirements</p>

                                    <h2 class="text-xl font-extrabold text-[#253452]">Eligibility Criteria</h2>

                                </div>

                            </div>

                            <div class="space-y-4">

                                @foreach($selectedExam['eligibility'] as $index => $item)

                                    <div class="flex items-start gap-3">

                                        <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-[#e9f6f4] text-xs font-bold text-[#008F86]">

                                            {{ $index + 1 }}

                                        </span>

                                        <p class="pt-1 text-sm leading-6 text-gray-600">{{ $item }}</p>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- APPLICATION PROCESS --}}

                        <div id="process" class="scroll-mt-24 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-6 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-50 text-lg text-green-600">

                                    <i class="fa-solid fa-file-signature"></i>

                                </div>

                                <div>

                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Step-by-Step Guide</p>

                                    <h2 class="text-xl font-extrabold text-[#253452]">Application Process</h2>

                                </div>

                            </div>

                            <div class="relative space-y-5">

                                @foreach($selectedExam['process'] as $index => $item)

                                    <div class="relative flex items-start gap-4">

                                        <div class="relative z-10 flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-[#46577F] to-[#3DB49C] text-xs font-extrabold text-white shadow-sm">

                                            {{ $index + 1 }}

                                        </div>

                                        <p class="pt-1.5 text-sm leading-6 text-gray-600">{{ $item }}</p>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- DOCUMENTS --}}

                        <div id="documents" class="scroll-mt-24 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-5 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-lg text-orange-500">

                                    <i class="fa-solid fa-folder-open"></i>

                                </div>

                                <div>

                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Before Applying</p>

                                    <h2 class="text-xl font-extrabold text-[#253452]">Required Documents</h2>

                                </div>

                            </div>

                            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">

                                @foreach($selectedExam['documents'] as $item)

                                    <div class="flex items-start gap-3 rounded-xl border border-gray-100 bg-slate-50 p-3">

                                        <i class="fa-regular fa-file-lines mt-0.5 text-[#008F86]"></i>

                                        <span class="text-xs font-medium leading-5 text-gray-600">{{ $item }}</span>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- PREPARATION --}}

                        <div id="preparation" class="scroll-mt-24 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-5 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-lg text-indigo-600">

                                    <i class="fa-solid fa-book-bookmark"></i>

                                </div>

                                <div>

                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Study Guidance</p>

                                    <h2 class="text-xl font-extrabold text-[#253452]">Preparation Guide</h2>

                                </div>

                            </div>

                            <div class="space-y-3">

                                @foreach($selectedExam['preparation'] as $item)

                                    <div class="flex items-start gap-3">

                                        <i class="fa-solid fa-check mt-1 text-xs text-[#3DB49C]"></i>

                                        <p class="text-sm leading-6 text-gray-600">{{ $item }}</p>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- CAREER OPPORTUNITIES --}}

                        <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-5 flex items-center gap-3">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-teal-50 text-lg text-[#008F86]">

                                    <i class="fa-solid fa-briefcase"></i>

                                </div>

                                <div>

                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Career Opportunities</p>

                                    <h2 class="text-xl font-extrabold text-[#253452]">Career Options</h2>

                                </div>

                            </div>

                            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">

                                @foreach($selectedExam['career'] as $item)

                                    <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">

                                        <i class="fa-solid fa-arrow-right text-xs text-[#008F86]"></i>

                                        <span class="text-sm font-semibold text-[#34466F]">{{ $item }}</span>

                                    </div>

                                @endforeach

                            </div>

                        </div>


                        {{-- FAQ --}}

                        <div id="faqs" class="scroll-mt-24 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm md:p-7">

                            <div class="mb-6">

                                <p class="text-[11px] font-bold uppercase tracking-wider text-[#008F86]">Common Questions</p>

                                <h2 class="mt-1 text-xl font-extrabold text-[#253452]">Frequently Asked Questions</h2>

                            </div>

                            <div class="space-y-3">

                                @foreach($selectedExam['faqs'] as $index => $faq)

                                    <details class="group rounded-xl border border-gray-200 bg-white p-4" {{ $index === 0 ? 'open' : '' }}>

                                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-sm font-bold text-[#34466F]">

                                            {{ $faq['q'] }}

                                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#e9f6f4] text-[#008F86] transition group-open:rotate-180">

                                                <i class="fa-solid fa-chevron-down text-xs"></i>

                                            </span>

                                        </summary>

                                        <p class="mt-4 border-t border-gray-100 pt-3 text-sm leading-7 text-gray-600">

                                            {{ $faq['a'] }}

                                        </p>

                                    </details>

                                @endforeach

                            </div>

                        </div>


                        {{-- DISCLAIMER --}}

                        <div class="rounded-xl border border-amber-200 bg-amber-50 p-5">

                            <div class="flex items-start gap-3">

                                <i class="fa-solid fa-circle-info mt-1 text-amber-600"></i>

                                <div>

                                    <h3 class="text-sm font-bold text-[#34466F]">Important Information</h3>

                                    <p class="mt-2 text-xs leading-6 text-gray-600">

                                        Eligibility conditions, examination dates, fees, documents and application procedures may change. This page is intended as a general educational guide. Always verify the latest requirements through the official examination authority or relevant professional council before applying.

                                    </p>

                                </div>

                            </div>

                        </div>


                    </div>


                    {{-- RIGHT SIDEBAR --}}

                    <aside class="space-y-5 lg:sticky lg:top-24 lg:col-span-4">


                        {{-- QUICK NAVIGATION --}}

                        <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                            <h3 class="mb-4 text-base font-extrabold text-[#253452]">

                                On This Page

                            </h3>

                            <div class="space-y-1">

                                @foreach([
                                    ['overview', 'Overview', 'fa-book-open'],
                                    ['eligibility', 'Eligibility Criteria', 'fa-user-graduate'],
                                    ['process', 'Application Process', 'fa-file-signature'],
                                    ['documents', 'Required Documents', 'fa-folder-open'],
                                    ['preparation', 'Preparation Guide', 'fa-book'],
                                    ['faqs', 'FAQs', 'fa-circle-question']
                                ] as $nav)

                                    <a href="#{{ $nav[0] }}"
                                       class="flex items-center gap-3 rounded-lg px-3 py-3 text-xs font-semibold text-gray-600 transition hover:bg-[#e9f6f4] hover:text-[#008F86]">

                                        <i class="fa-solid {{ $nav[2] }} w-4 text-[#008F86]"></i>

                                        {{ $nav[1] }}

                                        <i class="fa-solid fa-arrow-right ml-auto text-[10px]"></i>

                                    </a>

                                @endforeach

                            </div>

                        </div>


                        {{-- OFFICIAL WEBSITE CTA --}}

                        <div class="overflow-hidden rounded-2xl bg-gradient-to-br from-[#46577F] to-[#3DB49C] p-6 text-white shadow-md">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/15 text-xl">

                                <i class="fa-solid fa-globe"></i>

                            </div>

                            <h3 class="mt-5 text-lg font-extrabold">

                                Official Information

                            </h3>

                            <p class="mt-2 text-xs leading-6 text-white/85">

                                Check official notifications, eligibility requirements and application updates from the concerned authority.

                            </p>

                            <a href="#"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="mt-5 flex items-center justify-center gap-2 rounded-lg bg-white px-4 py-3 text-sm font-bold text-[#34466F] transition hover:bg-gray-100">

                                Visit Official Website

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            </a>

                        </div>


                        {{-- RELATED EXAMS --}}

                        <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                            <h3 class="mb-4 text-base font-extrabold text-[#253452]">

                                Explore Other Guides

                            </h3>

                            <div class="space-y-3">

                                @foreach($examPages as $slug => $exam)

                                    @if($slug !== $selectedExamSlug)

                                        <a href="{{ route('exams.show', ['slug' => $slug]) }}"
                                           class="group flex items-center gap-3 rounded-xl border border-gray-100 p-3 transition hover:border-[#3DB49C] hover:bg-slate-50">

                                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg {{ $exam['color'] }} text-xs font-extrabold">

                                                {{ $exam['initial'] }}

                                            </div>

                                            <div class="min-w-0 flex-1">

                                                <h4 class="text-xs font-bold text-[#34466F] transition group-hover:text-[#008F86]">

                                                    {{ $exam['title'] }}

                                                </h4>

                                                <p class="mt-1 text-[10px] text-gray-400">

                                                    {{ $exam['type'] }}

                                                </p>

                                            </div>

                                            <i class="fa-solid fa-chevron-right text-xs text-gray-400"></i>

                                        </a>

                                    @endif

                                @endforeach

                            </div>

                        </div>


                        {{-- CAREER CTA --}}

                        <div class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-[#e9f6f4] text-lg text-[#008F86]">

                                    <i class="fa-solid fa-user-doctor"></i>

                                </div>

                                <h3 class="text-sm font-extrabold text-[#253452]">

                                    Explore Healthcare Jobs

                                </h3>

                            </div>

                            <p class="mt-3 text-xs leading-6 text-gray-500">

                                Discover healthcare career opportunities across India.

                            </p>

                            <a href="{{ url('/careers') }}"
                               class="mt-4 block rounded-lg bg-[#008F86] px-4 py-3 text-center text-xs font-bold text-white transition hover:bg-[#34466F]">

                                Explore Jobs

                                <i class="fa-solid fa-arrow-right ml-1"></i>

                            </a>

                        </div>


                    </aside>

                </div>

            </div>

        </section>


    @else

        {{-- INVALID INNER URL --}}

        <section class="bg-slate-50 px-5 py-24 text-center">

            <div class="mx-auto max-w-xl">

                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-[#e9f6f4] text-2xl text-[#008F86]">

                    <i class="fa-solid fa-file-circle-question"></i>

                </div>

                <h1 class="mt-5 text-2xl font-extrabold text-[#34466F]">

                    Guide Not Found

                </h1>

                <p class="mt-3 text-sm leading-7 text-gray-500">

                    The exam or licensing guide you are looking for is unavailable.

                </p>

                <a href="{{ route('exams') }}"
                   class="mt-6 inline-block rounded-lg bg-[#008F86] px-6 py-3 text-sm font-bold text-white">

                    Browse All Guides

                </a>

            </div>

        </section>

    @endif


@else

{{-- ==========================================================
    MAIN EXAMS & LICENSING PAGE
========================================================== --}}


{{-- HERO BANNER --}}

<section class="relative overflow-hidden bg-[#26334f]">

    <div class="absolute inset-0">

        <img
            src="{{ asset('images/carrers-banner.webp') }}"
            alt="Healthcare exams and licensing"
            class="h-full w-full object-cover object-center"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-[#26334f]/75 to-[#008F86]/50"></div>

    </div>

    <div class="relative mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-5 py-12 md:px-8 md:py-16 lg:grid-cols-2">

        {{-- LEFT BANNER CONTENT --}}

        <div class="max-w-2xl">

            <span class="inline-flex items-center gap-3 rounded-full bg-white px-4 py-3 text-xs font-extrabold tracking-wide text-[#008F86]">

                <span class="h-2 w-2.5 rounded-full bg-[#00A69A]"></span>

                VAIDYOG EXAMS & LICENSING

            </span>

            <h1 class="mt-6 text-[32px] font-extrabold leading-tight text-white sm:text-5xl lg:text-[43px]">

                Explore Healthcare

                <span class="text-[#00B5A5]">Exams & Licensing</span>

                Guides

            </h1>

            <p class="mt-5 max-w-xl text-sm leading-7 text-[#d5d5eb] md:text-base">

                Find complete information about healthcare entrance examinations, professional registrations and medical licensing in India. Explore eligibility requirements, application procedures and preparation guidance.

            </p>

            <div class="mt-7 flex flex-wrap gap-3">

                <a href="#exam-guides"
                   class="rounded-lg bg-[#00A69A] px-5 py-3 text-sm font-bold text-white shadow-lg transition hover:-translate-y-1 hover:bg-[#008F86]">

                    Explore All Guides

                    <i class="fa-solid fa-arrow-right ml-2"></i>

                </a>

                <a href="#exam-guides"
                   class="rounded-lg border border-white/70 bg-white px-5 py-3 text-sm font-bold text-[#34466F] transition hover:-translate-y-1 hover:bg-gray-100">

                    Browse Exams

                </a>

            </div>


            {{-- STATS --}}

            <div class="mt-9 flex flex-wrap gap-9">

                <div>

                    <p class="text-2xl font-extrabold text-[#00B5A5]">06+</p>

                    <p class="mt-1 text-xs font-medium text-white">Exam & Licensing Guides</p>

                </div>

                <div>

                    <p class="text-2xl font-extrabold text-[#00B5A5]">04+</p>

                    <p class="mt-1 text-xs font-medium text-white">Medical Exam Categories</p>

                </div>

                <div>

                    <p class="text-2xl font-extrabold text-[#00B5A5]">India</p>

                    <p class="mt-1 text-xs font-medium text-white">Healthcare Career Focus</p>

                </div>

            </div>

        </div>


        {{-- RIGHT BANNER CARD --}}

        <div class="ml-auto w-full max-w-[490px] rounded-2xl border border-white/60 bg-white/95 p-5 shadow-2xl backdrop-blur-sm">

            <div class="mb-5 flex items-center justify-between gap-3">

                <div>

                    <p class="text-xs font-medium text-[#71829e]">Healthcare Education Resources</p>

                    <h2 class="mt-1 text-xl font-extrabold text-[#172033]">

                        Explore Popular Guides

                    </h2>

                </div>

                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#e9f6f4] text-xl text-[#008F86]">

                    <i class="fa-solid fa-graduation-cap"></i>

                </div>

            </div>

            <div class="space-y-2">

                @foreach(['aiims-norcet-guide', 'neet-pg-guide', 'fmge-guide'] as $slug)

                    <a href="{{ route('exams.show', ['slug' => $slug]) }}"
                       class="group flex items-center gap-3 rounded-xl border border-gray-100 bg-slate-50 p-3 transition hover:-translate-y-0.5 hover:border-[#3DB49C] hover:bg-white hover:shadow-md">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg {{ $examPages[$slug]['color'] }} text-xs font-extrabold">

                            {{ $examPages[$slug]['initial'] }}

                        </div>

                        <div class="min-w-0 flex-1">

                            <h3 class="text-sm font-extrabold text-[#253044]">

                                {{ $examPages[$slug]['title'] }}

                            </h3>

                            <p class="mt-1 text-xs text-[#71829e]">

                                {{ $examPages[$slug]['type'] }}

                            </p>

                        </div>

                        <i class="fa-solid fa-arrow-right text-sm text-[#008F86] transition group-hover:translate-x-1"></i>

                    </a>

                @endforeach

            </div>

            <a href="#exam-guides"
               class="mt-5 inline-flex items-center gap-2 text-xs font-bold text-[#008F86] hover:text-[#34466F]">

                View All Exam Guides

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>


{{-- SEARCH SECTION --}}

<section class="relative z-10 mx-auto -mt-7 max-w-7xl px-5 md:px-8">

    <form action="{{ route('exams') }}" method="GET"
          class="flex flex-col gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-lg sm:flex-row">

        <div class="relative flex-1">

            <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search exams, registration or licensing..."
                class="w-full rounded-lg border border-gray-200 py-3 pl-11 pr-4 text-sm outline-none transition focus:border-[#00A69A] focus:ring-2 focus:ring-[#00A69A]/10"
            >

        </div>

        <button type="submit"
                class="rounded-lg bg-[#008F86] px-8 py-3 text-sm font-bold text-white transition hover:bg-[#34466F]">

            Search Guides

        </button>

    </form>

</section>


{{-- MAIN EXAM CARDS --}}

<section id="exam-guides" class="bg-slate-50 py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-5 md:px-8">


        {{-- SECTION TITLE --}}

        <div class="mb-8 flex flex-wrap items-end justify-between gap-4">

            <div>

                <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#008F86]">

                    EXPLORE YOUR NEXT STEP

                </p>

                <h2 class="mt-2 text-2xl font-extrabold text-[#253452] md:text-3xl">

                    Exams & Licensing Guides

                </h2>

                <p class="mt-3 max-w-2xl text-sm leading-7 text-gray-500">

                    Explore examination and registration guides for medical, nursing, pharmacy and AYUSH healthcare professionals.

                </p>

            </div>

            <span class="rounded-full bg-[#e9f6f4] px-4 py-2 text-xs font-bold text-[#008F86]">

                {{ $filteredExams->count() }} Guides Available

            </span>

        </div>


        {{-- EXAM CARD GRID --}}

        @if($filteredExams->isNotEmpty())

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($filteredExams as $slug => $exam)

                    <a href="{{ route('exams.show', ['slug' => $slug]) }}"
                       class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#3DB49C] hover:shadow-xl md:p-6">


                        {{-- TOP LINE --}}

                        <div class="absolute left-0 top-0 h-1 w-full bg-gradient-to-r from-[#46577F] to-[#3DB49C]"></div>


                        {{-- CARD HEADER --}}

                        <div class="flex items-start justify-between gap-3">

                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl {{ $exam['color'] }} text-sm font-extrabold">

                                {{ $exam['initial'] }}

                            </div>

                            <span class="rounded-full bg-slate-100 px-3 py-1.5 text-[10px] font-bold text-[#71829e]">

                                {{ $exam['type'] }}

                            </span>

                        </div>


                        {{-- TITLE --}}

                        <h3 class="mt-5 text-lg font-extrabold text-[#253452] transition group-hover:text-[#008F86]">

                            {{ $exam['title'] }}

                        </h3>

                        <p class="mt-2 text-xs font-semibold leading-5 text-[#008F86]">

                            {{ $exam['subtitle'] }}

                        </p>


                        {{-- DESCRIPTION --}}

                        <p class="mt-3 text-sm leading-7 text-gray-500">

                            {{ $exam['intro'] }}

                        </p>


                        {{-- KEYWORDS --}}

                        <div class="mt-5 flex flex-wrap gap-2">

                            @foreach(explode(',', $exam['secondary']) as $keyword)

                                <span class="rounded-md bg-slate-100 px-2.5 py-1.5 text-[10px] font-medium text-gray-500">

                                    {{ trim($keyword) }}

                                </span>

                            @endforeach

                        </div>


                        {{-- FOOTER --}}

                        <div class="mt-auto flex items-center justify-between border-t border-gray-100 pt-5 mt-5">

                            <span class="text-xs font-bold text-[#008F86]">

                                Explore Guide

                            </span>

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#e9f6f4] text-[#008F86] transition group-hover:bg-[#008F86] group-hover:text-white">

                                <i class="fa-solid fa-arrow-right text-xs"></i>

                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

        @else

            {{-- NO RESULTS --}}

            <div class="rounded-2xl border border-gray-200 bg-white px-5 py-16 text-center shadow-sm">

                <i class="fa-solid fa-magnifying-glass mb-4 text-3xl text-gray-300"></i>

                <h3 class="text-xl font-extrabold text-[#34466F]">

                    No Guides Found

                </h3>

                <p class="mt-2 text-sm text-gray-500">

                    Try searching with a different exam or registration keyword.

                </p>

                <a href="{{ route('exams') }}"
                   class="mt-5 inline-block rounded-lg bg-[#008F86] px-6 py-3 text-sm font-bold text-white hover:bg-[#34466F]">

                    View All Guides

                </a>

            </div>

        @endif


    </div>

</section>


{{-- WHY THIS SECTION --}}

<section class="bg-white py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-5 md:px-8">

        <div class="mb-9 text-center">

            <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#008F86]">

                YOUR CAREER RESOURCE

            </p>

            <h2 class="mt-2 text-2xl font-extrabold text-[#253452] md:text-3xl">

                Everything You Need to Know

            </h2>

            <p class="mx-auto mt-3 max-w-2xl text-sm leading-7 text-gray-500">

                Understand important healthcare examinations and professional registration processes with easy-to-follow guides.

            </p>

        </div>


        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

            @foreach([
                ['fa-user-check', 'Eligibility Details', 'Understand educational qualifications and registration requirements.'],
                ['fa-file-lines', 'Application Process', 'Learn the application steps and documents required.'],
                ['fa-book-open', 'Exam Preparation', 'Explore syllabus areas and useful preparation strategies.'],
                ['fa-briefcase', 'Career Opportunities', 'Understand the career paths associated with your qualification.']
            ] as $feature)

                <div class="rounded-2xl border border-gray-100 bg-slate-50 p-6 text-center transition hover:-translate-y-1 hover:border-[#3DB49C] hover:shadow-lg">

                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-[#e9f6f4] text-xl text-[#008F86]">

                        <i class="fa-solid {{ $feature[0] }}"></i>

                    </div>

                    <h3 class="mt-5 text-base font-extrabold text-[#253452]">

                        {{ $feature[1] }}

                    </h3>

                    <p class="mt-2 text-xs leading-6 text-gray-500">

                        {{ $feature[2] }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- BOTTOM CTA --}}

<section class="bg-slate-50 px-5 py-12 md:px-8 md:py-16">

    <div class="relative mx-auto max-w-7xl overflow-hidden rounded-2xl bg-gradient-to-r from-[#46577F] to-[#3DB49C] px-6 py-10 text-center shadow-lg md:px-12 md:py-14">

        <div class="absolute -right-16 -top-24 h-64 w-64 rounded-full bg-white/10"></div>

        <div class="absolute -bottom-24 -left-16 h-64 w-64 rounded-full bg-white/10"></div>

        <div class="relative">

            <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-white/80">

                BUILD YOUR HEALTHCARE CAREER

            </span>

            <h2 class="mt-4 text-2xl font-extrabold text-white md:text-3xl">

                Ready for Your Next Career Step?

            </h2>

            <p class="mx-auto mt-3 max-w-2xl text-sm leading-7 text-white/85">

                Explore healthcare exams, complete professional registrations and discover career opportunities across India.

            </p>

            <div class="mt-7 flex flex-wrap justify-center gap-3">

                <a href="{{ url('/careers') }}"
                   class="rounded-lg bg-white px-6 py-3 text-sm font-bold text-[#34466F] transition hover:-translate-y-1 hover:bg-gray-100">

                    Explore Healthcare Jobs

                    <i class="fa-solid fa-arrow-right ml-1"></i>

                </a>

                <a href="#exam-guides"
                   class="rounded-lg border border-white/60 px-6 py-3 text-sm font-bold text-white transition hover:bg-white/10">

                    Browse Exam Guides

                </a>

            </div>

        </div>

    </div>

</section>


@endif

@endsection