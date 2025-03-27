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
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div>
        <a href="/">
          <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="logo" class=" w-10 h-10">
        </a>
      </div>
      <div class="space-x-6">
        <a href="#">Job</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
      </div>
      @auth
        <div>
          <a href="/jobs/create" class="px-3 bg-blue-accent rounded-xl py-1">
            Post a Job
          </a>
        </div>
      @endauth
      @guest
        <div class="space-x-6">
          <a href="/register">Sign Up</a>
          <a href="/login">Log In</a>
        </div>
      @endguest
    </nav>
    <main class="mt-10 max-w-[1200px] mx-auto">
      {{ $slot }}
    </main>
  </div>
</body>

</html>
