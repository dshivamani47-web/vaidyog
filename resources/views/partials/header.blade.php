
<style>
    .menu-active {
    color: #159D94 !important;
}
    </style>


<header class="sticky top-0 z-50 w-full bg-white shadow-sm">

    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="flex items-center justify-between h-20">

            <!-- Website Logo -->
          <a href="{{ url('/') }}" class="flex items-center">
    <img
        src="{{ asset('images/logo (7).webp') }}"
        alt="Vaidyog Logo"
        class="w-auto h-16 object-contain"
    >
</a>

            <!-- Desktop Navigation -->
          <nav class="hidden lg:flex items-center gap-6">

    <!-- Salary Guides -->
    <a href="{{ url('/') }}"
       class="text-sm font-semibold transition
       {{ request()->is('/') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
        Salary Guides
    </a>

    <!-- Careers -->
    <a href="{{ url('/careers') }}"
       class="text-sm font-semibold transition
       {{ request()->is('careers*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
        Careers
    </a>

    <!-- Services -->
    <!-- <a href="{{ url('/ayush') }}"
       class="text-sm font-semibold transition
       {{ request()->is('ayush*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
       Ayush Careers
    </a> -->

    <!-- Products -->
    <a href="{{ url('/cities') }}"
       class="text-sm font-semibold transition
       {{ request()->is('cities*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
       Jobs by City
    </a>

    <!-- Contact -->
    <a href="{{ url('/abroad') }}"
       class="text-sm font-semibold transition
    {{ request()->is('abroad*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
       International Careers
    </a>

    <a href="{{ url('/resume-interview') }}"
       class="text-sm font-semibold transition
    {{ request()->is('resume-interview*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
      Resume & CV Guides
    </a>

    <a href="{{ url('/exams-licensing') }}"
       class="text-sm font-semibold transition
    {{ request()->is('exams-licensing*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
      Exams & Licensing
    </a>

    <a href="{{ url('/blog') }}"
       class="text-sm font-semibold transition
    {{ request()->is('blog*') ? 'menu-active' : 'text-[#464d79] hover:text-[#159D94]' }}">
      Insights
    </a>

</nav>
<div class="hidden lg:block">
    <a href="{{ url('/contact') }}"
       class="inline-block px-6 py-3 rounded-lg text-sm font-semibold text-white transition
       {{ request()->is('contact*') ? 'bg-[#159D94]' : 'bg-[#159D94] hover:bg-[[#159D94]]' }}">
        Get In Touch
    </a>
</div>

            <!-- Mobile Menu Button -->
            <button
                id="menu-toggle"
                type="button"
                aria-label="Toggle navigation"
                aria-expanded="false"
                class="lg:hidden text-3xl text-gray-800">

                ☰

            </button>

        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 py-4">

            <a href="{{ url('/salary') }}"
               class="block py-3 text-gray-700 hover:text-blue-700">
                Salary
            </a>

            <a href="{{ url('/about') }}"
               class="block py-3 text-gray-700 hover:text-blue-700">
                About Us
            </a>

            <a href="{{ url('/services') }}"
               class="block py-3 text-gray-700 hover:text-blue-700">
                Services
            </a>

            <a href="{{ url('/products') }}"
               class="block py-3 text-gray-700 hover:text-blue-700">
                Products
            </a>

            <a href="{{ url('/contact') }}"
               class="block py-3 text-gray-700 hover:text-blue-700">
                Contact
            </a>

            <a href="{{ url('/contact') }}"
               class="inline-block mt-3 bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-lg">
                Get In Touch
            </a>

        </nav>

    </div>

</header>
