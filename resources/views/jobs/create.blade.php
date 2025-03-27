<x-layout>
  <x-page-heading>
    New Job
  </x-page-heading>

  <x-forms.form method="POST" action="/jobs">
    <x-forms.input label="Title" name="title" placeholder="CEO" />
    <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
    <x-forms.input label="Location" name="location" placeholder="Taal, Batangas" />

    <x-forms.select label="Schedule" name="schedule">
      <option>Full Time</option>
      <option>Part Time</option>
    </x-forms.select>

    <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/co-wanted" />
    <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

    <x-forms.divider />

    <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laravel, reactjs, video" />

    <x-forms.button>Post</x-forms.button>
  </x-forms.form>
</x-layout>
