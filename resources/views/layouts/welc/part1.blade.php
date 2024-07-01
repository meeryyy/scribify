
    <div class="wrapper">
        <div class="intro">
          <h1>hop into one of our thousand of book clubs </h1>
          <p>Where Stories Come Alive</p>
        </div>
        <div class="content">
          <section class="section hero"></section>
          <section class="section gradient-purple"></section>
          <section class="section gradient-blue">
            <div class="test">
          <p>Create your own story </p>

        </div>
          </section>
        </div>
        <div class="image-container">
          <img src="https://uploads-ssl.webflow.com/5cff83ac2044e22cb8cf2f11/5d13364599bb70e3560cc4e5_background-min%203.png" alt="image">
        </div>
      </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/CustomEase.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/SplitText.min.js"></script>
<script>
console.clear();

gsap.registerPlugin(ScrollTrigger);

window.addEventListener("load", () => {
  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".wrapper",
        start: "top top",
        end: "+=150%",
        pin: true,
        scrub: true,
        markers: false
      }
    })
    .to("img", {
      scale: 2,
      z: 250,
      transformOrigin: "center center",
      ease: "power1.inOut"
    })
    .to(
      ".section.hero",
      {
        scale: 1.4,
        transformOrigin: "center center",
        ease: "power1.inOut"
      },
      "<"
    );
});


//darken bg on scroll - jQuery
//cannot figure out how to get the same effect using GSAP,
//if you do, please let me know :D

$(document).ready(function() {
   $.fn.darkenScroll = function() {
    var elem = $( this );
    self = this;

    $(window).on('scroll', function(){
      scroll = $(document).scrollTop();
      offsetTop = elem.offset().top + elem.outerHeight();
      opacity = 1 / offsetTop * scroll;
      if (opacity > 0 && opacity < 1) {
        elem.css({'box-shadow': '10000px 0 0 0 rgba(0,0,0,' + opacity + ') inset'});
      }
    })
  }
  $('.section.hero').darkenScroll();
})
        </script>

