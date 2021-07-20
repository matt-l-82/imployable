<?php get_header(); ?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <?php echo do_shortcode('[ninja_form id=1]'); ?>
            </div>
            <div class="col-xl-6 d-flex flex-column justify-content-start">
                <h1 class="mb-5 mt-5">CONTACT THE TEAM</h1>
                <ul>
                    <li><a href="mailto:">hello@imployable.co.uk</a></li>
                    <li><a href="callto:">01280 999 111</a></li>
                </ul>
                <h1 class="mb-5 mt-5">LOCATION</h1>
                <p>Airport Business Centre<br>
                   Plymouth,<br>
                   PL6 7PP,<br>
                   United Kingdom</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

