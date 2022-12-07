<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/466fd0939d.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jssocials.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
<footer class="col-md-12 bg-main pt-3">

    <div class="col-md-10 mx-auto p-5">
        <div class="row ms-0">
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="col-lg-4 col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" class="img-footer" alt="logo">
                    <div class="col-lg-12 col-md-12 text-light">
                        <span class="d-block mt-3">Email: grandoindonesia@gmail.com</span>
                        <span class="d-block mt-3">Telp: 081929292929</span>
                    </div>    
                    <div class="row mt-2">
                        <a class="col-md-2 w-25" href="https://www.facebook.com/Grando.ID" aria-label="facebook"><i class="fab fa-facebook text-light"></i></a>
                        <a class="col-md-2 w-25" href="https://www.instagram.com/grando.id/" aria-label="instagram"><i class="fa-brands fa-instagram text-light"></i></a>   
                        <a class="col-md-2 w-25" href="https://www.youtube.com/channel/UCrcMozI0rLmXdcVAVd0gqvA" aria-label="youtube"><i class="fa-brands fa-youtube text-light"></i></a>
                    </div>
                </div>                           
            </div>

            <div class="col-lg-4 col-md-12 mb-3">
                <h3 class="text-light">Our Dealer</h3>
                <span class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas optio vitae ad! Voluptates sit aliquam minus voluptatum? Maiores unde delectus, illo id vitae cumque facere, totam ab, accusantium impedit quisquam!</span>
            </div>

            <div class="col-lg-4 col-md-12 mb-3">
            <h3 class="text-light">Our Vision</h3>
                <span class="text-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas optio vitae ad! Voluptates sit aliquam minus voluptatum? Maiores unde delectus, illo id vitae cumque facere, totam ab, accusantium impedit quisquam!</span>
            </div>
        </div>
    </div>

    <div class="text-center pb-3">
        <span class="text-light"> Created by Auliyaur Rahman <i class="fa fa-copyright" aria-hidden="true"></i> 2022 <span>
    </div>
</footer>
</html>

<script>
    function toAbout() {
        document.querySelector('#about').scrollIntoView({
            behavior: 'smooth'
        });
    }

    function toContact() {
        document.querySelector('#contact').scrollIntoView({
            behavior: 'smooth'
        });
    }

    $("#share").jsSocials({
        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
    });

    AOS.init();

</script>
