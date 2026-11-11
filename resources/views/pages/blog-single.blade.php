
@extends('layouts.app')

@section('title', 'Healthcare Career Insights | Vaidyog')
@section('description', 'Explore healthcare career guidance, professional insights and resources from Vaidyog.')

@section('content')

@php

$articles = [

    'gnm-vs-bsc-nursing-salary-2026' => [
        'category' => 'Nursing Careers',
        'title' => 'GNM vs B.Sc Nursing: Which Pays More in 2026?',
        'date' => '05 November 2026',
        'time' => '6 min read',
        'intro' => 'Choosing between GNM and B.Sc Nursing is an important decision for students planning a career in healthcare. Both qualifications provide opportunities in nursing, hospitals and patient care, but they differ in course duration, eligibility, career progression and salary potential.',
        'points' => [
            'GNM is a diploma-level nursing qualification.',
            'B.Sc Nursing is an undergraduate degree programme.',
            'Both qualifications offer opportunities in hospitals and healthcare institutions.',
            'Salary depends on experience, location, skills and employer.',
        ],
        'sections' => [
            [
                'heading' => '1. What is GNM Nursing?',
                'content' => 'General Nursing and Midwifery (GNM) is a nursing diploma programme that prepares students to provide patient care, assist medical professionals and support healthcare services. GNM graduates can explore opportunities in hospitals, clinics, nursing homes and other healthcare facilities.'
            ],
            [
                'heading' => '2. What is B.Sc Nursing?',
                'content' => 'B.Sc Nursing is an undergraduate degree programme that provides academic and practical training in nursing, healthcare management, medical sciences and patient care. Graduates can pursue nursing positions and further educational opportunities.'
            ],
            [
                'heading' => '3. GNM vs B.Sc Nursing Salary',
                'content' => 'Salary packages for GNM and B.Sc Nursing graduates vary depending on the employer, city, experience and responsibilities. Government and private hospitals may offer different compensation structures. Candidates should compare job requirements and career opportunities before choosing a qualification.'
            ],
            [
                'heading' => '4. Career Opportunities',
                'content' => 'Both qualifications can lead to nursing careers in hospitals, clinics, community healthcare and other medical institutions. Additional education, professional experience and relevant certifications can support long-term career development.'
            ],
            [
                'heading' => '5. Which Course Should You Choose?',
                'content' => 'Consider your educational goals, eligibility, course duration and future plans. B.Sc Nursing may be suitable for students seeking a degree-level qualification, while GNM can be an option for those looking for a diploma-level nursing pathway.'
            ],
        ],
        'conclusion' => 'Both GNM and B.Sc Nursing can provide a foundation for a nursing career. The right choice depends on your education goals, career interests and preferred learning pathway. Research recognised institutions and compare employment requirements before making your decision.'
    ],

    'high-paying-non-clinical-jobs-mbbs-doctors' => [
        'category' => 'Doctor Careers',
        'title' => '15 High-Paying Non-Clinical Jobs for MBBS Doctors',
        'date' => '04 November 2026',
        'time' => '8 min read',
        'intro' => 'An MBBS degree can open doors to several career opportunities beyond traditional clinical practice. Doctors can explore roles in healthcare administration, medical research, public health, medical writing, healthcare technology and other professional fields.',
        'points' => [
            'Explore healthcare careers beyond direct patient treatment.',
            'Consider medical research and clinical research opportunities.',
            'Healthcare administration offers management-focused roles.',
            'Additional skills and qualifications can improve career opportunities.',
        ],
        'sections' => [
            [
                'heading' => '1. Healthcare Administration',
                'content' => 'Healthcare administration professionals help manage hospital operations, healthcare teams, patient services and organisational processes. MBBS graduates with management skills may explore hospital administration and healthcare management roles.'
            ],
            [
                'heading' => '2. Medical Research',
                'content' => 'Medical research provides opportunities to participate in scientific studies, research projects and healthcare innovation. Doctors interested in evidence-based medicine may explore research-focused positions.'
            ],
            [
                'heading' => '3. Clinical Research',
                'content' => 'Clinical research professionals support clinical trials, study documentation, research coordination and participant safety. Relevant training and experience can help doctors enter this field.'
            ],
            [
                'heading' => '4. Medical Writing',
                'content' => 'Medical writers create healthcare articles, educational materials, scientific documents and medical content. Strong writing skills and medical knowledge are important for this career.'
            ],
            [
                'heading' => '5. Public Health',
                'content' => 'Public health careers focus on community health, disease prevention, health programmes and population-level healthcare improvements. Further education in public health may be useful.'
            ],
            [
                'heading' => '6. Healthcare Technology',
                'content' => 'Healthcare technology companies require medical professionals who understand clinical workflows, digital health products and healthcare delivery. Doctors can explore product, research and medical advisory roles.'
            ],
        ],
        'conclusion' => 'An MBBS qualification offers more than one professional pathway. By identifying your interests and developing relevant skills, you can explore opportunities in administration, research, public health, medical communication and healthcare technology.'
    ],

    'how-to-write-a-doctor-cv-india' => [
        'category' => 'Resume Guides',
        'title' => 'How to Write a Professional Doctor CV in India',
        'date' => '03 November 2026',
        'time' => '5 min read',
        'intro' => 'A professional CV helps doctors communicate their education, clinical experience, medical skills and professional achievements to hospitals and healthcare recruiters. A clear and organised CV can make it easier for employers to evaluate your qualifications.',
        'points' => [
            'Use a clear and professional CV format.',
            'Include your medical qualifications and registration details.',
            'Highlight clinical experience and relevant skills.',
            'Keep your contact information accurate and updated.',
        ],
        'sections' => [
            [
                'heading' => '1. Add Your Contact Information',
                'content' => 'Start your CV with your full name, phone number, professional email address and location. Make sure your contact details are accurate so recruiters can reach you easily.'
            ],
            [
                'heading' => '2. Write a Professional Summary',
                'content' => 'Include a short introduction describing your medical qualification, professional interests, experience and career objectives. Keep the summary relevant to the position you are applying for.'
            ],
            [
                'heading' => '3. Include Your Education',
                'content' => 'List your medical qualifications, institutions, completion dates and relevant academic achievements. Include internship details where applicable.'
            ],
            [
                'heading' => '4. Highlight Clinical Experience',
                'content' => 'Describe your hospital experience, clinical responsibilities, internship exposure and relevant departments. Use clear points to explain your responsibilities.'
            ],
            [
                'heading' => '5. Add Medical Skills and Certifications',
                'content' => 'Include relevant clinical skills, medical training, certifications, workshops and professional development activities. Only mention skills and qualifications you genuinely possess.'
            ],
            [
                'heading' => '6. Review Your CV Before Applying',
                'content' => 'Check spelling, formatting, dates and contact details. Keep the layout consistent and make sure your CV is easy to read on both desktop and mobile devices.'
            ],
        ],
        'conclusion' => 'A well-structured doctor CV should clearly present your qualifications, clinical experience and professional strengths. Customise your CV for each opportunity and keep your information accurate and updated.'
    ],

    'career-options-after-bsc-nursing' => [
        'category' => 'Career Guidance',
        'title' => 'Career Options After B.Sc Nursing: A Complete Guide',
        'date' => '02 November 2026',
        'time' => '6 min read',
        'intro' => 'B.Sc Nursing graduates can explore several career opportunities across hospitals, community healthcare, education, research and public health. Understanding these pathways can help graduates plan their next professional step.',
        'points' => [
            'Hospital nursing offers clinical career opportunities.',
            'Community health provides opportunities in public healthcare.',
            'Nursing education is an option for graduates interested in teaching.',
            'Further education can support specialised career development.',
        ],
        'sections' => [
            [
                'heading' => '1. Staff Nurse',
                'content' => 'Staff nurses work in hospitals and healthcare facilities, supporting patient care, monitoring health conditions, assisting medical teams and maintaining patient records.'
            ],
            [
                'heading' => '2. Government Nursing Jobs',
                'content' => 'Government healthcare institutions recruit nursing professionals for hospitals, public health centres and other medical facilities. Candidates should check the official recruitment notifications and eligibility requirements.'
            ],
            [
                'heading' => '3. Nursing Educator',
                'content' => 'Graduates interested in teaching can explore academic and nursing education opportunities. Higher qualifications and relevant experience may be required for particular positions.'
            ],
            [
                'heading' => '4. Community Health Nurse',
                'content' => 'Community health nurses contribute to public health programmes, health education, preventive care and community-based healthcare services.'
            ],
            [
                'heading' => '5. Nursing Research',
                'content' => 'Nursing research professionals support healthcare studies, evidence-based practice and improvements in patient care. Research training can help graduates explore this pathway.'
            ],
            [
                'heading' => '6. Higher Education',
                'content' => 'Graduates can consider further studies such as M.Sc Nursing and other relevant postgraduate programmes depending on their interests and eligibility.'
            ],
        ],
        'conclusion' => 'B.Sc Nursing provides a foundation for multiple healthcare career pathways. Explore different roles, understand their eligibility requirements and choose a direction that matches your professional interests.'
    ],

];

if (!isset($articles[$slug])) {
    abort(404);
}

$blog = $articles[$slug];

$relatedBlogs = collect($articles)
    ->except($slug)
    ->take(3);

@endphp


<!-- =====================================================
     INNER PAGE BANNER
===================================================== -->

<section class="relative isolate flex min-h-[210px] items-center justify-center overflow-hidden bg-gradient-to-r from-[#385B82] via-[#278F91] to-[#35B99F] px-5 py-12 md:min-h-[235px] md:py-14">

    <!-- LEFT DECORATIVE CIRCLE -->
    <div class="pointer-events-none absolute -left-20 -top-28 h-[300px] w-[300px] rounded-full border-[55px] border-white/[0.08]"></div>

    <!-- RIGHT DECORATIVE CIRCLE -->
    <div class="pointer-events-none absolute -right-20 -top-28 h-[300px] w-[300px] rounded-full border-[55px] border-white/[0.08]"></div>

    <!-- CENTER CONTENT -->
    <div class="relative z-10 mx-auto max-w-5xl text-center">

        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white/90 md:text-sm">
            VAIDYOG CAREER OPPORTUNITIES
        </p>

        <h1 class="mt-3 text-2xl font-extrabold leading-tight text-white sm:text-3xl md:text-4xl">
            {{ $blog['title'] }}
        </h1>

        <p class="mt-3 text-sm font-medium text-white/90 md:text-base">
            Find your next opportunity in healthcare.
        </p>

    </div>

</section>



<!-- =====================================================
     BREADCRUMB
===================================================== -->

<section class="bg-[#F1F5F9]">

    <div class="mx-auto max-w-7xl px-5 pt-6 md:px-8">

        <div class="flex flex-wrap items-center gap-2 text-xs text-gray-500 md:text-sm">

            <a href="{{ url('/') }}" class="transition hover:text-[#138F91]">
                Home
            </a>

            <i class="fa-solid fa-chevron-right text-[9px]"></i>

            <a href="{{ route('blog.index') }}" class="transition hover:text-[#138F91]">
                Blog
            </a>

            <i class="fa-solid fa-chevron-right text-[9px]"></i>

            <span class="font-semibold text-[#138F91]">
                {{ $blog['category'] }}
            </span>

        </div>

    </div>

</section>



<!-- =====================================================
     BLOG ARTICLE CONTENT
===================================================== -->

<section class="bg-[#F1F5F9] pb-16 pt-7 md:pb-20">

    <div class="mx-auto max-w-7xl px-5 md:px-8">

        <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12">


            <!-- MAIN ARTICLE -->
            <article class="lg:col-span-8">

                <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm sm:p-8 md:p-10">


                    <!-- ARTICLE CATEGORY AND DATE -->
                    <div class="flex flex-wrap items-center gap-4">

                        <span class="rounded-full bg-[#E8F6F4] px-4 py-2 text-xs font-bold text-[#138F91]">
                            {{ $blog['category'] }}
                        </span>

                        <span class="inline-flex items-center gap-2 text-xs text-gray-500">
                            <i class="fa-regular fa-calendar text-[#159D94]"></i>
                            {{ $blog['date'] }}
                        </span>

                        <span class="inline-flex items-center gap-2 text-xs text-gray-500">
                            <i class="fa-regular fa-clock text-[#159D94]"></i>
                            {{ $blog['time'] }}
                        </span>

                    </div>


                    <!-- INTRODUCTION -->
                    <div class="mt-8">

                        <h2 class="text-xl font-bold text-[#243B63] md:text-2xl">
                            Introduction
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-gray-600 md:text-[15px]">
                            {{ $blog['intro'] }}
                        </p>

                    </div>



                    <!-- KEY TAKEAWAYS -->
                    <div class="mt-8 rounded-xl border border-[#DCEFEA] bg-[#F1FAF8] p-5 md:p-6">

                        <h2 class="flex items-center gap-3 text-lg font-bold text-[#243B63]">

                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#138F91] text-white">
                                <i class="fa-solid fa-lightbulb"></i>
                            </span>

                            Key Takeaways

                        </h2>

                        <ul class="mt-5 space-y-3">

                            @foreach($blog['points'] as $point)

                                <li class="flex items-start gap-3 text-sm leading-6 text-gray-700">

                                    <i class="fa-solid fa-circle-check mt-1 text-[#159D94]"></i>

                                    <span>{{ $point }}</span>

                                </li>

                            @endforeach

                        </ul>

                    </div>



                    <!-- ARTICLE SECTIONS -->
                    <div class="mt-10 space-y-9">

                        @foreach($blog['sections'] as $section)

                            <div>

                                <h2 class="text-lg font-bold leading-7 text-[#243B63] md:text-xl">
                                    {{ $section['heading'] }}
                                </h2>

                                <p class="mt-3 text-sm leading-7 text-gray-600 md:text-[15px]">
                                    {{ $section['content'] }}
                                </p>

                            </div>

                        @endforeach

                    </div>



                    <!-- CONCLUSION -->
                    <div class="mt-10 border-t border-gray-100 pt-8">

                        <h2 class="text-xl font-bold text-[#243B63]">
                            Conclusion
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-gray-600 md:text-[15px]">
                            {{ $blog['conclusion'] }}
                        </p>

                    </div>



                    <!-- BACK TO BLOG -->
                    <div class="mt-9 border-t border-gray-100 pt-6">

                        <a href="{{ route('blog.index') }}"
                           class="inline-flex items-center gap-2 text-sm font-bold text-[#138F91] transition hover:gap-3">

                            <i class="fa-solid fa-arrow-left"></i>

                            Back to All Articles

                        </a>

                    </div>

                </div>

            </article>



            <!-- SIDEBAR -->
            <aside class="space-y-6 lg:col-span-4">


                <!-- RELATED ARTICLES -->
                <div class="rounded-xl border border-gray-100 bg-white p-5 shadow-sm md:p-6">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                        KEEP EXPLORING
                    </p>

                    <h2 class="mt-2 text-xl font-bold text-[#243B63]">
                        Related Articles
                    </h2>


                    <div class="mt-5 space-y-4">

                        @foreach($relatedBlogs as $relatedSlug => $related)

                            <a href="{{ route('blog.show', ['slug' => $relatedSlug]) }}"
                               class="group block rounded-lg border border-gray-100 bg-[#F8FAFC] p-4 transition hover:border-[#13A89E] hover:bg-[#F0FAF8]">

                                <span class="text-xs font-bold text-[#138F91]">
                                    {{ $related['category'] }}
                                </span>

                                <h3 class="mt-2 text-sm font-bold leading-6 text-[#243B63] transition group-hover:text-[#138F91]">
                                    {{ $related['title'] }}
                                </h3>

                                <span class="mt-3 inline-flex items-center gap-2 text-xs font-bold text-[#138F91]">
                                    Read Article
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>

                            </a>

                        @endforeach

                    </div>


                    <a href="{{ route('blog.index') }}"
                       class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-[#138F91] hover:text-[#243B63]">

                        View All Articles
                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>



                <!-- CAREER CTA -->
                <div class="rounded-xl bg-gradient-to-br from-[#243B63] to-[#138F91] p-6 text-white">

                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-white/15 text-xl">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>

                    <h2 class="mt-5 text-xl font-bold">
                        Explore Healthcare Jobs
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-white/80">
                        Discover healthcare opportunities and take the next step in your professional journey.
                    </p>

                    <a href="{{ url('/careers') }}"
                       class="mt-5 inline-flex items-center gap-2 rounded-lg bg-white px-5 py-3 text-sm font-bold text-[#243B63] transition hover:bg-[#E8F6F4]">

                        Explore Jobs

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </aside>

        </div>

    </div>

</section>



<!-- =====================================================
     BOTTOM CTA
===================================================== -->

<section class="bg-white px-8 py-12 md:py-16">

<div class="mx-auto w-full max-w-[1216px] rounded-xl bg-gradient-to-r from-[#243B63] to-[#138F91] px-6 py-10 text-center md:px-10 md:py-12">
        <p class="text-xs font-bold uppercase tracking-widest text-[#A9F0E6]">
            YOUR NEXT CAREER STARTS HERE
        </p>

        <h2 class="mt-4 text-2xl font-extrabold text-white md:text-3xl">
            Ready to Explore Healthcare Jobs?
        </h2>

        <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-white/80 md:text-base">
            Discover healthcare opportunities, explore career options and find the right professional opportunity for your qualifications.
        </p>

        <a href="{{ url('/careers') }}"
           class="mt-6 inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-extrabold text-[#243B63] transition hover:bg-gray-100">

            Explore Healthcare Jobs

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </div>

</section>

@endsection
