<?php get_header();?>

<div class="col-md-10 mx-auto mt-5 mb-5">

    <div class="row ms-0">
        <div class="col-md-12">
            <article <?php post_class('custom-blog-item');?>>
            <div class="blog-item-inner">
                <h1 itemprop="name" class="bi-title entry-title">
                    <?php the_title();?>
                </h1>                        
            </div>                       

            <div class="content-below-image">
                <?php the_content()?>
            </div>
            </article>            

        </div>        

    </div>
</div>
<?php get_footer();?>