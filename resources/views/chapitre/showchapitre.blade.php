@extends('layouts.app')
@php
use Illuminate\Support\Facades\Auth;
@endphp

@section('content')
<div class="flex flex-col justify-center items-center p-10 leading-normal  ">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{$chapitre->title}} </h5>
    <div class="flex mt-24 mx-10" >
        @auth
        <img src="{{ url("storage/".$user['profile_picture'] ) }}" alt="Current Profile Picture" class="w-10 h-10 rounded-full">
      @endauth

          <h6 class="mb-2 mx-3 mt-1 text-lg  text-gray-900 dark:text-white">by {{ $user["name"] }}</h6>
      </div>
      <div class="w-[70%]">
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <p class="mb-3 text-gray-500 dark:text-gray-200 ">{{$chapitre->description}}</p>



      </div>
      {{-- <section id="content-rp" class="relative mx-auto  p-4 max-w-lg dark:bg-zinc-900 bg-cover border border-black outline outline-1 outline-offset-[-11px] outline-gray-700">
        <section id="content-header" class="relative w-full h-[250px]">
          <div class="absolute z-10 w-full h-full bg-[rgba(57,55,91,0.7)] outline outline-1 outline-green-400"></div>
          <figure class="w-full h-full grayscale-[70%]">
            <img src="https://i.imgur.com/nJsAQ7u.jpg" alt="IMG HEADER" class="w-full h-full object-cover">
          </figure>
          <section id="content-quote" class="absolute z-20 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-56 text-right">
            <div class="absolute z-[-1] top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full p-5 bg-[url('https://i.imgur.com/PPFRL6r.png')] bg-cover opacity-80 border border-black"></div>
            <h1 class="m-0 font-serif text-xs font-normal uppercase tracking-wide leading-4 text-gray-50 drop-shadow-[0.5px_0px_#A3F7BF]">{{$chapitre->title}}</h1>
            <h2 class="mt-2 font-serif text-[9px] font-normal uppercase tracking-wide leading-4 text-gray-50">{{ $user["name"] }}</h2>
          </section>
          <section id="content-gif-header" class="absolute z-20 bottom-[-25px] left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full bg-[rgba(0,0,0,0.85)] border-2 border-green-400">
            <figure class="relative top-1/2 left-1/2 transform -translate-x-full -translate-y-[70%] w-20 h-20 rounded-full overflow-hidden border-2 border-gray-700">
              <img src="{{ url("storage/".$user['profile_picture'] ) }}" alt="GIF HEADER" class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-full grayscale">
            </figure>
          </section>
        </section>
        <article id="content-text" class="bg-[rgba(247,247,247,0.85)] my-0 border-t-4 border-b-4 border-green-400">
          <p class="p-7 font-serif text-[12px] font-normal leading-4 text-justify text-gray-600">
            {{$chapitre->description}}
          </p>
        </article>
        <section id="content-footer" class="relative flex w-full h-[100px]">
          <!-- Footer content here -->
        </section>
      </section> --}}


@endsection
