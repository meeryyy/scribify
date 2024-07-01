{{-- @extends('layouts.app')
@section('content')



    <div id="default-carousel" class="mx-auto mt-12 w-2/3 relative items-center" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
              <a href="{{url('histoire/8')}}">  <img src="images/4carousel.png" class="absolute block rounded-2xl w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."></a>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
               <a href="{{url('histoire/7')}}"> <img src="images/2carousel.png" class="absolute block w-full rounded -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."></a>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="bg-zinc-200 w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="bg-zinc-200 w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    <div class="mx-48 mt-6">
    <h5 class="mb-2   text-4xl text-gray-700 dark:text-gray-200">Welcome home , {{ Auth::user()->name }} !</h5>

    <div class="">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

          <div id="wrapper" class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">


            <!-- More products... -->
          </div>
        </div>
      </div>

</div>




<script>

let wrapper = document.getElementById('wrapper')
    // Use the fetch API to make a GET request to the JSON endpoint
    fetch('http://127.0.0.1:8000/getHistoires')
        .then(response => response.json())
        .then(data => {

          data.map(value => {
            wrapper.innerHTML += `
        <div class="group relative">
              <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="http://127.0.0.1:8000/storage/${value.image}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
              </div>
              <div class="mt-4 flex justify-between">
                <div>
                  <h3 class="text-sm text-gray-700">
                    <a href="histoire/${value.id}">
                      <span aria-hidden="true" class="absolute inset-0"></span>
                      ${value.title}
                    </a>
                  </h3>

                </div>

              </div>
            </div>
        `
          })




        })
        .catch(error => console.error('Error:', error));
</script>







@endsection
 --}}


<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>



        input{
            caret-color: #5b0a58 ;
        }
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
            color: #5b0a58
        }
        [type='checkbox'], [type='radio'] {
            color: #5b0a58
        }

        .carousel-open {
            color: #5b0a58;
        }
        .carousel-open:focus     {
            color: #5b0a58;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #5b0a58;
            /*Set to match the Tailwind colour you want the active one to be */
        }









    </style>


</head>




 <body class="bg-white text-gray-600 dark:text-zinc-200 dark:bg-zinc-900 work-sans leading-normal text-base tracking-normal">

     <button id="switchark" class="dark:text-zinc-900">change</button>
    <div class="min-h-screen bg-gray-100 dark:bg-zinc-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white w-full dark:bg-zinc-900 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
     <!--Nav-->



     <div class="carousel bg-white relative container mx-auto" style="max-width:1600px;">
         <div class="carousel-inner relative overflow-hidden w-full">
             <!--Slide 1-->
             <input class="carousel-open " type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
             <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <a href="{{url('histoire/7')}}">
                 <div class=" h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('images/2carousel.png');">



                 </div>
                 </a>
             </div>
             <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
             <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

             <!--Slide 2-->
             <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
             <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <a href="{{url('histoire/8')}}">
                 <div class=" h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('images/4carousel.png');">



                 </div>
                </a>
             </div>
             <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
             <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

             <!--Slide 3-->
             <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
             <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <a href="{{url('histoire/9')}}">
                 <div class=" h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('images/3carousel.png');">



                 </div>
                </a>

             </div>
             <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
             <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

             <!-- Add additional indicators for each slide-->
             <ol class="carousel-indicators">
                 <li class="inline-block mr-3">
                     <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                 </li>
                 <li class="inline-block mr-3">
                     <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                 </li>
                 <li class="inline-block mr-3">
                     <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                 </li>
             </ol>

         </div>
     </div>

     <!--

 Alternatively if you want to just have a single hero

 <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">

     <div class="container mx-auto">

         <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
             <h1 class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</h1>
             <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"  >products</a>

         </div>

       </div>

 </section>

 -->


     <section class="bg-white py-8 dark:bg-zinc-900 dark:text-zinc-200">
        <div class="text-center mt-10 ">
            <h5 class="mb-2    text-4xl text-gray-700 dark:text-gray-200">Welcome home , {{ Auth::user()->name }} !</h5>
           </div>


             {{-- <div class="w-full z-30 px-6 py-1 mx-5 mt-5">  >
                 <div class="w-full container mx-auto   mt-0 px-2 py-3">

                     <h6 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 dark:text-zinc-200 text-xl " >
                 Your Story
                     </h6>
             <p class=" text-gray-900 dark:text-zinc-300">Catch up on the stories you write!
            </p>





               </div>
             </div> --}}





















             <div class="container     px-2 py-3 mx-36 mt-5" >
                <h6 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 dark:text-zinc-200 text-xl">
                    Your Story</h6>
                    <p class=" text-gray-900 dark:text-zinc-300 mt-2">Catch up on the stories you write!
                    </p>
             </div>
             <div  id="showmyhistoire" class="container w-full mx-40 flex items-center flex-wrap ">

             </div>


     </section>
     <section class="bg-gray-100 -mt-8 py-8 dark:bg-zinc-900 dark:text-zinc-200 ">
        <div class="container   px-2 py-3 mx-36 " >
            <h6 class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 dark:text-zinc-200 text-xl">
                Scribify original</h6>
                <p class=" text-gray-900 dark:text-zinc-300 mt-2">Catch up on the stories you write!
                </p>
         </div>


         <div class=" mx-auto p-5 sm:p-10 md:p-16  ">

            <div class="rounded overflow-hidden flex flex-col max-w-xl mx-auto">

                <a href="#">
                    <img class="h-96 " src="images/leftbihind.jpg">
                </a>
                <div class="relative -mt-16 px-10 pt-5 pb-16 dark:text-zinc-900 bg-white dark:bg-zinc-300 m-10">
                    <a href="#"
                        class="font-semibold text-lg  hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">The
                        Left Behind-A Maze Runner Fanfic</a>
                    <p class="text-gray-500 text-sm">
                        CURRENTLY UNDER CONSTRUCTION "it's you. it's always been you." She was from Group B. An "original" is what they called her. One of the firsts. She never dreamed they'd escape, not since arriving in their four-walled prison, but somehow they did it. She arrived at a facility, a so-called "Safe Haven". The place Janson said their dreams of being free would finally come true. Her friend Aris, the only boy from her Maze, was skeptical, he never trusted them. She wanted to trust their "saviors" unt...
                    </p>

                </div>

            </div>



        </div>



        <div class="p-1 flex flex-wrap items-center justify-center -mt-32 ">


            <div class="relative pt-10 px-10 flex items-center justify-center">

                <img class="relative w-40 rounded-lg" src="images/image.jpg" alt="">
            </div>


        <div class="relative pt-10 px-10 flex items-center justify-center">

            <img class="relative w-40 rounded-lg" src="images/image3.jpg" alt="">
        </div>


        <div class="relative pt-10 px-10 flex items-center justify-center">
            <img class="relative w-40 rounded-lg" src="images/loveme.jpg" alt="">
        </div>


        <div class="relative pt-10 px-10 flex items-center justify-center">
            <img class="relative w-40 rounded-lg" src="images/image2.jpg" alt="">
        </div>


        <div class="relative pt-10 px-10 flex items-center justify-center">

            <img class="relative w-40 rounded-lg" src="images/image1.jpg" alt="">
        </div>

    </div>



    </div>






     </section>




<script>

    let show = document.getElementById('showmyhistoire')
        // Use the fetch API to make a GET request to the JSON endpoint
        fetch('http://127.0.0.1:8000/getHistoires')
            .then(response => response.json())
            .then(data => {

              data.map(value => {
                show.innerHTML += `

                <div  class="w-full md:w-1/3 xl:w-1/4 p-6 ">
                  <a href="histoire/${value.id}">
                     <img class="hover:grow rounded-lg hover:shadow-lg w-[200px] h-[300px] " src="http://127.0.0.1:8000/storage/${value.image}">
                     <div class="pt-3 flex items-center justify-between">
                         <p class="">
                          ${value.title}
                        </p>

                    </div>
                 </a>
             </div>

            `
              })




            })
            .catch(error => console.error('Error:', error));


            const slider = document.querySelector('.slider');


    </script>




 </body>

 </html>






