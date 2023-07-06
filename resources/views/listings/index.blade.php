<x-layout>

@include('partials._hero')
@include('partials._search')

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($listings) == 0)
    @foreach($listings as $listing)
    <!--This is for accessing the listing-card component-->
    <x-listing-card :listing="$listing" /> 
    @endforeach

    @else
      <p>No listings Found</p>
    @endunless

  </div>

  <div class="mt-6 p-4">
    {{ $listings->links() }} {{-- This is to create the Pagination links --}}
  </div>
</x-layout>