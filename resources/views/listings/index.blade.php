
<x-layout>

@include('partials._hero')

@include('partials._search')


<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless (count($listings) == 0)

@foreach ($listings as $listing)

<x-listing-card :listing="$listing"/>   {{--Calling the component here--}}

@endforeach

@else
<p> No listing found </p>

</div>
@endunless

<div class="mt-6 p-4">

{{$listings->links()}}   {{--Gives us link to view other pages--}}

</div>

</x-layout>