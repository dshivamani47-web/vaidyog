
@extends('layouts.app')

@section('title', 'Contact Us | Vaidyog')

@section('description', 'Contact Vaidyog for healthcare career guidance, job opportunities and professional support.')

@section('content')


<!-- =====================================================
     MAIN BLOG BANNER
===================================================== -->

<section class="relative isolate flex min-h-[350px] items-center overflow-hidden bg-[#12385F] md:min-h-[420px]">
    <!-- BANNER BACKGROUND IMAGE -->
    <div class="absolute inset-0 -z-10">

        <img
            src="{{ asset('images/contact-banner.webp') }}"
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

                HEALTHCARE CAREER SUPPORT

            </span>


            <!-- MAIN TITLE -->
            <h1 class="mt-6 max-w-4xl text-[36px] font-extrabold leading-tight text-white sm:text-4xl md:text-5xl lg:text-[58px]">

                Your Healthcare Journey

                <span class="text-[#65DED0]">
                     Starts Here
                </span>

            </h1>


            <!-- DESCRIPTION -->
            <p class="mt-5 max-w-2xl text-sm leading-7 text-white/90 md:text-base lg:text-lg">

                Have questions about healthcare jobs, career guidance or professional opportunities? Connect with our team and get the support you need to take your next career step.

            </p>


           

        </div>

    </div>

</section>



{{-- =====================================================
     CONTACT SECTION
===================================================== --}}

<section class="bg-[#F1F5F9] px-5 py-9 md:py-11">

    <div class="mx-auto max-w-7xl px-3 md:px-8">

        <!-- Section heading -->
        <div class="mb-7">

            <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                GET IN TOUCH
            </p>

            <h2 class="mt-2 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                We'd Love to Hear From You
            </h2>

            <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">
                Connect with our team for assistance with healthcare career opportunities and enquiries.
            </p>

        </div>



        <!-- MAIN GRID -->
        <div class="grid grid-cols-1 items-start gap-6 lg:grid-cols-12">


            {{-- =====================================================
                 LEFT COLUMN - CONTACT CARDS
            ====================================================== --}}

            <div class="lg:col-span-5">


                <!-- FIRST ROW: CALL + EMAIL -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">


                    <!-- CALL CARD -->
                    <div class="flex min-h-[145px] items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-[#13A89E] hover:shadow-md">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#E3F3F2] text-lg text-[#138F91]">

                            <i class="fa-solid fa-phone"></i>

                        </div>

                        <div class="min-w-0">

                            <h3 class="text-base font-extrabold text-[#243B63]">
                                Call Us
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Talk to our support team.
                            </p>

                            <a href="tel:+919876543210"
                               class="mt-2 inline-block break-words text-sm font-bold text-[#138F91] hover:text-[#243B63]">
                                +91 98765 43210
                            </a>

                        </div>

                    </div>



                    <!-- EMAIL CARD -->
                    <div class="flex min-h-[145px] items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-[#13A89E] hover:shadow-md">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#E3F3F2] text-lg text-[#138F91]">

                            <i class="fa-solid fa-envelope"></i>

                        </div>

                        <div class="min-w-0">

                            <h3 class="text-base font-extrabold text-[#243B63]">
                                Email Us
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Send your questions anytime.
                            </p>

                            <a href="mailto:info@example.com"
                               class="mt-2 inline-block break-all text-sm font-bold text-[#138F91] hover:text-[#243B63]">
                                info@example.com
                            </a>

                        </div>

                    </div>

                </div>



                <!-- SECOND ROW: LOCATION + SOCIAL -->
                <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">


                    <!-- LOCATION CARD -->
                    <div class="flex min-h-[145px] items-center gap-3 rounded-xl border border-gray-200 bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-[#13A89E] hover:shadow-md">

                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-[#E3F3F2] text-lg text-[#138F91]">

                            <i class="fa-solid fa-location-dot"></i>

                        </div>

                        <div class="min-w-0">

                            <h3 class="text-base font-extrabold text-[#243B63]">
                                Our Location
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-gray-500">
                                Connect with our team.
                            </p>

                            <p class="mt-2 text-sm font-bold leading-5 text-[#138F91]">
                                Bengaluru, Karnataka, India
                            </p>

                        </div>

                    </div>



                    <!-- SOCIAL CARD -->
                    <div class="flex min-h-[145px] flex-col justify-center rounded-xl border border-gray-200 bg-white p-4 transition duration-300 hover:-translate-y-1 hover:border-[#13A89E] hover:shadow-md">

                        <h3 class="text-base font-extrabold text-[#243B63]">
                            Follow Us
                        </h3>

                        <p class="mt-1 text-xs leading-5 text-gray-500">
                            Stay connected with us.
                        </p>


                        <div class="mt-4 flex flex-wrap gap-2">

                            <a href="https://www.facebook.com/"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="Facebook"
                               class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E3F3F2] text-sm text-[#138F91] transition hover:bg-[#138F91] hover:text-white">

                                <i class="fa-brands fa-facebook-f"></i>

                            </a>


                            <a href="https://www.instagram.com/"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="Instagram"
                               class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E3F3F2] text-sm text-[#138F91] transition hover:bg-[#138F91] hover:text-white">

                                <i class="fa-brands fa-instagram"></i>

                            </a>


                            <a href="https://www.linkedin.com/"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="LinkedIn"
                               class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E3F3F2] text-sm text-[#138F91] transition hover:bg-[#138F91] hover:text-white">

                                <i class="fa-brands fa-linkedin-in"></i>

                            </a>


                            <a href="https://www.youtube.com/"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="YouTube"
                               class="flex h-9 w-9 items-center justify-center rounded-lg bg-[#E3F3F2] text-sm text-[#138F91] transition hover:bg-[#138F91] hover:text-white">

                                <i class="fa-brands fa-youtube"></i>

                            </a>

                        </div>

                    </div>

                </div>



                <!-- SUPPORT CARD BELOW -->
                <div class="mt-4 rounded-xl bg-gradient-to-r from-[#243B63] to-[#138F91] p-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-white/15 text-lg text-white">

                            <i class="fa-solid fa-headset"></i>

                        </div>

                        <h3 class="text-base font-extrabold text-white">
                            Need Career Assistance?
                        </h3>

                    </div>

                    <p class="mt-3 text-sm leading-6 text-white/80">
                        Our team is ready to help you with healthcare jobs, career guidance and professional resources.
                    </p>

                </div>

            </div>



            {{-- =====================================================
                 RIGHT COLUMN - COMPACT CONTACT FORM
            ====================================================== --}}

            <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm md:p-7 lg:col-span-7">


                <!-- Form heading -->
                <div class="mb-5">

                    <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                        SEND US A MESSAGE
                    </p>

                    <h2 class="mt-2 text-xl font-extrabold text-[#243B63] md:text-2xl">
                        Get In Touch With Our Team
                    </h2>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        Fill out the form below and our team will get back to you as soon as possible.
                    </p>

                </div>



                <!-- SUCCESS MESSAGE -->
                <div id="form-success"
                     class="mb-5 hidden rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-700">

                    <i class="fa-solid fa-circle-check mr-2"></i>

                    Thank you! Your message has been submitted successfully.

                </div>



                <!-- CONTACT FORM -->
                <form
                    action="https://formsubmit.co/your-email@example.com"
                    method="POST"
                    class="space-y-4"
                >

                    <!-- FormSubmit settings -->
                    <input type="hidden" name="_subject" value="New Contact Enquiry - Vaidyog">

                    <input type="hidden" name="_template" value="table">

                    <input type="hidden" name="_captcha" value="true">

                    <input type="hidden" name="_next" value="{{ url('/contact') }}?submitted=1">

                    <!-- Spam protection -->
                    <input type="text" name="_honey" class="hidden" tabindex="-1" autocomplete="off">



                    <!-- NAME + EMAIL -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                        <div>

                            <label for="name" class="mb-2 block text-sm font-bold text-[#243B63]">
                                Full Name <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your full name"
                                maxlength="100"
                                autocomplete="name"
                                required
                                class="w-full rounded-lg border border-gray-200 bg-[#F8FAFC] px-4 py-3 text-sm text-gray-700 outline-none transition placeholder:text-gray-400 focus:border-[#138F91] focus:bg-white focus:ring-2 focus:ring-[#138F91]/10"
                            >

                        </div>


                        <div>

                            <label for="email" class="mb-2 block text-sm font-bold text-[#243B63]">
                                Email Address <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                maxlength="150"
                                autocomplete="email"
                                required
                                class="w-full rounded-lg border border-gray-200 bg-[#F8FAFC] px-4 py-3 text-sm text-gray-700 outline-none transition placeholder:text-gray-400 focus:border-[#138F91] focus:bg-white focus:ring-2 focus:ring-[#138F91]/10"
                            >

                        </div>

                    </div>



                    <!-- PHONE + SUBJECT -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                        <div>

                            <label for="phone" class="mb-2 block text-sm font-bold text-[#243B63]">
                                Phone Number
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="Enter your phone number"
                                maxlength="20"
                                autocomplete="tel"
                                class="w-full rounded-lg border border-gray-200 bg-[#F8FAFC] px-4 py-3 text-sm text-gray-700 outline-none transition placeholder:text-gray-400 focus:border-[#138F91] focus:bg-white focus:ring-2 focus:ring-[#138F91]/10"
                            >

                        </div>


                        <div>

                            <label for="subject" class="mb-2 block text-sm font-bold text-[#243B63]">
                                Subject <span class="text-red-500">*</span>
                            </label>

                            <select
                                id="subject"
                                name="subject"
                                required
                                class="w-full rounded-lg border border-gray-200 bg-[#F8FAFC] px-4 py-3 text-sm text-gray-700 outline-none transition focus:border-[#138F91] focus:bg-white focus:ring-2 focus:ring-[#138F91]/10"
                            >

                                <option value="">Select Subject</option>

                                <option value="General Enquiry">General Enquiry</option>

                                <option value="Healthcare Jobs">Healthcare Jobs</option>

                                <option value="Career Guidance">Career Guidance</option>

                                <option value="Partnership Enquiry">Partnership Enquiry</option>

                                <option value="Other">Other</option>

                            </select>

                        </div>

                    </div>



                    <!-- MESSAGE -->
                    <div>

                        <label for="message" class="mb-2 block text-sm font-bold text-[#243B63]">
                            Your Message <span class="text-red-500">*</span>
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="3"
                            maxlength="3000"
                            required
                            placeholder="Write your message here..."
                            class="w-full resize-y rounded-lg border border-gray-200 bg-[#F8FAFC] px-4 py-3 text-sm leading-6 text-gray-700 outline-none transition placeholder:text-gray-400 focus:border-[#138F91] focus:bg-white focus:ring-2 focus:ring-[#138F91]/10"
                        ></textarea>

                    </div>



                    <!-- SUBMIT BUTTON -->
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-3 rounded-lg bg-[#13A89E] px-7 py-3 text-sm font-bold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#0D8982]"
                    >

                        Send Message

                        <i class="fa-solid fa-arrow-right"></i>

                    </button>


                    <p class="text-xs leading-5 text-gray-400">
                        Your information will be used only to respond to your enquiry.
                    </p>

                </form>

            </div>

        </div>

    </div>

</section>



{{-- =====================================================
     GOOGLE MAP SECTION
===================================================== --}}

<section class="bg-white py-10 md:py-12">

    <div class="mx-auto max-w-7xl px-8">

        <div class="mb-6 text-center">

            <p class="text-xs font-bold uppercase tracking-widest text-[#138F91]">
                FIND OUR LOCATION
            </p>

            <h2 class="mt-3 text-2xl font-extrabold text-[#243B63] md:text-3xl">
                Visit Our Location
            </h2>

            <p class="mt-2 text-sm leading-6 text-gray-500">
                Find us on the map and connect with our team.
            </p>

        </div>


        <div class="overflow-hidden rounded-xl border border-gray-200 shadow-sm">

            <iframe
                src="https://maps.google.com/maps?q=Bengaluru%2C%20Karnataka%2C%20India&t=&z=12&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Vaidyog location map">
            </iframe>

        </div>

    </div>

</section>



{{-- =====================================================
     SUCCESS MESSAGE SCRIPT
===================================================== --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const params = new URLSearchParams(window.location.search);

    if (params.get('submitted') === '1') {

        const successMessage = document.getElementById('form-success');

        if (successMessage) {

            successMessage.classList.remove('hidden');

            successMessage.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });

        }

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );

    }

});
</script>


@endsection
