
@extends('layouts.app')

@section('title', 'Healthcare Career Blog | Vaidyog')
@section('description', 'Explore healthcare career insights, nursing guides, doctor career options and professional development resources.')

@section('content')

@php
$blogs = [
    [
        'slug' => 'gnm-vs-bsc-nursing-salary-2026',
        'category' => 'Nursing Careers',
        'title' => 'GNM vs B.Sc Nursing: Which Pays More in 2026?',
        'description' => 'Compare nursing qualifications, career opportunities, salary potential and professional growth in India.',
        'date' => '05 November 2026',
        'time' => '6 min read',
        'icon' => 'fa-user-nurse',
        'image' => 'images/blog-nursing.webp',
    ],
    [
        'slug' => 'high-paying-non-clinical-jobs-mbbs-doctors',
        'category' => 'Doctor Careers',
        'title' => '15 High-Paying Non-Clinical Jobs for MBBS Doctors',
        'description' => 'Explore alternative career paths for MBBS graduates beyond traditional clinical practice.',
        'date' => '04 November 2026',
        'time' => '8 min read',
        'icon' => 'fa-user-doctor',
        'image' => 'images/blog-doctor.webp',
    ],
    [
        'slug' => 'how-to-write-a-doctor-cv-india',
        'category' => 'Resume Guides',
        'title' => 'How to Write a Professional Doctor CV in India',
        'description' => 'Learn essential CV sections, formatting tips and details for a professional doctor profile.',
        'date' => '03 November 2026',
        'time' => '5 min read',
        'icon' => 'fa-file-lines',
        'image' => 'images/blog-cv.webp',
    ],
    [
        'slug' => 'career-options-after-bsc-nursing',
        'category' => 'Career Guidance',
        'title' => 'Career Options After B.Sc Nursing: A Complete Guide',
        'description' => 'Discover clinical, educational, research and public health pathways after B.Sc Nursing.',
        'date' => '02 November 2026',
        'time' => '6 min read',
        'icon' => 'fa-heart-pulse',
        'image' => 'images/blog-career.webp',
    ],
];
@endphp


<!-- =====================================================
     MAIN BLOG BANNER
===================================================== -->

<section class="relative isolate flex min-h-[350px] items-center overflow-hidden bg-[#12385F] md:min-h-[420px]">
    <!-- BANNER BACKGROUND IMAGE -->
    <div class="absolute inset-0 -z-10">

        <img
            src="{{ asset('images/blog-banner.webp') }}"
            alt="Healthcare career insights and professional development"
            class="h-full w-full object-cover object-center"
        >

        <!-- DARK OVERLAY -->
<div class="absolute inset-0 bg-gradient-to-r from-[#102F58]/60 via-[#145B83]/50 to-[#078F91]/10"></div>
    </div>


    <!-- DECORATIVE CIRCLES -->
    <div class="pointer-events-none absolute -left-32 -top-40 h-[450px] w-[450px] rounded-full border-[65px] border-white/[0.05]"></div>

    <div class="pointer-events-none absolute -right-24 -top-28 h-[350px] w-[350px] rounded-full border-[55px] border-white/[0.06]"></div>


    <!-- BANNER CONTENT -->
    <div class="relative z-10 mx-auto w-full max-w-7xl px-5 py-20 md:px-8 md:py-24">

        <div class="max-w-4xl text-left">

            <!-- SMALL LABEL -->
            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2.5 text-[11px] font-bold tracking-widest text-[#65DED0] sm:text-xs">

                <span class="h-2 w-2 rounded-full bg-[#65DED0]"></span>

                VAIDYOG HEALTHCARE INSIGHTS

            </span>


            <!-- MAIN TITLE -->
            <h1 class="mt-6 max-w-4xl text-[36px] font-extrabold leading-tight text-white sm:text-4xl md:text-5xl lg:text-[58px]">

                Healthcare Career

                <span class="text-[#65DED0]">
                    Insights &amp; Guides
                </span>

            </h1>


            <!-- DESCRIPTION -->
            <p class="mt-5 max-w-2xl text-sm leading-7 text-white/90 md:text-base lg:text-lg">

                Explore healthcare career advice, nursing guides, doctor career options,
                resume tips and professional resources to plan your next step.

            </p>


            <!-- BANNER BUTTONS -->
            <div class="mt-8 flex flex-wrap items-center gap-3">

                <a href="#latest-articles"
                   class="inline-flex items-center gap-2 rounded-lg bg-[#13A89E] px-6 py-3.5 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#0D8982]">

                    Explore Articles

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a href="{{ url('/careers') }}"
                   class="inline-flex items-center gap-2 rounded-lg border border-white/60 bg-white/5 px-6 py-3.5 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:bg-white hover:text-[#243B63]">

                    View Healthcare Jobs

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     LATEST BLOG ARTICLES
===================================================== -->

<section id="latest-articles" class="scroll-mt-16 bg-[#F1F5F9] py-12 md:py-16">

    <div class="mx-auto max-w-7xl px-5 md:px-8">


        <!-- SECTION HEADING -->
        <div class="mb-8">

            <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                EXPLORE OUR ARTICLES
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Latest Healthcare Insights
            </h2>

            <p class="mt-3 max-w-2xl text-sm leading-7 text-gray-600 md:text-base">

                Discover useful information about healthcare education, career opportunities,
                professional skills and development.

            </p>

        </div>



        <!-- ARTICLE COUNT -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">

            <h3 class="text-lg font-extrabold text-[#243B63]">
                All Articles
            </h3>

            <span class="rounded-full bg-white px-4 py-2 text-xs font-bold text-[#138F91]">

                {{ count($blogs) }} Articles

            </span>

        </div>



        <!-- FULL CLICKABLE BLOG CARDS -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

            @foreach($blogs as $blog)

            <!-- ENTIRE CARD IS AN ANCHOR -->
            <a
                href="{{ route('blog.show', ['slug' => $blog['slug']]) }}"
                class="group flex h-full flex-col overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-[#13A89E] hover:shadow-lg"
            >

                <!-- BLOG IMAGE -->
                <div class="relative h-48 overflow-hidden bg-gradient-to-br from-[#243B63] to-[#159D94]">

                    <img
                        src="{{ asset($blog['image']) }}"
                        alt="{{ $blog['title'] }}"
                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                        loading="lazy"
                        onerror="this.style.display='none';"
                    >

                    <!-- IMAGE OVERLAY -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#102F58]/50 to-transparent"></div>


                    <!-- CATEGORY BADGE -->
                    <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1.5 text-[11px] font-bold text-[#138F91]">

                        {{ $blog['category'] }}

                    </span>


                    <!-- ICON -->
                    <div class="absolute bottom-4 right-4 flex h-11 w-11 items-center justify-center rounded-lg bg-white/20 text-xl text-white backdrop-blur-sm">

                        <i class="fa-solid {{ $blog['icon'] }}"></i>

                    </div>

                </div>



                <!-- BLOG DETAILS -->
                <div class="flex flex-1 flex-col p-5 md:p-6">


                    <!-- CATEGORY -->
                    <span class="text-xs font-bold text-[#138F91]">

                        {{ $blog['category'] }}

                    </span>



                    <!-- BLOG TITLE -->
                    <h3 class="mt-2 text-lg font-extrabold leading-6 text-[#243B63] transition group-hover:text-[#138F91]">

                        {{ $blog['title'] }}

                    </h3>



                    <!-- DESCRIPTION -->
                    <p class="mt-3 text-sm leading-6 text-gray-600">

                        {{ $blog['description'] }}

                    </p>



                    <!-- DATE AND READING TIME -->
                    <div class="mt-auto">

                        <div class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-2 border-t border-gray-100 pt-4">


                            <span class="inline-flex items-center gap-2 text-xs text-gray-500">

                                <i class="fa-regular fa-calendar text-[#159D94]"></i>

                                {{ $blog['date'] }}

                            </span>


                            <span class="inline-flex items-center gap-2 text-xs text-gray-500">

                                <i class="fa-regular fa-clock text-[#159D94]"></i>

                                {{ $blog['time'] }}

                            </span>


                        </div>



                        <!-- VIEW DETAILS -->
                        <!-- <div class="mt-4 border-t border-gray-100 pt-4">

                            <span class="inline-flex items-center gap-2 text-sm font-bold text-[#138F91] transition group-hover:gap-3">

                                View Details

                                <i class="fa-solid fa-arrow-right"></i>

                            </span>

                        </div> -->

                    </div>

                </div>

            </a>

            @endforeach

        </div>

    </div>

</section>



<!-- =====================================================
     BOTTOM CTA
===================================================== -->

<section class="bg-white px-5 py-12 md:py-16">

    <div class="mx-auto w-full max-w-[1216px] rounded-xl bg-gradient-to-r from-[#243B63] to-[#138F91] px-6 py-10 text-center md:px-10 md:py-12">


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
           class="mt-6 inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-extrabold text-[#243B63] transition hover:bg-gray-100">

            Explore Healthcare Jobs

            <i class="fa-solid fa-arrow-right"></i>

        </a>


    </div>

</section>

@endsection
