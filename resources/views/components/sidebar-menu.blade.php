<!-- Mobile Sidebar -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/25 z-40 hidden transition-opacity duration-300 ease-in-out">
</div>

<div id="sidebar"
  class="fixed top-0 right-0 w-64 h-full bg-white dark:bg-gray-800 z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
  <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
    <a href="/">
      <img src="{{ Vite::asset('resources/images/logo.webp') }}" alt="logo" class="w-10 h-10">
    </a>
    <button id="sidebar-close"
      class="focus:outline-none cursor-pointer bg-blue-accent/50 p-2 rounded-xl hover:bg-blue-accent/25 transition-colors duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <div class="p-4">
    <div class="flex flex-col space-y-4">
      <a href="#" class="py-2 hover:text-blue-accent transition-colors">Job</a>
      <a href="#" class="py-2 hover:text-blue-accent transition-colors">Careers</a>
      <a href="#" class="py-2 hover:text-blue-accent transition-colors">Salaries</a>
      <a href="#" class="py-2 hover:text-blue-accent transition-colors">Companies</a>
    </div>

    <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-700">
      @auth
        <div class="flex flex-col space-y-4">
          <a href="/jobs/create"
            class="px-3 bg-blue-accent rounded-xl py-2 text-center hover:bg-blue-700 transition-colors">
            Post a Job
          </a>
          <form method="POST" action="/logout">
            @csrf
            @method('DELETE')
            <button class="cursor-pointer w-full text-left py-2">Log Out</button>
          </form>
        </div>
      @endauth

      @guest
        <div class="flex flex-col space-y-4">
          <a href="/register" class="py-2 hover:text-blue-accent transition-colors">Sign Up</a>
          <a href="/login" class="py-2 hover:text-blue-accent transition-colors">Log In</a>
        </div>
      @endguest
    </div>
  </div>
</div>
