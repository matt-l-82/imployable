// let controller;
// let slideScene;
// let pageScene;
// let detailScene;

// function animateSlides() {
//   //Init Controller
//   controller = new ScrollMagic.Controller();
//   //Select some things
//   const sliders = document.querySelectorAll(".slide");
//   const nav = document.querySelector(".nav-header");
//   //Loop over each sllide
//   sliders.forEach((slide, index, slides) => {
//     const revealImg = slide.querySelector(".reveal-img");
//     const img = slide.querySelector("img");
//     const revealText = slide.querySelectorAll(".reveal-text");
//     //GSAP
//     const slideTl = gsap.timeline({
//       default: { duration: 1, ease: "power2.inOut" },
//     });

//     slideTl.fromTo(revealImg, { x: "0%" }, { x: "100%" });
//     slideTl.fromTo(img, { scale: 1 }, { scale: 1 }, "-=1");
//     slideTl.fromTo(revealText, { x: "0%" }, { x: "100%" }, "-=0.25");

//     // Create scene
//     slideScene = new ScrollMagic.Scene({
//       triggerElement: slide,
//       triggerHook: 0.25,
//       reverse: false,
//     })
//       .setTween(slideTl)
//       // .addIndicators({
//       //     colorStart: 'white',
//       //     colorTrigger: 'white',
//       //     name: 'slide'
//       // })
//       .addTo(controller);
//     // New Animation
//     const pageTl = gsap.timeline();
//     const nextSlide = slides.length - 1 === index ? "end" : slides[index + 1];
//     pageTl.fromTo(nextSlide, { y: "0%" }, { y: "50%" });
//     pageTl.fromTo(slide, { opacity: 1, scale: 1 }, { opacity: 0, scale: 0 });
//     pageTl.fromTo(nextSlide, { y: "50%" }, { y: "0%" });

//     //Create new scene
//     pageScene = new ScrollMagic.Scene({
//       triggerElement: slide,
//       duration: "100%",
//       triggerHook: 0,
//     })
//       // .addIndicators({
//       //     colorStart: 'white',
//       //     colorTrigger: 'white',
//       //     name: 'page',
//       //     indent: 200
//       // })
//       .setPin(slide, { pushFollowers: false })
//       .setTween(pageTl)
//       .addTo(controller);
//   });
// }

////////////////////////////////////////////////

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {
  // wait until window is loaded (images, stylesheets, JS, and links)
  window.onload = function () {
    const mouse = document.querySelector(".cursor");
    const mouseTxt = document.querySelector("span");
    const burger = document.querySelector(".burger");
    const navItem = document.querySelector(".navItem");

    function cursor(e) {
      mouse.style.top = e.pageY + "px";
      mouse.style.left = e.pageX + "px";
    }

    function activeCursor(e) {
      const item = e.target;
      if (
        item.id === "logo" ||
        item.classList.contains("burger") ||
        item.classList.contains("navItem")
      ) {
        mouse.classList.add("nav-active");
      } else {
        mouse.classList.remove("nav-active");
      }
    }

    function navToggle(e) {
      if (!e.target.classList.contains("active")) {
        e.target.classList.add("active");
        gsap.to(".line1", 0.5, { rotate: "45", y: 5, background: "black" });
        gsap.to(".line2", 0.5, { rotate: "-45", y: -5, background: "black" });
        gsap.to(".main-nav a", 1, { color: "white" });
        gsap.to(".main-nav span", 1, { color: "white" });
        gsap.to("#logo", 1, { color: "black" });
        gsap.to(".main-nav", 1, { color: "#0A2232" });
        gsap.to(".nav-bar", 1, { clipPath: "circle(2500px at 100% -10%)" });
        document.body.classList.add("hide");
      } else {
        e.target.classList.remove("active");
        gsap.to(".line1", 0.5, { rotate: "0", y: 0, background: "black" });
        gsap.to(".line2", 0.5, { rotate: "0", y: 0, background: "black" });
        gsap.to(".main-nav a", 1, {
          color: "rgb(rgb(10, 34, 50)",
          transitions: "1s",
        });
        gsap.to(".main-nav span", 1, {
          color: "rgb(93, 224, 118)",
          transitions: "1s",
        });
        gsap.to("#logo", 1, { color: "black" });
        gsap.to(".nav-bar", 1, { clipPath: "circle(50px at 100% -10%)" });
        document.body.classList.remove("hide");
      }
    }
  };
});

console.log("Hello World");
