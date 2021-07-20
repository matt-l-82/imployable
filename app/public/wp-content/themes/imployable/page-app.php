<?php get_header(); ?>


<main data-barba="container" data-barba-namespace="app">
    <div class="app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <h2 class="mb-2">imployable app</h2>
                    <h4 class="mb-5">App feature title</h4>
                    <p class="lead">
                        With no other technology like it the app gives
                        individuals control over every step of their career.
                        The app allows the user to build their digital CV and
                        dentify, map and track their way into a meaningful career.
                    </p>
                </div>

                <div class="col-xl-6 text-center">
                    <div id="slide-wrapper">
                        <div id="slider">
                            <img class="thumbnail active" src="<?php bloginfo('stylesheet_directory'); ?>/images/example-1.jpg; ?>" alt="app feature image">
                            <img class="thumbnail active" src="<?php bloginfo('stylesheet_directory'); ?>/images/example-2.jpg; ?>" alt="app feature image">
                            <img class="thumbnail active" src="<?php bloginfo('stylesheet_directory'); ?>/images/example-3.jpg; ?>" alt="app feature image">
                            <!-- <img class="thumbnail" src="images/example-2.jpg" alt="app feature image">
                            <img class="thumbnail" src="images/example-3.jpg" alt="app feature image">
                            <img class="thumbnail" src="images/example-1.jpg" alt="app feature image"> -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="marvel-device note8">
                        <div class="inner"></div>
                            <div class="overflow">
                                <div class="shadow"></div>
                            </div>
                        <div class="speaker"></div>
                        <div class="sensors"></div>
                        <div class="more-sensors"></div>
                        <div class="sleep"></div>
                        <div class="volume"></div>
                        <div class="camera"></div>
                        <div class="screen">
                            <img id="featured" src="<?php bloginfo('stylesheet_directory'); ?>/images/example-3.jpg; ?>" alt="app feature image">
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </div>
</main>

<script type="text/javascript">
    
    let thumbnails = document.getElementsByClassName('thumbnail');
    let activeImages = document.getElementsByClassName('active');

    for(var i = 0; 1 < thumbnails.length; i++) {
        thumbnails[i].addEventListener('mouseover', function() {
            console.log(activeImages)

            if(activeImages.length > 0) {
                activeImages[0].classList.remove('active')
            }

            this.classList.add('active') 
            document.getElementById('featured').src = this.src
        })
    }
</script>


<?php get_footer(); ?>