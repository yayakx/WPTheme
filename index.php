<?php get_header();?>

<div class="col-md-12 mx-auto">

    <div class="col-md-12 mx-auto bg-main" id="carousel">
        <div id="carouselId" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner1.webp" class="img-carousel d-block img-fluid d-block mx-auto" alt="First slide">
                </div>

                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner2.webp" class="img-carousel d-block img-fluid d-block mx-auto" alt="Second slide">
                </div>

                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner1.webp" class="img-carousel d-block img-fluid d-block mx-auto" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    

    <div class="col-md-10 mx-auto mt-5 mb-5" id="latest" data-aos="fade-up">
        <h2 class="text-center color-main"><b>Grando Collection</b></h2>    
        <h3 class="text-center mb-5">Our Favorite Product</h3>
        <div class="row justify-content-between">
        <?php 
            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 6,
            );
            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
            global $product;    ?>    
            <div class="card product col-md-4 border-0 mx-auto text-center p-3">
                <div class="card-body ">
                    <div class="col-md">
                        <?php the_post_thumbnail('medium');?>
                    </div>
                    <div class="col-md">
                        <h5 class="card-title"><?php the_title();?></a></h5>
                        <a href="<?php the_permalink();?>" class="mt-2 btn btn-dark bg-main text-light col-md-6 mx-auto no-rounded">Lihat Detail</a>                                                                      
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query();?>   
        </div>     
    </div>

    <div class="bg-dark text-light p-5" id="why_us" data-aos="fade-up">        
        <div class="col-lg-10 col-md-12 mx-auto mt-2 mb-5 row" >    
            <h2 class="text-center mb-5">Why Us?</h2>
            <div class="row ms-0 text-light">
                <div class="card col-md-4 border-0 mx-auto no-bg">                  
                  <div class="card-body text-center">
                    <h1><i class="fa-solid fa-screwdriver-wrench"></i></h1>
                    <h4 class="card-title">Berpengalaman</h4>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, eligendi illum ipsum eum nulla aspernatur eius, nihil ducimus explicabo, ab aliquid nostrum cum quasi corrupti obcaecati exercitationem porro? Excepturi, provident?</p>
                  </div>
                </div>

                <div class="card col-md-4 border-0 mx-auto no-bg">                  
                  <div class="card-body text-center">
                    <h1><i class="fa-solid fa-truck"></i></h1>
                    <h4 class="card-title">Distributor Resmi</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eius laboriosam, exercitationem, similique modi dolore illo pariatur fugiat autem nisi qui in voluptates nesciunt, assumenda sit? Ullam voluptatem consequatur reprehenderit.</p>
                  </div>
                </div>

                <div class="card col-md-4 border-0 mx-auto no-bg">                  
                  <div class="card-body text-center">
                    <h1><i class="fa-solid fa-boxes-stacked"></i></h1>
                    <h4 class="card-title ">Produk Beragam</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dicta quaerat sequi fugit corrupti odio, nostrum veniam reprehenderit. Qui ut reiciendis nisi voluptatem earum voluptatibus nulla voluptates cumque corporis commodi.</p>
                  </div>
                </div>
            </div>
            <div class="row ms-0 text-light mt-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="logo" class="col-lg-4 col-md-12 mb-3 logo-why">
                <p class="col-lg-9 col-md-12">Didirikan pada tahun 2005, Speed Digital Mandiri bangga bisa menjadi pelopor dalam menyediakan teknologi 
                        dan mesin cetak digital terbaru untuk tujuan komersial dan periklanan seperti Indoor Plotter, Outdoor Plotter, Textile Printer, UV Printer, Laser Cuttin, CNC Engraving, DTF, dan sebagainya. <br>Pengetahuan dan keahlian kami yang luas dalam industri ini memungkinkan kami untuk menyediakan berbagai macam produk dan layanan berkualitas dari bahan-bahan pencetakan, suku cadang, solusi pembersihan dan tinta, serta layanan peningkatan mesin.</p>
            </div>
        </div>
    </div>

    <div class="col-md-10 mx-auto mt-5 mb-5" id="product" data-aos="fade-up">
        <h2 class="text-center color-main"><b>Explore Grando Collection</b></h2>   
        <span class="text-center mb-5 d-block">Lihat Berbagai Produk Lengkap Milik Grando Indonesia</span>         
        <div class="row justify-content-between">      

            <?php 
                $args = array(
                'post_type'      => 'product',
                'posts_per_page' => 6,
                'orderby' => 'rand',
                'order' => 'rand',
                ); 
                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();
                global $product;    ?>    
                <div class="card product col-md-4 border-0 mx-auto text-center p-3 mb-3">
                    <div class="card-body ">
                        <div class="col-md">
                            <?php the_post_thumbnail('medium');?>
                        </div>
                        <div class="col-md">
                            <h5 class="card-title"><?php the_title();?></a></h5>
                            <a href="<?php the_permalink();?>" class="mt-2 btn btn-dark bg-main text-light col-md-6 mx-auto no-rounded">Lihat Detail</a>                                                                      
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query();?>   
        </div>               
        <a href="/wordpress/blog" class="btn btn-dark bg-main no-rounded mx-auto col-lg-12 col-md-12 mt-5">See All</a>              
    </div>   

    <div class="bg-light p-5" id="contact" data-aos="fade-up">        
        <div class="col-lg-10 col-md-12 mx-auto mt-2 mb-5 row" data-aos="fade-up">    
            <h2 class="text-center mb-5">Contact Us</h2>
            
            <div class="row ms-0 justify-content-between">
                <div class="card col-lg-3 col-md-12 mt-2 border-primary mx-auto no-bg p-5">                  
                  <div class="card-body text-center">
                  <h1><i class="fab fa-facebook text-primary"></i></h1>
                    <h4 class="card-title">Facebook</h4>
                    <a class="btn btn-lg btn-outline-primary" href="https://www.facebook.com/Grando.ID" aria-label="facebook">Grando.id</a>                    
                  </div>
                </div>

                <div class="card col-lg-3 col-md-12 mt-2 border-danger mx-auto no-bg p-5">                  
                  <div class="card-body text-center">
                  <h1><i class="fa-brands fa-instagram text-danger"></i></h1>
                    <h4 class="card-title">Instagram</h4>
                    <a class="btn btn-lg btn-outline-danger" href="https://www.instagram.com/grando.id/" aria-label="instagram">Grando.id</a>
                  </div>
                </div>

                <div class="card col-lg-3 col-md-12 mt-2 border-danger mx-auto no-bg p-5">                  
                  <div class="card-body text-center">
                    <h1><i class="fa-brands fa-youtube text-danger"></i></h1>
                    <h4 class="card-title ">Youtube</h4>
                    <a class="btn btn-lg btn-outline-danger" href="https://www.youtube.com/channel/UCrcMozI0rLmXdcVAVd0gqvA" aria-label="youtube">Grando Indonesia</a>
                  </div>
                </div>
            
            </div>            
        </div>
    </div>

     

</div>

<div class="bg-dark pt-5 pb-5">
        <div class="row col-md-10 mx-auto">
            <div class="col-md-6" data-aos="fade-up">                
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe title="maps" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=speed%20digital%20mandiri&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up">
                <div class="card border-0">
                    <div class="card-body bg-dark text-light">
                        <h3>Our Office</h3>
                        <p>Ruko Mahkota Palace, Blok A8, Jl. Kenjeran No.633, Dukuh Sutorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60134.</p>
                        <a href="https://wa.me/+6281553019198" class="btn btn-success"><i class="fa-brands fa-whatsapp"> Call Us</i></a>
                    </div>
                    <div class="card-body bg-dark text-light"  id="about">
                    <h3>About Us</h3>
                    <p>Didirikan pada tahun 2005, Speed Digital Mandiri bangga bisa menjadi pelopor dalam menyediakan teknologi 
                        dan mesin cetak digital terbaru untuk tujuan komersial dan periklanan seperti Indoor Plotter, Outdoor Plotter, Textile Printer, UV Printer, Laser Cuttin, CNC Engraving, DTF, dan sebagainya.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>



<?php get_footer();?>