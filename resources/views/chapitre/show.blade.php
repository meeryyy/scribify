{{-- @extends('layouts.app') 
@php
use Illuminate\Support\Facades\Auth;
@endphp 

@section('content')
<div class="flex flex-col justify-center items-center p-10 leading-normal">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> hellloooo world </h5>
    <div class="flex mt-24 mx-10" >
        @auth
        <img src="{{ Auth::user()->getImageProfil() }}" alt="Current Profile Picture" class="w-10 h-10 rounded-full">
      @endauth
      
          <h6 class="mb-2 mx-3 mt-1 text-lg  text-gray-900 dark:text-white">by {{ Auth::user()->name }}</h6>
      </div>
      <div class="w-[70%]">
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <p class="mb-3 text-gray-500 dark:text-gray-200">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>

      </div>


@endsection --}}


@extends('layouts.app') 
@section('content')

<div class="flex justify-around mt-16 mb-20">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Table of content</h5>
        {{-- <button onclick="window.location.href = '/chapitre/create?id=<?=$histoire->id?>'"  type="button" class=" h-10  focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
            + New Story
        </button> --}}
        {{-- <a href="{{route('chapitre.create' , ['id'=>$chapitre->id])}}">        <button type="button" class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
            Update
        </button></a> --}}

</div>


@foreach ($chapitres as $chapitre)
    

<div class="w-full flex justify-center">
    <div class="h-28 flex justify-between w-1/2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-zinc-900 dark:border-none">
      <a href="{{route('chapitre.showchapitre',$chapitre->id)}}" class="block min-w-80 bg-white dark:bg-zinc-900 dark:border-none dark:hover:bg-zinc-700">
        <h5 class="mb-2 text-lg font-extrabold tracking-tight text-gray-900 dark:text-white"> {{$chapitre->title}} </h5>
        <h5 class="mb-2 text-base font-thin tracking-tight text-gray-900 dark:text-white">{{$chapitre->created_at}} </h5>
      </a>
      <a href="{{route('chapitre.edit' , $chapitre->id)}}">        <button type="button" class="mt-3 focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        Update
    </button></a>
  
      <a href="">
        <button type="button" class="mt-3 focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
          Delete Part
        </button>
      </a>
    </div>
  </div>
  @endforeach

@endsection








