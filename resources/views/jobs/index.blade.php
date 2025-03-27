<x-layout>
  <div class="space-y-10">
    <section class="pt-6 text-center">

      <h1 class="font-extrabold text-4xl">Discover more than <span class="text-blue-accent">5000+ Jobs</span></h1>
      <img src="{{ Vite::asset('resources/images/underline.svg') }}" alt="hero" class="mt-2 w-[455px] mx-auto">
      <p class="text-gray-400 mb-8">
        Great platform for the job seeker that searching for new career heights and passionate about startups.
      </p>
      <x-forms.form action="/search">
        <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
      </x-forms.form>
    </section>
    <section class="pt-10">
      <x-section-heading>Featured Jobs</x-section-heading>
      <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach ($featuredJobs as $job)
          <x-job-card :$job />
        @endforeach
      </div>
    </section>
    <section>
      <x-section-heading>Tags</x-section-heading>
      <div class="mt-6 space-x-1">
        @foreach ($tags as $tag)
          <x-tag :$tag />
        @endforeach
      </div>
    </section>
    <section>
      <x-section-heading>Recent Jobs</x-section-heading>
      <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
          <x-job-card-wide :$job />
        @endforeach
      </div>
    </section>
  </div>
</x-layout>
