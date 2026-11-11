@extends('layouts.app')

@section('title', 'Resume & Interview Guides | Vaidyog')

@section('description', 'Explore professional healthcare resume formats, doctor CV templates, nursing interview questions and career preparation guides.')

@section('content')

@php

$guides = [

    [
        'slug' => 'staff-nurse-resume-format',
        'category' => 'Resume Guide',
        'title' => 'Staff Nurse Resume Format',
        'keyword' => 'staff nurse resume format',
        'tag' => 'Nursing',
        'icon' => 'fa-file-medical',
        'color' => 'from-cyan-600 to-teal-500',
        'description' => 'Learn how to present your nursing qualification, clinical experience, patient-care competencies and professional certifications in a structured resume.',
        'intro' => 'A professional staff nurse resume should clearly communicate your nursing education, clinical exposure, employment history and patient-care competencies. Organise your information so that hospital recruiters can quickly understand your qualifications and suitability for the position.',
        'highlights' => [
            'Professional summary and contact details',
            'GNM, ANM or B.Sc. Nursing qualifications',
            'Clinical rotations and hospital experience',
            'Patient-care and nursing competencies',
            'Professional registration and certifications'
        ],
        'sections' => [
            ['title' => 'Personal and Professional Details', 'text' => 'Include your full name, phone number, professional email address and location. Add a concise professional summary describing your nursing qualification, experience and career objective.'],
            ['title' => 'Educational Qualifications', 'text' => 'Mention your GNM, ANM or B.Sc. Nursing qualification, college, university and completion year. Include applicable nursing registration information.'],
            ['title' => 'Clinical Experience', 'text' => 'Describe your hospital employment, internship and clinical postings. Mention departments, responsibilities and the type of patient-care exposure you received.'],
            ['title' => 'Nursing Skills', 'text' => 'Highlight relevant competencies such as patient assessment, vital-sign monitoring, nursing documentation, infection prevention and medication administration.'],
            ['title' => 'Certifications and Achievements', 'text' => 'Include relevant professional training, certifications, workshops and achievements. Ensure that all details are accurate and verifiable.']
        ],
        'steps' => [
            'Choose a clean and professional resume format.',
            'Add accurate contact information and a concise summary.',
            'Include your nursing education and registration details.',
            'Describe clinical experience and responsibilities.',
            'Highlight relevant skills and certifications.',
            'Proofread the resume before submitting it.'
        ]
    ],

    [
        'slug' => 'doctor-cv-format',
        'category' => 'Resume Guide',
        'title' => 'Doctor CV Format India',
        'keyword' => 'doctor CV format India',
        'tag' => 'Doctors',
        'icon' => 'fa-user-doctor',
        'color' => 'from-blue-700 to-teal-600',
        'description' => 'Understand how to structure a doctor CV with medical education, internship, clinical appointments, specialisation and professional registration.',
        'intro' => 'A doctor CV should present medical qualifications, clinical experience, professional registration and areas of practice in a clear and credible format. Give recruiters a structured overview of your medical background and relevant professional achievements.',
        'highlights' => [
            'Medical professional summary',
            'MBBS and postgraduate qualifications',
            'Internship and clinical appointments',
            'Specialisation and clinical experience',
            'Medical council registration'
        ],
        'sections' => [
            ['title' => 'Professional Profile', 'text' => 'Introduce your medical background, qualifications, clinical experience and intended speciality or position. Keep the introduction concise and relevant.'],
            ['title' => 'Medical Qualifications', 'text' => 'List MBBS, MD, MS or other applicable medical qualifications. Mention the institution, university and year of completion.'],
            ['title' => 'Internship and Clinical Experience', 'text' => 'Include your internship, residency and hospital appointments. Mention departments, dates and actual professional responsibilities.'],
            ['title' => 'Specialisations and Clinical Skills', 'text' => 'Highlight your speciality, relevant clinical competencies and areas of practice. Include only procedures and skills within your training and professional scope.'],
            ['title' => 'Registration and Achievements', 'text' => 'Include applicable medical council registration, research, publications, conferences, certifications and professional achievements.']
        ],
        'steps' => [
            'Prepare a concise medical professional profile.',
            'List medical qualifications and specialisations.',
            'Include internship and hospital experience.',
            'Mention applicable professional registration.',
            'Add relevant certifications and achievements.',
            'Review all dates and qualifications for accuracy.'
        ]
    ],

    [
        'slug' => 'bams-doctor-resume',
        'category' => 'Resume Guide',
        'title' => 'BAMS Doctor Resume',
        'keyword' => 'BAMS doctor resume',
        'tag' => 'Ayurveda',
        'icon' => 'fa-leaf',
        'color' => 'from-emerald-600 to-teal-500',
        'description' => 'Create a professional BAMS resume highlighting Ayurvedic education, clinical training, patient consultation and professional registration.',
        'intro' => 'A BAMS doctor resume should communicate your Ayurvedic medical education, internship experience, clinical exposure and relevant competencies. Organise your academic and practical experience to match the healthcare position you are targeting.',
        'highlights' => [
            'BAMS qualification',
            'Clinical internship and training',
            'Ayurvedic medical knowledge',
            'Patient consultation experience',
            'Professional registration'
        ],
        'sections' => [
            ['title' => 'Professional Summary', 'text' => 'Introduce your BAMS qualification, clinical interests, internship experience and career objective.'],
            ['title' => 'Educational Background', 'text' => 'Mention your Bachelor of Ayurvedic Medicine and Surgery qualification, institution, university and year of completion.'],
            ['title' => 'Internship and Clinical Experience', 'text' => 'Describe your compulsory internship, hospital exposure and clinical postings. Include the departments and responsibilities you completed.'],
            ['title' => 'Clinical Skills', 'text' => 'Highlight relevant knowledge in patient history taking, assessment, documentation, consultation and patient communication.'],
            ['title' => 'Registration and Certifications', 'text' => 'Include applicable professional registration, workshops, additional training and relevant achievements.']
        ],
        'steps' => [
            'Write a professional introduction.',
            'Include your BAMS educational details.',
            'Describe internship and clinical experience.',
            'Highlight relevant healthcare competencies.',
            'Add registration and certifications.',
            'Review your resume before submission.'
        ]
    ],

    [
        'slug' => 'pharmacist-resume',
        'category' => 'Resume Guide',
        'title' => 'Pharmacist Resume Format',
        'keyword' => 'pharmacist resume format',
        'tag' => 'Pharmacy',
        'icon' => 'fa-prescription-bottle-medical',
        'color' => 'from-blue-600 to-cyan-500',
        'description' => 'Present your pharmacy qualifications, dispensing experience, prescription handling, inventory knowledge and professional registration.',
        'intro' => 'A pharmacist resume should clearly communicate your pharmaceutical education, practical experience, dispensing knowledge and professional competencies. Tailor your resume to the hospital, retail pharmacy or pharmaceutical position you are applying for.',
        'highlights' => [
            'D.Pharm, B.Pharm or M.Pharm qualifications',
            'Prescription processing and dispensing',
            'Medication storage and inventory',
            'Patient communication',
            'Pharmacy registration and certifications'
        ],
        'sections' => [
            ['title' => 'Professional Summary', 'text' => 'Introduce your pharmacy qualification, experience and preferred work environment. Focus on the skills most relevant to the vacancy.'],
            ['title' => 'Educational Qualifications', 'text' => 'Mention D.Pharm, B.Pharm, M.Pharm or other applicable qualifications with institution and completion year.'],
            ['title' => 'Professional Experience', 'text' => 'Describe your pharmacy, hospital or pharmaceutical industry experience. Include your workplace, designation, dates and responsibilities.'],
            ['title' => 'Technical and Operational Skills', 'text' => 'Highlight prescription processing, dispensing, medication storage, inventory coordination, billing systems and documentation where applicable.'],
            ['title' => 'Certifications and Registration', 'text' => 'Include applicable State Pharmacy Council registration, professional training and relevant certifications.']
        ],
        'steps' => [
            'Select a professional resume format.',
            'Add your pharmacy qualifications.',
            'Include your professional experience.',
            'Highlight relevant pharmacy skills.',
            'Mention registration and certifications.',
            'Proofread your resume before applying.'
        ]
    ],

    [
        'slug' => 'nursing-interview-questions',
        'category' => 'Interview Preparation',
        'title' => 'Staff Nurse Interview Questions',
        'keyword' => 'staff nurse interview questions',
        'tag' => 'Nursing',
        'icon' => 'fa-comments',
        'color' => 'from-violet-600 to-indigo-500',
        'description' => 'Prepare for nursing interviews with guidance on clinical knowledge, patient safety, emergency situations and professional communication.',
        'intro' => 'Staff nurse interviews assess nursing knowledge, clinical exposure, patient-care practices and communication skills. Preparing relevant examples and reviewing fundamental nursing topics can help you explain your experience more confidently.',
        'highlights' => [
            'Personal introduction and nursing background',
            'Fundamental nursing knowledge',
            'Patient safety and infection prevention',
            'Clinical and emergency scenarios',
            'Teamwork and communication'
        ],
        'sections' => [
            ['title' => 'Personal Introduction', 'text' => 'Prepare to explain your nursing qualification, internship or work experience, professional strengths and reasons for applying.'],
            ['title' => 'Clinical Knowledge Questions', 'text' => 'Review vital signs, patient assessment, nursing documentation, medication safety and infection-prevention practices.'],
            ['title' => 'Patient Care Questions', 'text' => 'Understand patient identification, communication, patient monitoring and the importance of following hospital procedures.'],
            ['title' => 'Emergency Situations', 'text' => 'Prepare to explain how you recognise changes in a patient’s condition, seek assistance and follow the appropriate escalation procedures.'],
            ['title' => 'Behavioural Questions', 'text' => 'Prepare examples demonstrating teamwork, communication, prioritisation and professional handling of challenging situations.']
        ],
        'steps' => [
            'Research the hospital and nursing position.',
            'Prepare your professional introduction.',
            'Revise important clinical nursing topics.',
            'Practise patient-care scenarios.',
            'Prepare teamwork and communication examples.',
            'Practise answering questions clearly.'
        ]
    ],

    [
        'slug' => 'medical-officer-interview-questions',
        'category' => 'Interview Preparation',
        'title' => 'Medical Officer Interview Questions',
        'keyword' => 'medical officer interview questions',
        'tag' => 'Doctors',
        'icon' => 'fa-stethoscope',
        'color' => 'from-orange-500 to-amber-500',
        'description' => 'Prepare for medical officer interviews with guidance on clinical assessment, case discussion, patient management and professional responsibilities.',
        'intro' => 'Medical officer interviews may evaluate clinical reasoning, patient assessment, communication and professional judgement. Prepare to discuss your qualifications, clinical experience and approach to relevant medical scenarios.',
        'highlights' => [
            'Clinical assessment and history taking',
            'Clinical reasoning and case discussion',
            'Patient management and follow-up',
            'Emergency response and escalation',
            'Medical ethics and patient safety'
        ],
        'sections' => [
            ['title' => 'Clinical Assessment', 'text' => 'Review patient history taking, physical examination, vital signs and clinical documentation. Explain how you identify concerns requiring further assessment.'],
            ['title' => 'Diagnosis and Case Discussion', 'text' => 'Practise presenting clinical cases logically, including relevant findings, possible considerations and appropriate next steps.'],
            ['title' => 'Patient Management', 'text' => 'Discuss patient monitoring, documentation, counselling and coordination with other healthcare professionals.'],
            ['title' => 'Emergency Management', 'text' => 'Understand initial assessment, emergency protocols, timely escalation and communication with the appropriate clinical team.'],
            ['title' => 'Medical Ethics', 'text' => 'Review patient confidentiality, informed consent, accurate documentation and professional responsibilities.']
        ],
        'steps' => [
            'Review the medical officer job description.',
            'Prepare your medical professional introduction.',
            'Revise relevant clinical conditions.',
            'Practise structured case discussions.',
            'Review medical ethics and patient safety.',
            'Prepare clear and professional answers.'
        ]
    ],

    [
        'slug' => 'cover-letter-healthcare',
        'category' => 'Career Documents',
        'title' => 'Cover Letter for Hospital Job',
        'keyword' => 'cover letter for hospital job',
        'tag' => 'All Healthcare',
        'icon' => 'fa-envelope-open-text',
        'color' => 'from-pink-600 to-rose-500',
        'description' => 'Write a professional hospital job cover letter that connects your qualifications, healthcare experience and strengths to the advertised position.',
        'intro' => 'A healthcare cover letter introduces you to an employer and explains why your qualifications and experience are relevant to the vacancy. Use it to communicate your interest in the position and highlight the professional strengths that support your application.',
        'highlights' => [
            'Professional introduction',
            'Position-specific interest',
            'Relevant healthcare qualifications',
            'Experience and professional strengths',
            'Clear and courteous closing'
        ],
        'sections' => [
            ['title' => 'Contact Information', 'text' => 'Add your name, phone number, email address and the hospital or employer details where available.'],
            ['title' => 'Opening Paragraph', 'text' => 'Mention the exact position you are applying for and briefly explain your interest in the opportunity.'],
            ['title' => 'Qualifications and Experience', 'text' => 'Highlight the education, internship, employment or healthcare experience that directly relates to the job requirements.'],
            ['title' => 'Why You Are Suitable', 'text' => 'Explain how your relevant competencies, communication skills and professional experience align with the responsibilities of the role.'],
            ['title' => 'Professional Closing', 'text' => 'Thank the employer for considering your application and express your interest in discussing your suitability in an interview.']
        ],
        'steps' => [
            'Research the hospital and job position.',
            'Address the hiring manager professionally.',
            'Write a clear opening paragraph.',
            'Highlight relevant qualifications and experience.',
            'Explain your suitability for the position.',
            'Close professionally and proofread.'
        ]
    ]

];

$guideSlug = $guideSlug ?? request()->route('guide');

$selectedGuide = null;

if (!empty($guideSlug)) {
    foreach ($guides as $guide) {
        if ($guide['slug'] === $guideSlug) {
            $selectedGuide = $guide;
            break;
        }
    }
}

$relatedGuides = [];

if ($selectedGuide) {
    foreach ($guides as $guide) {
        if ($guide['slug'] !== $selectedGuide['slug']) {
            $relatedGuides[] = $guide;
        }
    }
}

@endphp


@if($selectedGuide)

{{-- =====================================================
    INNER GUIDE BANNER
===================================================== --}}

<section class="relative flex min-h-[190px] items-center justify-center overflow-hidden bg-gradient-to-r from-[#405D82] via-[#328B91] to-[#29B59F] px-5 py-10 md:min-h-[235px]">

    <div class="pointer-events-none absolute -left-20 -top-24 h-64 w-64 rounded-full bg-white/10"></div>
    <div class="pointer-events-none absolute -right-20 -top-20 h-64 w-64 rounded-full bg-white/10"></div>

    <div class="relative mx-auto max-w-4xl text-center">

        <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-white/80">
            VAIDYOG CAREER RESOURCES
        </p>

        <h1 class="mt-3 text-2xl font-extrabold leading-tight text-white sm:text-3xl md:text-[38px]">
            {{ $selectedGuide['title'] }}
        </h1>

        <p class="mt-3 text-sm font-medium text-white/90 sm:text-base">
            Professional guidance for your next healthcare career opportunity.
        </p>

    </div>

</section>


{{-- BREADCRUMB --}}

<div class="border-b border-gray-100 bg-white">

    <div class="mx-auto flex max-w-7xl flex-wrap items-center gap-2 px-8 py-3 text-xs text-gray-500">

        <a href="{{ url('/') }}" class="hover:text-[#138F91]">Home</a>

        <i class="fa-solid fa-chevron-right text-[9px]"></i>

        <a href="{{ route('resume-interview') }}" class="hover:text-[#138F91]">
            Resume & Interview
        </a>

        <i class="fa-solid fa-chevron-right text-[9px]"></i>

        <span class="font-semibold text-[#138F91]">
            {{ $selectedGuide['title'] }}
        </span>

    </div>

</div>


{{-- DETAIL CONTENT --}}

<section class="bg-[#F4F7FA] py-9 md:py-12">

    <div class="mx-auto max-w-7xl px-8">

        <a href="{{ route('resume-interview') }}"
           class="mb-5 inline-flex items-center gap-2 text-sm font-semibold text-[#138F91] hover:text-[#243B63]">

            <i class="fa-solid fa-arrow-left"></i>
            All Resume & Interview Guides

        </a>


        {{-- GUIDE HEADER --}}

        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm md:p-7">

            <div class="flex flex-wrap items-start justify-between gap-5">

                <div class="flex items-center gap-4">

                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br {{ $selectedGuide['color'] }} text-xl text-white">
                        <i class="fa-solid {{ $selectedGuide['icon'] }}"></i>
                    </div>

                    <div>

                        <h2 class="text-lg font-extrabold text-[#243B63] md:text-xl">
                            {{ $selectedGuide['title'] }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-500">
                            Vaidyog Healthcare Career Guide
                        </p>

                        <div class="mt-3 flex flex-wrap gap-2">

                            <span class="rounded-full bg-[#E6F4F2] px-3 py-1.5 text-xs font-semibold text-[#138F91]">
                                {{ $selectedGuide['category'] }}
                            </span>

                            <span class="rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold text-gray-600">
                                {{ $selectedGuide['tag'] }}
                            </span>

                        </div>

                    </div>

                </div>

                <span class="rounded-full bg-[#FFF5DF] px-4 py-2 text-xs font-bold text-[#B27A18]">
                    Career Resource
                </span>

            </div>

            <div class="mt-6 grid grid-cols-2 gap-5 border-t border-gray-100 pt-5 md:grid-cols-4">

                <div>
                    <p class="text-xs text-gray-400">Resource Type</p>
                    <p class="mt-2 text-sm font-bold text-[#243B63]">{{ $selectedGuide['category'] }}</p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Profession</p>
                    <p class="mt-2 text-sm font-bold text-[#243B63]">{{ $selectedGuide['tag'] }}</p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Content</p>
                    <p class="mt-2 text-sm font-bold text-[#243B63]">Career Guide</p>
                </div>

                <div>
                    <p class="text-xs text-gray-400">Platform</p>
                    <p class="mt-2 text-sm font-bold text-[#243B63]">Vaidyog</p>
                </div>

            </div>

        </div>


        {{-- TWO COLUMN CONTENT --}}

        <div class="mt-6 grid grid-cols-1 items-start gap-6 lg:grid-cols-12">


            {{-- LEFT CONTENT --}}

            <div class="space-y-5 lg:col-span-8">


                {{-- OVERVIEW --}}

                <div id="overview" class="scroll-mt-24 rounded-xl border border-gray-200 bg-white p-6 md:p-7">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                        GUIDE OVERVIEW
                    </p>

                    <h2 class="mt-3 text-xl font-extrabold text-[#243B63]">
                        {{ $selectedGuide['title'] }}
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-gray-600 md:text-base">
                        {{ $selectedGuide['intro'] }}
                    </p>

                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Use this guide to organise your professional information, understand relevant employer expectations and prepare a stronger application.
                    </p>

                </div>


                {{-- HIGHLIGHTS --}}

                <div id="highlights" class="scroll-mt-24 rounded-xl border border-gray-200 bg-white p-6 md:p-7">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                        KEY INFORMATION
                    </p>

                    <h2 class="mt-3 text-xl font-extrabold text-[#243B63]">
                        Important Points to Remember
                    </h2>

                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-2">

                        @foreach($selectedGuide['highlights'] as $highlight)

                            <div class="flex items-center gap-3 rounded-lg bg-[#F3F7FA] p-4">

                                <i class="fa-solid fa-circle-check text-base text-[#13A89E]"></i>

                                <span class="text-sm font-medium text-gray-600">
                                    {{ $highlight }}
                                </span>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- DETAILED GUIDE --}}

                <div id="guide-content" class="scroll-mt-24 rounded-xl border border-gray-200 bg-white p-6 md:p-7">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                        DETAILED GUIDE
                    </p>

                    <h2 class="mt-3 text-xl font-extrabold text-[#243B63]">
                        Complete Guide and Important Sections
                    </h2>

                    <div class="mt-6 space-y-5">

                        @foreach($selectedGuide['sections'] as $index => $section)

                            <div class="border-b border-gray-100 pb-5 last:border-0 last:pb-0">

                                <div class="flex items-start gap-4">

                                    <span class="text-sm font-extrabold text-[#13A89E]">
                                        {{ sprintf('%02d', $index + 1) }}
                                    </span>

                                    <div>

                                        <h3 class="text-base font-bold text-[#243B63]">
                                            {{ $section['title'] }}
                                        </h3>

                                        <p class="mt-2 text-sm leading-7 text-gray-500">
                                            {{ $section['text'] }}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- PREPARATION --}}

                <div id="preparation" class="scroll-mt-24 rounded-xl border border-gray-200 bg-white p-6 md:p-7">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                        STEP-BY-STEP PREPARATION
                    </p>

                    <h2 class="mt-3 text-xl font-extrabold text-[#243B63]">
                        How to Prepare
                    </h2>

                    <div class="mt-5 space-y-3">

                        @foreach($selectedGuide['steps'] as $index => $step)

                            <div class="flex items-center gap-4 rounded-lg bg-[#F5F8FA] p-4">

                                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#243B63] text-xs font-bold text-white">
                                    {{ sprintf('%02d', $index + 1) }}
                                </span>

                                <p class="text-sm leading-6 text-gray-600">
                                    {{ $step }}
                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>


                {{-- BOTTOM CTA --}}

                <div class="rounded-xl bg-gradient-to-r from-[#243B63] to-[#138F91] p-7 md:p-8">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#A9F0E6]">
                        YOUR NEXT CAREER MOVE
                    </p>

                    <h2 class="mt-3 text-xl font-extrabold text-white md:text-2xl">
                        Ready for Your Next Healthcare Opportunity?
                    </h2>

                    <p class="mt-3 text-sm leading-7 text-white/80">
                        Explore healthcare vacancies and take the next step in your professional journey.
                    </p>

                    <a href="{{ url('/careers') }}"
                       class="mt-5 inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-extrabold text-[#243B63] transition hover:bg-gray-100">

                        Apply Now

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>


            {{-- RIGHT SIDEBAR --}}

            <aside class="space-y-5 lg:col-span-4">


                {{-- APPLY NOW --}}

                <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm lg:sticky lg:top-20">

                    <div class="rounded-lg bg-gradient-to-br from-[#243B63] to-[#138F91] p-6 text-center">

                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-white/15 text-lg text-white">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>

                        <h3 class="mt-4 text-lg font-extrabold text-white">
                            Ready to Apply for a Job?
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-white/80">
                            Explore healthcare vacancies that match your professional qualifications.
                        </p>

                        <a href="{{ url('/careers') }}"
                           class="mt-5 flex w-full items-center justify-center gap-2 rounded-lg bg-white px-4 py-3 text-sm font-extrabold text-[#243B63] transition hover:bg-[#E6F4F2]">

                            Apply Now

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                    </div>

                </div>


                {{-- RESOURCE INFORMATION --}}

                <div class="rounded-xl border border-gray-200 bg-white p-5">

                    <h3 class="text-sm font-extrabold text-[#243B63]">
                        RESOURCE INFORMATION
                    </h3>

                    <div class="mt-4 space-y-4">

                        <div>
                            <p class="text-xs text-gray-400">Category</p>
                            <p class="mt-1 text-sm font-semibold text-[#243B63]">
                                {{ $selectedGuide['category'] }}
                            </p>
                        </div>

                        <div>
                            <p class="text-xs text-gray-400">Profession</p>
                            <p class="mt-1 text-sm font-semibold text-[#243B63]">
                                {{ $selectedGuide['tag'] }}
                            </p>
                        </div>

                        <div>
                            <p class="text-xs text-gray-400">Primary Keyword</p>
                            <p class="mt-1 text-sm font-semibold leading-6 text-[#243B63]">
                                {{ $selectedGuide['keyword'] }}
                            </p>
                        </div>

                    </div>

                </div>


                {{-- RELATED GUIDES --}}

                <div class="rounded-xl border border-gray-200 bg-white p-5">

                    <h3 class="text-sm font-extrabold text-[#243B63]">
                        RELATED GUIDES
                    </h3>

                    <div class="mt-4 space-y-4">

                        @foreach(array_slice($relatedGuides, 0, 4) as $related)

                            <a href="{{ route('resume-interview.show', ['guide' => $related['slug']]) }}"
                               class="group flex items-center justify-between gap-3 border-b border-gray-100 pb-4 last:border-0 last:pb-0">

                                <div>

                                    <p class="text-xs font-bold text-[#138F91]">
                                        {{ $related['category'] }}
                                    </p>

                                    <h4 class="mt-2 text-sm font-semibold leading-6 text-[#243B63] group-hover:text-[#138F91]">
                                        {{ $related['title'] }}
                                    </h4>

                                </div>

                                <i class="fa-solid fa-arrow-right text-sm text-[#138F91]"></i>

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
    MAIN RESUME & INTERVIEW PAGE
===================================================== --}}


{{-- HERO BANNER --}}

<section class="relative isolate overflow-hidden bg-[#172B49]">

    <div class="absolute inset-0 -z-10">

        <img src="{{ asset('images/resume-banner.webp') }}"
             alt="Healthcare resume and interview preparation"
             class="h-full w-full object-cover object-center">

        <div class="absolute inset-0 bg-gradient-to-r from-[#172B49]/60 via-[#243B63]/35 to-[#137E85]/20"></div>

    </div>


    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-10 px-8 py-12 md:py-16 lg:grid-cols-12">


        {{-- LEFT HERO CONTENT --}}

        <div class="lg:col-span-7">

            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-[11px] font-bold tracking-widest text-[#65DED0]">

                <span class="h-2 w-2 rounded-full bg-[#65DED0]"></span>

                HEALTHCARE CAREER RESOURCES

            </span>


            <h1 class="mt-6 text-[36px] font-extrabold leading-tight text-white sm:text-4xl md:text-5xl">

                Build Your Professional
                <span class="text-[#65DED0]">Healthcare Career</span>

            </h1>


            <p class="mt-5 max-w-xl text-sm leading-7 text-white/85 md:text-base">

                Prepare a professional resume, improve your interview skills and explore career resources designed for nurses, doctors, pharmacists and other healthcare professionals.

            </p>


            <div class="mt-7 flex flex-wrap gap-3">

                <a href="#all-guides"
                   class="rounded-lg bg-[#13A89E] px-6 py-3 text-sm font-bold text-white transition hover:bg-[#0D8982]">

                    Explore All Guides

                    <i class="fa-solid fa-arrow-right ml-2"></i>

                </a>


                <a href="{{ url('/careers') }}"
                   class="rounded-lg border border-white/60 px-6 py-3 text-sm font-bold text-white transition hover:bg-white hover:text-[#243B63]">

                    View Healthcare Jobs

                </a>

            </div>


            {{-- HERO STATISTICS --}}

            <div class="mt-9 flex flex-wrap gap-8 border-t border-white/20 pt-6">

                <div>

                    <p class="text-center text-3xl font-extrabold text-[#65DED0]">
                        07
                    </p>

                    <p class="mt-1 text-xs text-white/80">
                        Career Guides
                    </p>

                </div>

                <div>

                    <p class="text-center text-3xl font-extrabold text-[#65DED0]">
                        04
                    </p>

                    <p class="mt-1 text-xs text-white/80">
                        Resume Resources
                    </p>

                </div>

                <div>

                    <p class="text-center text-3xl font-extrabold text-[#65DED0]">
                        02
                    </p>

                    <p class="mt-1 text-xs text-white/80">
                        Interview Guides
                    </p>

                </div>

            </div>

        </div>


        {{-- RIGHT HERO RESOURCE PANEL --}}

        <div class="lg:col-span-5">

            <div class="ml-auto w-full max-w-[440px] rounded-xl border border-white/30 bg-white p-6 shadow-2xl md:p-7">

                <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                    EXPLORE CAREER RESOURCES
                </p>

                <h2 class="mt-3 text-xl font-extrabold text-[#243B63] md:text-2xl">
                    Prepare for Your Next Opportunity
                </h2>

                <p class="mt-2 text-sm leading-6 text-gray-500">
                    Choose a resource and strengthen your professional profile.
                </p>


                <div class="mt-5 space-y-3">

                    <a href="#resume-guides"
                       class="group flex items-center gap-4 rounded-lg border border-gray-100 p-3.5 transition hover:border-[#13A89E] hover:bg-[#F3F7FA]">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#E6F4F2] text-base text-[#138F91]">
                            <i class="fa-solid fa-file-medical"></i>
                        </div>

                        <div class="min-w-0 flex-1">

                            <h3 class="text-sm font-bold text-[#243B63] group-hover:text-[#138F91]">
                                Resume Formats
                            </h3>

                            <p class="mt-1 text-xs text-gray-500">
                                Professional healthcare CV guides
                            </p>

                        </div>

                        <i class="fa-solid fa-arrow-right text-sm text-[#138F91]"></i>

                    </a>


                    <a href="{{ route('resume-interview.show', ['guide' => 'doctor-cv-format']) }}"
                       class="group flex items-center gap-4 rounded-lg border border-gray-100 p-3.5 transition hover:border-[#13A89E] hover:bg-[#F3F7FA]">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#E6F4F2] text-base text-[#138F91]">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>

                        <div class="min-w-0 flex-1">

                            <h3 class="text-sm font-bold text-[#243B63] group-hover:text-[#138F91]">
                                Doctor CV Preparation
                            </h3>

                            <p class="mt-1 text-xs text-gray-500">
                                Medical qualifications and experience
                            </p>

                        </div>

                        <i class="fa-solid fa-arrow-right text-sm text-[#138F91]"></i>

                    </a>


                    <a href="#interview-guides"
                       class="group flex items-center gap-4 rounded-lg border border-gray-100 p-3.5 transition hover:border-[#13A89E] hover:bg-[#F3F7FA]">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#E6F4F2] text-base text-[#138F91]">
                            <i class="fa-solid fa-comments"></i>
                        </div>

                        <div class="min-w-0 flex-1">

                            <h3 class="text-sm font-bold text-[#243B63] group-hover:text-[#138F91]">
                                Interview Preparation
                            </h3>

                            <p class="mt-1 text-xs text-gray-500">
                                Common healthcare interview questions
                            </p>

                        </div>

                        <i class="fa-solid fa-arrow-right text-sm text-[#138F91]"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
    INTRODUCTION
===================================================== --}}

<section class="bg-white py-12 md:py-16">

    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-9 px-8 lg:grid-cols-2">

        <div>

            <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                YOUR PROFESSIONAL DEVELOPMENT
            </p>

            <h2 class="mt-3 text-2xl font-extrabold leading-snug text-[#243B63] md:text-3xl">

                Prepare Yourself for Better Healthcare Career Opportunities

            </h2>

            <p class="mt-4 text-sm leading-7 text-gray-600 md:text-base">

                A strong professional profile helps you present your qualifications, experience and skills effectively. Explore practical resources to improve your resume and prepare for healthcare job interviews.

            </p>

            <p class="mt-3 text-sm leading-7 text-gray-600">

                From nursing resume formats to doctor CV preparation and interview guidance, find useful information for your next career move.

            </p>

            <a href="#all-guides"
               class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-[#138F91] hover:text-[#243B63]">

                Discover All Resources

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>


        {{-- RESOURCE FEATURE GRID --}}

        <div class="grid grid-cols-2 gap-4">

            @foreach([
                [
                    'icon' => 'fa-file-lines',
                    'title' => 'Resume Formats',
                    'text' => 'Create a professional healthcare resume.'
                ],
                [
                    'icon' => 'fa-user-doctor',
                    'title' => 'Doctor CV Guides',
                    'text' => 'Present your medical qualifications.'
                ],
                [
                    'icon' => 'fa-comments',
                    'title' => 'Interview Preparation',
                    'text' => 'Prepare for common interview questions.'
                ],
                [
                    'icon' => 'fa-envelope-open-text',
                    'title' => 'Cover Letters',
                    'text' => 'Improve your professional applications.'
                ]
            ] as $item)

                <div class="rounded-xl border border-gray-100 bg-[#F4F7FA] p-5 transition hover:border-[#13A89E] hover:shadow-sm">

                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-[#E3F3F2] text-lg text-[#138F91]">

                        <i class="fa-solid {{ $item['icon'] }}"></i>

                    </div>

                    <h3 class="mt-4 text-base font-extrabold text-[#243B63]">
                        {{ $item['title'] }}
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        {{ $item['text'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =====================================================
    CATEGORY NAVIGATION
===================================================== --}}

<section class="border-y border-gray-100 bg-[#F4F7FA] py-6">

    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between gap-4 px-8">

        <div>

            <h2 class="text-base font-extrabold text-[#243B63]">
                Browse Career Resources
            </h2>

            <p class="mt-1 text-sm text-gray-500">
                Find the right guide for your profession.
            </p>

        </div>

        <div class="flex flex-wrap gap-3">

            <a href="#resume-guides"
               class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-gray-600 transition hover:border-[#138F91] hover:text-[#138F91]">

                Resume Guides

            </a>

            <a href="#interview-guides"
               class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-gray-600 transition hover:border-[#138F91] hover:text-[#138F91]">

                Interview Guides

            </a>

            <a href="#cover-letter"
               class="rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-semibold text-gray-600 transition hover:border-[#138F91] hover:text-[#138F91]">

                Cover Letters

            </a>

        </div>

    </div>

</section>


{{-- =====================================================
    ALL RESOURCE GUIDES
===================================================== --}}

<section id="all-guides" class="scroll-mt-16 bg-[#F1F5F9] py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-8">

        <div class="mb-9">

            <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                EXPLORE OUR RESOURCES
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Resume & Interview Guides
            </h2>

            <p class="mt-3 text-sm leading-7 text-gray-500 md:text-base">
                Explore practical resources designed to support your healthcare career journey.
            </p>

        </div>


        {{-- RESUME GUIDES --}}

        <div id="resume-guides" class="scroll-mt-24 mb-12">

            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

                <div>

                    <h3 class="text-xl font-extrabold text-[#243B63]">

                        <i class="fa-solid fa-file-lines mr-2 text-[#138F91]"></i>

                        Resume Formats

                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Professional resume and CV preparation guides.
                    </p>

                </div>

                <span class="rounded-full bg-[#E5F4F2] px-4 py-2 text-xs font-bold text-[#138F91]">
                    04 Guides
                </span>

            </div>


            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($guides as $item)

                    @if($item['category'] === 'Resume Guide')

                        <a href="{{ route('resume-interview.show', ['guide' => $item['slug']]) }}"
                           aria-label="Read {{ $item['title'] }}"
                           class="group block h-full">

                            <article class="flex h-full min-h-[290px] flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition duration-300 group-hover:-translate-y-1 group-hover:border-[#13A89E] group-hover:shadow-lg">

                                <div class="h-1.5 bg-gradient-to-r {{ $item['color'] }}"></div>

                                <div class="flex flex-1 flex-col p-5 md:p-6">

                                    <div class="flex items-center justify-between gap-3">

                                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E6F4F2] text-lg text-[#138F91]">

                                            <i class="fa-solid {{ $item['icon'] }}"></i>

                                        </div>

                                        <span class="rounded-full bg-[#F0F3F7] px-3 py-1.5 text-xs font-bold text-[#52647D]">
                                            {{ $item['tag'] }}
                                        </span>

                                    </div>

                                    <h4 class="mt-5 text-lg font-extrabold leading-7 text-[#243B63] transition group-hover:text-[#138F91]">
                                        {{ $item['title'] }}
                                    </h4>

                                    <p class="mt-3 text-sm leading-7 text-gray-500">
                                        {{ $item['description'] }}
                                    </p>

                                    <div class="mt-auto flex items-center justify-between gap-2 border-t border-gray-100 pt-5">

                                        <span class="text-xs font-medium text-gray-400">
                                            Resume Resource
                                        </span>

                                        <span class="inline-flex items-center gap-2 text-sm font-bold text-[#138F91]">

                                            Read Guide

                                            <i class="fa-solid fa-arrow-right transition group-hover:translate-x-1"></i>

                                        </span>

                                    </div>

                                </div>

                            </article>

                        </a>

                    @endif

                @endforeach

            </div>

        </div>


        {{-- INTERVIEW GUIDES --}}

        <div id="interview-guides" class="scroll-mt-24 mb-12">

            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

                <div>

                    <h3 class="text-xl font-extrabold text-[#243B63]">

                        <i class="fa-solid fa-comments mr-2 text-[#138F91]"></i>

                        Interview Preparation

                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Prepare for healthcare job interviews.
                    </p>

                </div>

                <span class="rounded-full bg-[#E5F4F2] px-4 py-2 text-xs font-bold text-[#138F91]">
                    02 Guides
                </span>

            </div>


            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($guides as $item)

                    @if($item['category'] === 'Interview Preparation')

                        <a href="{{ route('resume-interview.show', ['guide' => $item['slug']]) }}"
                           class="group block h-full">

                            <article class="flex h-full min-h-[290px] flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition duration-300 group-hover:-translate-y-1 group-hover:border-[#13A89E] group-hover:shadow-lg">

                                <div class="h-1.5 bg-gradient-to-r {{ $item['color'] }}"></div>

                                <div class="flex flex-1 flex-col p-5 md:p-6">

                                    <div class="flex items-center justify-between gap-3">

                                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E6F4F2] text-lg text-[#138F91]">

                                            <i class="fa-solid {{ $item['icon'] }}"></i>

                                        </div>

                                        <span class="rounded-full bg-[#F0F3F7] px-3 py-1.5 text-xs font-bold text-[#52647D]">
                                            {{ $item['tag'] }}
                                        </span>

                                    </div>

                                    <h4 class="mt-5 text-lg font-extrabold leading-7 text-[#243B63] transition group-hover:text-[#138F91]">
                                        {{ $item['title'] }}
                                    </h4>

                                    <p class="mt-3 text-sm leading-7 text-gray-500">
                                        {{ $item['description'] }}
                                    </p>

                                    <div class="mt-auto flex items-center justify-between gap-2 border-t border-gray-100 pt-5">

                                        <span class="text-xs font-medium text-gray-400">
                                            Interview Resource
                                        </span>

                                        <span class="inline-flex items-center gap-2 text-sm font-bold text-[#138F91]">

                                            Read Guide

                                            <i class="fa-solid fa-arrow-right transition group-hover:translate-x-1"></i>

                                        </span>

                                    </div>

                                </div>

                            </article>

                        </a>

                    @endif

                @endforeach

            </div>

        </div>


        {{-- COVER LETTER --}}

        <div id="cover-letter" class="scroll-mt-24">

            <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

                <div>

                    <h3 class="text-xl font-extrabold text-[#243B63]">

                        <i class="fa-solid fa-envelope-open-text mr-2 text-[#138F91]"></i>

                        Cover Letter Resources

                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Improve your healthcare job applications.
                    </p>

                </div>

                <span class="rounded-full bg-[#E5F4F2] px-4 py-2 text-xs font-bold text-[#138F91]">
                    01 Guide
                </span>

            </div>


            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($guides as $item)

                    @if($item['category'] === 'Career Documents')

                        <a href="{{ route('resume-interview.show', ['guide' => $item['slug']]) }}"
                           class="group block h-full">

                            <article class="flex h-full min-h-[290px] flex-col overflow-hidden rounded-xl border border-gray-200 bg-white transition duration-300 group-hover:-translate-y-1 group-hover:border-[#13A89E] group-hover:shadow-lg">

                                <div class="h-1.5 bg-gradient-to-r {{ $item['color'] }}"></div>

                                <div class="flex flex-1 flex-col p-5 md:p-6">

                                    <div class="flex items-center justify-between gap-3">

                                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#E6F4F2] text-lg text-[#138F91]">

                                            <i class="fa-solid {{ $item['icon'] }}"></i>

                                        </div>

                                        <span class="rounded-full bg-[#F0F3F7] px-3 py-1.5 text-xs font-bold text-[#52647D]">
                                            {{ $item['tag'] }}
                                        </span>

                                    </div>

                                    <h4 class="mt-5 text-lg font-extrabold leading-7 text-[#243B63] transition group-hover:text-[#138F91]">
                                        {{ $item['title'] }}
                                    </h4>

                                    <p class="mt-3 text-sm leading-7 text-gray-500">
                                        {{ $item['description'] }}
                                    </p>

                                    <div class="mt-auto flex items-center justify-between gap-2 border-t border-gray-100 pt-5">

                                        <span class="text-xs font-medium text-gray-400">
                                            Career Document
                                        </span>

                                        <span class="inline-flex items-center gap-2 text-sm font-bold text-[#138F91]">

                                            Read Guide

                                            <i class="fa-solid fa-arrow-right transition group-hover:translate-x-1"></i>

                                        </span>

                                    </div>

                                </div>

                            </article>

                        </a>

                    @endif

                @endforeach

            </div>

        </div>

    </div>

</section>


{{-- =====================================================
    HOW IT HELPS
===================================================== --}}

<section class="bg-white py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-8">

        <div class="mx-auto mb-9 max-w-2xl text-center">

            <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                BUILD YOUR PROFESSIONAL PROFILE
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Get Ready for Your Next Career Move
            </h2>

        </div>


        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">

            @foreach([
                [
                    'icon' => 'fa-file-circle-check',
                    'title' => 'Build Your Resume',
                    'text' => 'Create a clear and professional healthcare resume.'
                ],
                [
                    'icon' => 'fa-book-medical',
                    'title' => 'Improve Knowledge',
                    'text' => 'Review important professional and clinical topics.'
                ],
                [
                    'icon' => 'fa-comments',
                    'title' => 'Practise Interviews',
                    'text' => 'Prepare answers for common healthcare interview questions.'
                ],
                [
                    'icon' => 'fa-briefcase',
                    'title' => 'Apply for Jobs',
                    'text' => 'Explore suitable healthcare career opportunities.'
                ]
            ] as $index => $step)

                <div class="rounded-xl border border-gray-200 p-5 transition hover:border-[#13A89E] hover:shadow-md">

                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-[#E3F3F2] text-lg text-[#138F91]">

                        <i class="fa-solid {{ $step['icon'] }}"></i>

                    </div>

                    <p class="mt-4 text-xs font-extrabold text-[#13A89E]">
                        STEP 0{{ $index + 1 }}
                    </p>

                    <h3 class="mt-2 text-base font-extrabold text-[#243B63]">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        {{ $step['text'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =====================================================
    FINAL CTA
===================================================== --}}

<section class="bg-[#F1F5F9] px-5 py-16 md:py-16">

    <div class="mx-auto w-full max-w-[1216px] rounded-xl bg-gradient-to-r from-[#243B63] to-[#138F91] px-6 py-10 text-center md:px-10 md:py-14">

        <p class="text-xs font-bold uppercase tracking-widest text-[#A9F0E6]">
            YOUR NEXT CAREER STARTS HERE
        </p>

        <h2 class="mt-4 text-2xl font-extrabold text-white md:text-3xl">
            Ready to Explore Healthcare Jobs?
        </h2>

        <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-white/80 md:text-base">
            Strengthen your professional profile, prepare for interviews and discover healthcare opportunities that match your qualifications.
        </p>

        <a href="{{ url('/careers') }}"
           class="mt-7 inline-flex items-center gap-2 rounded-lg bg-white px-7 py-3.5 text-sm font-extrabold text-[#243B63] transition hover:bg-gray-100">

            Explore Healthcare Jobs

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </div>

</section>


@endif

@endsection