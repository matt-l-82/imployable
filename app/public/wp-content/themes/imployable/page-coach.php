<?php get_header(); ?>

<main data-barba="container" data-barba-namespace="app">
    
   <div class="coach">
       <div class="container m-auto overflow-hidden">
           <div class="row mt-5">
               <div class="col-xl-4">
                    <div class="coach-text-content">
                        <h2>imployable | coach</h2>
                        <p class="lead coach-copy">
                            Empowering individuals,
                            organisations and government
                            departments to boost employability,
                            increase skills and access
                            intelligence to make informed
                            decisions                        
                        </p>
                        <div class="slider-btns">
                            <button id="prevBtn"></button>
                            <button id="nextBtn"></button>
                        </div>
                    </div>
               </div>

               <div class="col-xl-8">
                    <div class="carousel-container">
                        <div class="carousel-slide">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/coach-slide-1.jpg; ?>" alt="app feature image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/coach-slide-2.jpg; ?>" alt="app feature image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/coach-slide-1.jpg; ?>" alt="app feature image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/coach-slide-2.jpg; ?>" alt="app feature image">
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </div>
</main>

<script type="text/javascript">

    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselImages = document.querySelectorAll('.carousel-slide img');

    //BUTTONS
    const prevBtn = document.querySelector('#prevBtn');
    const nextBtn = document.querySelector('#nextBtn');

    //COUNTER
    let counter = 1;
    const size = carouselImages[0].clientWidth;

    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px )';

    //BUTTON LISTENERS
    nextBtn.addEventListener('click', ()=> {
        carouselSlide.style.transition = 'transform 0.4s ease-in-out';
        counter++;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px )';
    });

    prevBtn.addEventListener('click', ()=> {
        carouselSlide.style.transition = 'transform 0.4s ease-in-out';
        counter--;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px )';
    });

</script>


<?php get_footer(); ?>