@extends('layouts.app')

@section('content')
    <div class="flex justify-around mt-16">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">MY STORY</h5>
        <a href="{{ route('histoire.create') }}">
            <button type="button"
                class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                + New Story
            </button>
        </a>
    </div>
    @foreach ($histoires as $histoire)
        <div
            class="max-w-screen-lg mx-auto bg-white dark:bg-zinc-900 dark:text-white p-6 rounded-md shadow-md mt-10 flex justify-between ">
         <div>
            
            <a href="{{ route('histoire.show', $histoire->id) }}"
                class="flex flex-col items-center  my-3  rounded-lg  md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-zinc-900 dark:hover:bg-zinc-700 ">
                <img class="object-cover w-full h-32 md:w-24 md:h-auto md:rounded-none md:rounded-l-lg"
                    src="{{ asset('storage/'. $histoire->image) }}" alt="">
                <div class="flex flex-col justify-between p-2 leading-normal">
                    <h5 class="mb-1 text-xl font-serif tracking-tight text-gray-900 dark:text-white"> {{ $histoire->title }}
                    </h5>
                    <h5 class="mb-2 font-normal text-gray-700 dark:text-gray-400">{{ $histoire->created_at }} </h5>
                </div>
            </a>

            <a href="{{ route('histoire.edit', $histoire->id) }}"> <button type="button"
                    class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                    Update
                </button>
            </a>
                        {{-- <a href="{{route('chapitre.create' , $histoire->id)}}">        <button type="button" class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                     Start Wririting
                    </button></a> --}}
            <a href="{{ route('chapitre.show', $histoire->id) }}"> 
                <button type="button"
                    class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                    Start Wririting
                </button>
            </a>

            <button onclick="window.location.href = '/chapitre/create?id=<?= $histoire->id ?>'" type="button"
                class=" h-10  focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                + New chapter
            </button>
         </div>
        </div>
    @endforeach
@endsection
