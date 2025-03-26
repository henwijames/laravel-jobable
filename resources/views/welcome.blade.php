<x-layout>
  <div class="space-y-10">
    <section class="pt-6 text-center flex flex-col justify-center">

      <h1 class="font-extrabold text-4xl">Discover more than <span class="text-blue-accent">5000+ Jobs</span></h1>
      <img src="{{ Vite::asset('resources/images/underline.svg') }}" alt="hero" class="mt-2 w-[455px] mx-auto">
      <p class="text-gray-400">
        Great platform for the job seeker that searching for new career heights and passionate about startups.
      </p>

      <form action="">
        <input type="text" placeholder="Web Developer..."
          class="w-full rounded-xl bg-white/25 border-white/10 px-5 py-4 mt-6 max-w-2xl">
      </form>
    </section>
    <section class="pt-10">
      <x-section-heading>Featured Jobs</x-section-heading>
      <div class="grid lg:grid-cols-3 gap-8 mt-6">

        <x-job-card />
        <x-job-card />
        <x-job-card />
      </div>
    </section>
    <section>
      <x-section-heading>Tags</x-section-heading>
      <div class="mt-6 space-x-1">
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
      </div>
    </section>
    <section>
      <x-section-heading>Recent Jobs</x-section-heading>
      <div class="mt-6 space-y-6">
        <x-job-card-wide />
        <x-job-card-wide />
        <x-job-card-wide />
      </div>
    </section>
  </div>
</x-layout>
