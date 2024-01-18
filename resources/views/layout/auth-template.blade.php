<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta name="author" content="Themesberg">
<meta name="generator" content="Hugo 0.111.3">

<title>{{ env('APP_NAME') }}</title>

<link rel="canonical" href="https://flowbite-admin-dashboard.vercel.app/authentication/sign-in/">



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://flowbite-admin-dashboard.vercel.app//app.css">
<link rel="apple-touch-icon" sizes="180x180" href="https://flowbite-admin-dashboard.vercel.app/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://flowbite-admin-dashboard.vercel.app/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://flowbite-admin-dashboard.vercel.app/favicon-16x16.png">
<link rel="icon" type="image/png" href="https://flowbite-admin-dashboard.vercel.app/favicon.ico">
<link rel="manifest" href="https://flowbite-admin-dashboard.vercel.app/site.webmanifest">
<link rel="mask-icon" href="https://flowbite-admin-dashboard.vercel.app/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@">
<meta name="twitter:creator" content="@">
<meta name="twitter:title" content="Tailwind CSS Sign in/Login Page - Flowbite">
<meta name="twitter:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta name="twitter:image" content="https://flowbite-admin-dashboard.vercel.app/images/og-image.png">

<!-- Facebook -->
<meta property="og:url" content="https://flowbite-admin-dashboard.vercel.app/authentication/sign-in/">
<meta property="og:title" content="Tailwind CSS Sign in/Login Page - Flowbite">
<meta property="og:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
<meta property="og:type" content="article">
<meta property="og:image" content="https://flowbite-admin-dashboard.vercel.app/images/og-image.png">
<meta property="og:image:type" content="image/png">






<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
  </head>
  <body class="bg-gray-50 dark:bg-gray-800">
    


    



<main class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
    <a href="https://flowbite-admin-dashboard.vercel.app/" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
        <img src="https://flowbite-admin-dashboard.vercel.app/images/logo.svg" class="mr-4 h-11" alt="FlowBite Logo">
        <span>Flowbite</span>  
    </a>
    <!-- Card -->
    @yield('content')
</div>

</main>





    <script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
  </body>
</html>



