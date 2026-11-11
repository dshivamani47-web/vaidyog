
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Vaidyog')</title>

    <meta name="description" content="@yield('description', 'Welcome to Vaidyog')">

    <!-- Google Font: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN (No Node.js) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#1D4ED8',
                        secondary: '#0F172A',
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Page Specific Styles -->
    @stack('styles')

</head>

<body class="font-inter antialiased">

    <!-- Website Header -->
    @include('partials.header')

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Website Footer -->
    @include('partials.footer')

    <!-- Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const menuButton = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuButton && mobileMenu) {

                menuButton.addEventListener('click', function () {

                    mobileMenu.classList.toggle('hidden');

                    const isOpen = !mobileMenu.classList.contains('hidden');

                    menuButton.setAttribute('aria-expanded', isOpen);

                    menuButton.innerHTML = isOpen ? '&times;' : '☰';

                });

            }

        });
    </script>

    <!-- Page Specific Scripts -->
    @stack('scripts')

   

</body>
</html>
