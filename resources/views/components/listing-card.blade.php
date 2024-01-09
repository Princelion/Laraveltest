 
@props(['listing'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing -> logo ? asset('storage/' . $listing->logo): asset('
            /images/logos.png')}}"  alt=""/>  

            {{--Above code explained:if there is a listing logo then we will use the asste hlper to load that--}}
            {{--The path will be storage and concatnate , the path in db is listing logo--}}
            {{--if it is not there we  use the asset--}}


        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}"> {{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

            
            <x-listing-tags :tagsCsv="$listing->tags" />   {{--we call the tag component--}}


            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>