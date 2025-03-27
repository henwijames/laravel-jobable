@props(['employer', 'width' => 90])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="logo"
  class="rounded-xl aspect-1/1 object-contain bg-blue-accent/5" width="{{ $width }}"
  onerror="this.onerror=null; this.src='{{ asset($employer->logo) }}';">
