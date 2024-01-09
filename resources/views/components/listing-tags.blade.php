@props(['tagsCsv'])  {{--This is to call the tags from the db--}}

@php
     $tags = explode(',', $tagsCsv); //Explode function shows where we will want to split the strings.
@endphp

<ul class="flex">
    @foreach ($tags as $tag) 
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach  
</ul>