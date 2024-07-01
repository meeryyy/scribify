
@extends('layouts.app')
@php
use Illuminate\Support\Facades\Auth;
@endphp


@section('content')

{{--
<div class="flex flex-col md:flex-row pt-8 pb-8  justify-center bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:border-none dark:bg-zinc-900 dark:hover:bg-zinc-800 w-full">
    <div class=" h-[270px] w-[190px] flex flex-col justify-end">
        <img class="h-full rounded-lg" src="{{ asset('storage/'.$histoire->image) }}" alt="">
    </div>
        <div class="flex flex-col justify-center items-center p-10 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{$histoire->title}} </h5>






                    <h6 class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-transparent   hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white ">
              {{ $chaptersCount }} chapter
            </h6>




    </div>
</div>
<div class="flex mt-16 mx-10" >
  @auth
  <img src="{{ url("storage/".$user['profile_picture'] ) }}" alt="Current Profile Picture" class="w-10 h-10 rounded-full">
@endauth

    <h6 class="mb-2 mx-3 mt-1 text-lg  text-gray-900 dark:text-white">{{ $user["name"] }}</h6>
</div>
<div class="mt-5  mx-10">
    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300"> {{$histoire->Categorie->name}} </span>
    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300"> {{$histoire->Langue->name}} </span>

</div>
<div  class="w-[300px] h-[400px] mt-8 mx-8">
    <p class="text-gray-700 dark:text-zinc-50">
        {{$histoire->description}}
    </p>
</div>



<div class="  w-1/2 mx-7   text-sm font-medium  text-gray-700 border border-gray-200 rounded-lg dark:bg-zinc-900  dark:border-gray-600 dark:text-white">
  @foreach($chapitres as $chapitre)
  <div class="flex justify-between h-14 block w-full p-5  text-gray-600 bg-white border-b border-gray-200 rounded-t-lg cursor-pointer  dark:text-white dark:bg-zinc-900 dark:hover:bg-zinc-700">
  <a href="{{route('chapitre.showchapitre' , $chapitre->id)}}" aria-current="true"  class=" ">
    {{ $chapitre->title }}
  </a>
  <h5 class="mb-2 text-base font-thin tracking-tight text-gray-900 dark:text-white">{{$chapitre->created_at}} </h5>
  </div>

  @endforeach

</div> --}}


<section>
    <div class="relative w-4/5 max-w-3xl min-h-[400px] mx-auto bg-zinc-900 rounded-3xl p-10">
        <div class="relative flex items-center text-white rounded-3xl overflow-hidden">
            @auth
            <img class="h-28 w-28 rounded-full m-6 border-4 border-gray-100 bg-gray-100 z-10" src="{{ url("storage/".$user['profile_picture'] ) }}" alt="Profile Image">
            @endauth
            <div class="ml-6 uppercase text-sm font-bold tracking-wide">
            <span class="font-nunito text-4xl font-extrabold text-gray-100 leading-tight"> {{$histoire->title}}</span><br/>
            <span>{{ $user["name"] }}</span>
          </div>
        </div>
        <div class="relative flex bg-gray-100 p-10 mt-10 rounded-3xl">
          <div class="flex-1 space-y-4">
            <span><b class=" text-fuchsia-900 rounded px-2 py-1 text-xs">Catégorie :</b>  {{$histoire->Categorie->name}} </span><br/>
            <span><b class=" text-fuchsia-900 rounded px-2 py-1 text-xs">Chapitre :</b> {{ $chaptersCount }}</span><br/>
            <span><b class=" text-fuchsia-900 rounded px-2 py-1 text-xs">Langue</b> {{$histoire->Langue->name}}</span><br/>
            <span><b class=" text-fuchsia-900 rounded px-2 py-1 text-xs">Characters</b> {{$histoire->characters}} </span><br/>
            <span><b class=" text-fuchsia-900 rounded px-2 py-1 text-xs">Tags</b> {{$histoire->Tags}} </span><br/>
            <span><b class=" text-fuchsia-900 rounded px-2 py-1 text-xs">Copyright</b> {{$histoire->Copyright}} </span>
          </div>
          <div class="flex-none w-48 h-48 bg-cover bg-center rounded-3xl shadow-lg" style="background-image: url('{{ asset('storage/'.$histoire->image) }}');"></div>
        </div>
        <div class="bg-gray-100 p-10 mt-10 rounded-3xl">
          <div class=" text-fuchsia-900 text-center p-6 rounded-t-3xl">
            <b class="block uppercase text-xl tracking-wider font-nunito">Description</b>
          </div>
          <div class="p-6 text-gray-800">
            <p>{{$histoire->description}}</p>
          </div>
        </div>
        <div class="bg-gray-100 p-10 mt-10 rounded-3xl">
          <div class="relative">
            <b class="absolute top-0 right-10 uppercase text-xl font-nunito italic text-fuchsia-900">Chapter One</b>
          </div>

          <div class="mt-8 text-gray-800 space-y-4">
            <p>

                @isset($premierChapitre->description)
                {{ \Illuminate\Support\Str::limit($premierChapitre->description, 150, ) }}
                @endisset
            </p>

            {{-- @isset($premierChapitre->id)
            <a href="{{route('chapitre.showchapitre' , $premierChapitre->id)}}">read more </a>
            @endisset --}}


     @if ( isset($premierChapitre->id))
     <a href="{{route('chapitre.showchapitre' , $premierChapitre->id)}}">read more </a>

     @else
     @endif


            <p class="text-4xl text-center  font-nunito italic text-fuchsia-900">All chapters</p>
                @foreach($chapitres as $chapitre)
                <hr class="my-4 border-t-4 border-gradient-to-br from-green-200 to-orange-200 rounded-full">
                <div class="flex justify-between h-14 block w-full p-5 ">
                <a href="{{route('chapitre.showchapitre' , $chapitre->id)}}" aria-current="true"  class=" ">
                  {{ $chapitre->title }}
                </a>
                <h5 class="mb-2 text-base font-thin tracking-tight text-gray-900 ">{{$chapitre->created_at}} </h5>
                </div>

                @endforeach

          </div>
        </div>


      </div>
</section>







@endsection






