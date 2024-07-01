{{-- @extends('layouts.app') 
@section('content')

<div class="flex justify-around mt-16 mb-20">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Table of content</h5>
    <a href="{{ route('chapitre.create') }}">
        <button type="button" class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
            + New Story
        </button>
    </a>
</div>


@foreach ($chapitres as $chapitre)
    

<div class="w-full flex justify-center">
    <div class="h-28 flex justify-between w-1/2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-zinc-900 dark:border-none">
      <a href="#" class="block min-w-80 bg-white dark:bg-zinc-900 dark:border-none dark:hover:bg-zinc-700">
        <h5 class="mb-2 text-lg font-extrabold tracking-tight text-gray-900 dark:text-white"> {{$chapitre->title}} </h5>
        <h5 class="mb-2 text-base font-thin tracking-tight text-gray-900 dark:text-white">{{$chapitre->created_at}} </h5>
      </a>
  
      <a href="">
        <button type="button" class="mt-3 focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
          Delete Part
        </button>
      </a>
    </div>
  </div>
  @endforeach

@endsection --}}









