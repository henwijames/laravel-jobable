<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jobable</title>
  <link rel="icon" href="{{ Vite::asset('public/favicon.ico') }}" type="image/x-icon">
  @vite(['resources/js/app.js'])
  @vite(['resources/css/app.css'])
</head>

<body class="bg-background text-white font-hanken pb-10">
  <div class="max-w-[1200px] mx-auto px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10 px-4 md:px-6">
      <div class="flex items-center">
        <a href="/">
          <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="logo" class="w-10 h-10">
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:flex space-x-6 mr-auto ml-9">
        <a href="#" class="hover:text-blue-300 transition-colors">Job</a>
        <a href="#" class="hover:text-blue-300 transition-colors">Careers</a>
        <a href="#" class="hover:text-blue-300 transition-colors">Salaries</a>
        <a href="#" class="hover:text-blue-300 transition-colors">Companies</a>
      </div>

      <!-- Desktop Auth Buttons -->
      @auth
        <div class="hidden md:flex space-x-6 font-bold items-center">
          <a href="/jobs/create" class="px-3 bg-blue-accent rounded-xl py-1 hover:bg-blue-700 transition-colors">
            Post a Job
          </a>
          <form method="POST" action="/logout">
            @csrf
            @method('DELETE')
            <button class="cursor-pointer">Log Out</button>
          </form>
        </div>
      @endauth

      @guest
        <div class="hidden md:flex space-x-6">
          <a href="/register" class="hover:text-blue-accent transition-colors">Sign Up</a>
          <a href="/login" class="hover:text-blue-accent transition-colors">Log In</a>
        </div>
      @endguest

      <!-- Mobile Menu Button -->
      <button id="sidebar-toggle"
        class="md:hidden focus:outline-none cursor-pointer bg-blue-accent/50 p-2 rounded-xl hover:bg-blue-accent/25 transition-colors duration-300"
        aria-label="Toggle menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </nav>

    <x-sidebar-menu />

    <main class="mt-10 max-w-[1200px] mx-auto">
      {{ $slot }}
    </main>
  </div>
</body>

</html>
