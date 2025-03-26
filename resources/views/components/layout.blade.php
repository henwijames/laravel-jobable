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

<body class="bg-black text-white font-noto">
  <div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
      <div>
        <a href="/">
          <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="logo" class=" w-10 h-10">
        </a>
      </div>
      <div class="space-x-6 font-bold">
        <a href="#">Job</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
      </div>
      <div>
        <a href="">
          Post a Job
        </a>
      </div>
    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">
      {{ $slot }}
    </main>
  </div>
</body>

</html>
