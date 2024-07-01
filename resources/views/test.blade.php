{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite + Vue</title>

    @vite(['resources/css/index-D6YOZ1Wq.css', 'resources/js/index-GTf1oZOv.js'])

  </head>
  <body>
    <div id="app"></div>
  </body>
</html> --}}




<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



            {{-- @vite(['resources/css/index-D6YOZ1Wq.css' ,'resources/css/app.css', 'resources/js/app.js', 'resources/js/index-GTf1oZOv.js']) --}}
            @vite(['resources/css/app.css', 'resources/js/app.js'])


<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap");

@font-face {
 font-family: "wild_worldbold";
 src: url("https://assets.codepen.io/756881/wild_world-webfont.woff2")
   format("woff2"),
  url("https://assets.codepen.io/756881/wild_world-webfont.woff") format("woff");
 font-weight: normal;
 font-style: normal;
}

/* @link https://utopia.fyi/type/calculator?c=320,20,1.2,1140,24,1.25,1,0,&s=0.75|0.5|0.25,1.5|2|3|4|6,s-l */

:root {
 --fluid-min-width: 320;
 --fluid-max-width: 1140;

 --fluid-screen: 100vw;
 --fluid-bp: calc(
  (var(--fluid-screen) - var(--fluid-min-width) / 16 * 1rem) /
   (var(--fluid-max-width) - var(--fluid-min-width))
 );
}

@media screen and (min-width: 1140px) {
 :root {
  --fluid-screen: calc(var(--fluid-max-width) * 1px);
 }
}

:root {
 --f-0-min: 18;
 --f-0-max: 20;
 --step-0: calc(
  ((var(--f-0-min) / 16) * 1rem) + (var(--f-0-max) - var(--f-0-min)) *
   var(--fluid-bp)
 );

 --f-1-min: 20;
 --f-1-max: 24;
 --step-1: calc(
  ((var(--f-1-min) / 16) * 1rem) + (var(--f-1-max) - var(--f-1-min)) *
   var(--fluid-bp)
 );
}

* {
 box-sizing: border-box;
}

body {
 background-color: #111;
 font-family: "Open Sans", sans-serif;
 color: white;
 overscroll-behavior: none;
 margin: 0;
 padding: 0;
 font-weight: 300;
 overflow-x: hidden;
 font-size: var(--step-0);
}

section {
 min-height: 100vh;
}

p {
 line-height: 1.35;
}

#content {
 padding: 0 0.75rem;
}

.container {
 max-width: 1100px;
 margin: 0 auto;
 padding: 0 0.5rem;
}

h1,
h2,
h3,
h4,
p {
 margin: 0;
}

.flow--lg > * + * {
 margin-top: 2em;
}

.flow > * + * {
 margin-top: 1em;
}

.title {
 text-align: center;
 display: flex;
 align-items: center;
 justify-content: center;
 flex-direction: column;
 min-height: 50vh;
}

#content {
 overflow: visible;
 width: 100%;
}

.heading {
 position: absolute;
 top: 50vh;
 left: 50%;
 transform: translateX(-50%);
 opacity: 0;
}

h1 {
 font-size: clamp(12px, 8vw, 100px);
 text-align: center;
 line-height: 0.67;
 margin: 0 auto;
 font-family: "wild_worldbold";

 .eyebrow {
  font-family: "Open sans", sans-serif;
  font-size: clamp(12px, 3vw, 40px);
  font-weight: 400;
 }
}

.heading p {
 font-family: "wild_worldbold";
 font-size: 15.5vw;
 font-size: clamp(12px, 15.5vw, 250px);
 text-align: center;
 line-height: 0.67;
 margin: 0;
 text-align: center;
 color: #111;
 -webkit-text-stroke-width: 1.5px;
 -webkit-text-stroke-color: white;
 z-index: -10;
}

.intro,
h2,
h3 {
 font-size: var(--step-1);
 font-weight: 500;
}

.text-container {
 position: relative;
}

.text-container p {
 position: absolute;
 top: 0;
 left: 0;
 right: 0;
 z-index: 999;
 color: transparent;
}

.text-container p:first-child {
 position: absolute;
 top: 0;
 left: 0;
 right: 0;
 z-index: 999;
 color: white;
}

.image-grid {
 position: relative;
 display: grid;
 grid-template-columns: repeat(3, 1fr);
 grid-template-rows: repeat(3, 1fr);
 grid-column-gap: 0.2rem;
 grid-row-gap: 0.2rem;
 width: 70vw;
 margin: 0 auto;
 padding-top: 40vh;
 z-index: -1;

 .image_cont {
  position: relative;
  aspect-ratio: 1/1;
  overflow: hidden;
 }

 img {
  position: absolute;
  top: 0;
  width: 100%;
  height: 150%;
  object-fit: cover;
 }

 .image_cont:nth-child(1) {
  grid-column: 1;
  grid-row: 1;
 }

 .image_cont:nth-child(2) {
  grid-column: 3;
  grid-row: 2;
 }

 .image_cont:nth-child(3) {
  grid-column: 2;
  grid-row: 3;
 }
}

.parallax-images {
 margin-top: 10vh;
 padding: 10rem 1rem;
 display: grid;
 grid-template-columns: repeat(2, 1fr);
 grid-column-gap: 1rem;
 grid-row-gap: 20vh;
 align-items: center;
 justify-items: center;

 .image_cont {
  position: relative;
  height: 80vh;
  overflow: hidden;
 }

 img {
  position: absolute;
  bottom: 0;
  margin: 0 auto;
  height: 140%;
  width: 100%;
  object-fit: cover;
 }

 .parallax-text {
  grid-column: 2;
  grid-row: 1;
 }

 .image_cont:nth-child(2) {
  grid-column: 1 / span 1;
  grid-row: 1;
  width: 100%;
 }

 .image_cont:nth-child(3) {
  grid-column: 2 / span 1;
  grid-row: 2;
 }
}

.spacer {
 min-height: 50vh;
 display: flex;
 align-items: center;
 justify-content: center;
}

.stagger {
 font-size: 8vw;
}

.bars {
 display: flex;
 flex-wrap: wrap;
 column-gap: 4rem;

 .bars-text {
  flex: 1 1 300px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
 }

 .bars-cont {
  flex: 1 1 500px;
  display: flex;
  width: 100%;
  height: 60vh;
  align-items: flex-end;
 }

 .bar {
  border-radius: 10px;
  margin: 2vw;
  text-align: center;
  flex: 1 0 auto;
  font-size: var(--step-0);
  justify-self: flex-end;
  font-family: "wild_worldbold";
  font-size: clamp(16px, 3vw, 36px);
 }
}

.content {
 border-left: solid 1px white;
 padding: 0.5rem 2rem;
}

.staggered {
 display: flex;
 align-items: center;
 flex-wrap: wrap;
 column-gap: 4rem;

 h3 {
  font-family: "wild_worldbold";
  font-size: clamp(16px, 6vw, 80px);
  letter-spacing: 0.03em;
 }

 &_text {
  flex: 1 1 300px;
 }

 &_demo {
  flex: 1 1 500px;
  display: flex;
  align-items: center;
  justify-content: center;
 }
}

.parallax-slab {
 position: relative;
 height: 500px;
 width: 100%;
 max-height: 500px;
 overflow: hidden;

 img {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 180%;
  object-fit: cover;
 }
}

.v-center {
 display: flex;
 align-items: center;
}

.spacer {
 height: 10vh;
}

</style>

    </head>
    {{-- <body class="antialiased bg-white  dark:bg-zinc-900  ">
        <button id="switchark">change</button>
        <nav class="bg-white border-gray-200 dark:bg-zinc-900">
            <div class="  justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('images/scribify.png')}}" alt="" class="w-8 ">
                       <span class="self-center text-2xl font-mono whitespace-nowrap text-black  dark:text-white">SCRIBIFY</span>
            </a>

        <div class=" sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-zinc-900 selection:bg-red-500 selection:text-white ">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-4 text-right mt-7">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        </div>
        </nav>


        <div class="flex flex-col items-center mx-28 my-20    md:flex-row md:max-w-xl   dark:bg-zinc-900 ">

            <div class="flex flex-col justify-between p-2 leading-normal">

        <h1 class="mb-3 text-4xl font-bold leading-none tracking-tight  text-fuchsia-900 md:text-5xl lg:text-6xl dark:text-white">Hi, we're <br> scribify </h1>
        <h1 class=" mt-4 text-2xl font-normal text-black  dark:text-zinc-300">Where Every Tale Finds a Home</h1>
        <p class="text-sm font-normal text-gray-500  dark:text-gray-400 mt-6">Welcome to Scribify, the ultimate platform for collaborative writing. Here, every word matters, and every pen holds the power to weave extraordinary tales. Immerse yourself in a realm where writing becomes a collective adventure. Scribify provides a space where authors come together to breathe life into unique narratives. Join us in this passionate community where stories come alive, one sentence at a time. Ready to write the future with us?.</p>


        <div class="flex justify-between rounded-md shadow-sm mt-10" role="group">
            <a href="{{route('login')}}">        <button type="button" class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-4 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                Start Wririting
            </button></a>
            <a href="{{route('login')}}">        <button type="button" class="focus:outline-none text-white bg-fuchsia-900 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-fuchsia-800 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                Start Reading
            </button></a>
        </div>

            </div>

            <img class="object-cover w-full rounded-t-lg  md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/oursite.png" alt="">
        </div> --}}




        <body class="leading-normal tracking-normal text-white gradient " style="font-family: 'Source Sans Pro', sans-serif;">
            <!--Nav-->
            <nav id="header" class="fixed w-full z-30 top-0 text-white">
              <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                <div class="pl-4 flex items-center">
                    <div class="  justify-between mx-auto p-4">
                        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{asset('images/scribify.png')}}" alt="" class="w-8 ">
                                   <span class="self-center text-2xl font-mono whitespace-nowrap text-white  dark:text-white">SCRIBIFY</span>
                        </a>
                    </div>
                </div>

                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                  <ul class="list-reset lg:flex justify-end flex-1 items-center">



                  </ul>
                  @if (Route::has('login'))
                  <div class="sm:fixed sm:top-0 sm:right-0 p-4 text-right ">
                      @auth
                          <a href="{{ url('/dashboard') }}" >                  <button
                            id="navAction"
                            class="mx-auto  lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                          >
                          Dashboard
                          </button></a>
                      @else
                          <a href="{{ route('login') }}"> <button
                            id="navAction"
                            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                          >
                          Log in
                          </button></a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" ><button
                                id="navAction"
                                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
                              >
                              Register
                              </button></a>
                          @endif
                      @endauth
                  </div>
              @endif


                </div>
              </div>
              <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
            </nav>
            {{-- <div id="app"></div> --}}
            <div id="wrapper">
                <section id="content">
                 <!--  smooth scrolling biz goes in here -->
                 <div class="heading" aria-hidden="true">
                  <p>smooooth</p>
                  <div class="text-container">
                   <p>scrolling</p>
                   <p data-speed="0.95">scrolling</p>
                   <p data-speed="0.9">scrolling</p>
                   <p data-speed="0.85">scrolling</p>
                   <p data-speed="0.8">scrolling</p>
                   <p data-speed="0.75">scrolling</p>
                   <p data-speed="0.7">scrolling</p>
                  </div>
                 </div>

                 <section class="image-grid container">
                  <div class="image_cont" data-speed="1">
                   <img data-speed="auto" src="https://images.unsplash.com/photo-1556856425-366d6618905d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG5lb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60" alt="">
                  </div>
                  <div class="image_cont" data-speed="1.7">
                   <img data-speed="auto" src="https://images.unsplash.com/photo-1520271348391-049dd132bb7c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="">
                  </div>
                  <div class="image_cont" data-speed="1.5">
                   <img data-speed="auto" src="https://images.unsplash.com/photo-1609166214994-502d326bafee?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="">
                  </div>
                 </section>

                 <section class="title container flow--lg">
                  <h1><span class="eyebrow" aria-hidden="true">with </span>GSAP scrollsmoother</h1>
                  <p>Seamlessly integrated with GSAP and ScrollTrigger. Leveraging native scrolling - no "fake" scrollbars or event hijacking.</p>
                 </section>

                 <section class="bars container">

                  <div class="bars-text">
                   <div class="flow content">
                    <h2>Speed Control</h2>
                    <p>Animate elements along at different speeds, slow them down or make them whizz past.</p>
                   </div>

                  </div>

                  <div class="bars-cont">
                   <div class="bar" data-speed="0.8">
                    <p>0.8</p>
                   </div>

                   <div class="bar" data-speed="0.9">
                    <p>0.9</p>
                   </div>

                   <div class="bar" data-speed="1">
                    <p>1</p>
                   </div>

                   <div class="bar" data-speed="1.1">
                    <p>1.1</p>
                   </div>

                   <div class="bar" data-speed="1.2">
                    <p>1.2</p>
                   </div>
                  </div>

                 </section>

                 <section class="v-center">
                  <div class="parallax-slab">
                   <img data-speed="auto" src="https://assets.codepen.io/756881/smoothscroller-1.jpg" alt="">
                  </div>
                 </section>

                 <section class="staggered container">

                  <div class="staggered_text">
                   <div class="flow content">
                    <h2>Add some lag (the good kind!)</h2>
                    <p>loosen the connection to the scroll to give a feeling of 'follow through.'</p>
                   </div>

                  </div>

                  <div class="staggered_demo">
                   <h3 id="split-stagger">stagger...</h3>
                  </div>

                 </section>

                 <section class="parallax-images container">
                  <div class="parallax-text">
                   <div class="flow content">
                    <h2>Easy parallax image effects</h2>
                    <p>Pop your images in a container with overflow hidden, size them a little larger than the container and set data-speed to auto. GSAP does the rest.</p>
                   </div>
                  </div>

                  <div class="image_cont">
                   <img data-speed="auto" src="https://assets.codepen.io/756881/neon3.jpg" alt="">
                  </div>
                  <div class="image_cont">
                   <img data-speed="auto" src="https://assets.codepen.io/756881/neon2.jpg" alt="">
                  </div>
                 </section>

                 <section class="spacer"></section>
                </section>
               </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
              var scrollpos = window.scrollY;
              var header = document.getElementById("header");
              var navcontent = document.getElementById("nav-content");
              var navaction = document.getElementById("navAction");
              var brandname = document.getElementById("brandname");
              var toToggle = document.querySelectorAll(".toggleColour");

              document.addEventListener("scroll", function () {
                /*Apply classes for slide in bar*/
                scrollpos = window.scrollY;

                if (scrollpos > 10) {
                  header.classList.add("bg-white");
                  navaction.classList.remove("bg-white");
                  navaction.classList.add("gradient");
                  navaction.classList.remove("text-gray-800");
                  navaction.classList.add("text-white");
                  //Use to switch toggleColour colours
                  for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                  }
                  header.classList.add("shadow");
                  navcontent.classList.remove("bg-gray-100");
                  navcontent.classList.add("bg-white");
                } else {
                  header.classList.remove("bg-white");
                  navaction.classList.remove("gradient");
                  navaction.classList.add("bg-white");
                  navaction.classList.remove("text-white");
                  navaction.classList.add("text-gray-800");
                  //Use to switch toggleColour colours
                  for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                  }

                  header.classList.remove("shadow");
                  navcontent.classList.remove("bg-white");
                  navcontent.classList.add("bg-gray-100");
                }
              });
            </script>

<script>
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

// create the smooth scroller FIRST!
const smoother = ScrollSmoother.create({
 wrapper: "#wrapper",
 content: "#content",
 smooth: 1,
 normalizeScroll: true, // prevents address bar from showing/hiding on most devices, solves various other browser inconsistencies
 ignoreMobileResize: true, // skips ScrollTrigger.refresh() on mobile resizes from address bar showing/hiding
 effects: true,
 preventDefault: true
});

gsap.set(".heading", {
 yPercent: -150,
 opacity: 1
});

let tl = gsap.timeline();
let mySplitText = new SplitText("#split-stagger", { type: "words,chars" });
let chars = mySplitText.chars;

chars.forEach((char, i) => {
 smoother.effects(char, { speed: 1, lag: (i + 1) * 0.1 });
});

</script>






    </body>
</html>
