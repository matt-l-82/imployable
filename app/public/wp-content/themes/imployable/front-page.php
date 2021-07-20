<?php get_header(); ?>

<div class="hero">
    <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
    <!-- 
    - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
    WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
    <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video>

<main data-barba="container" data-barba-namespace="home">
    <section id="app" class="section-custom">
        <div class="text-content text-center">
            <h1>App</h1>
            <p>Bacon ipsum dolor amet turducken beef ground round brisket.<br /> Landjaeger buffalo doner bresaola pork chop frankfurter swine shank ham hock.</p>
        </div>
        <div class="cta">
            <button class="btn"><a href="http://starter-theme.local/app/">Explore App</a></button>
        </div>
    </section>


    <section id="connect" class="section-custom">
        <div class="text-content text-center">
            <h1>Connect</h1>
            <p>Bacon ipsum dolor amet turducken beef ground round brisket.<br /> Landjaeger buffalo doner bresaola pork chop frankfurter swine shank ham hock.</p>
        </div>
        <div class="cta">
            <button class="btn"><a href="http://starter-theme.local/connect/">Explore Connect</a></button>
        </div>
    </section>


    <section id="coach" class="section-custom">
        <div class="text-content text-center">
            <h1>Coach</h1>
            <p>Bacon ipsum dolor amet turducken beef ground round brisket.<br /> Landjaeger buffalo doner bresaola pork chop frankfurter swine shank ham hock.</p>
        </div>
        <div class="cta">
            <button class="btn"><a href="http://starter-theme.local/coach/">Explore Coach</a></button>
        </div>
    </section>


    <section id="cohort" class="section-custom">
        <div class="text-content text-center">
            <h1>Cohort</h1>
            <p>Bacon ipsum dolor amet turducken beef ground round brisket.<br /> Landjaeger buffalo doner bresaola pork chop frankfurter swine shank ham hock.</p>
        </div>
        <div class="cta">
            <button class="btn"><a href="http://starter-theme.local/cohort/">Explore Cohort</a></button>
        </div>
    </section>
</main>              

<?php get_footer(); ?>