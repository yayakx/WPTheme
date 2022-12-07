<?php get_header();?>

<div class="col-md-10 mx-auto mt-5 mb-5">

    <div class="row ms-0">
        <div class="col-md-12">
            <article <?php post_class('custom-blog-item');?>>
            <div class="blog-item-inner">
                <h1 itemprop="name" class="bi-title entry-title">
                    <?php the_title();?>
                </h1>
                <div itemprop="dateCreated" class="entry-date updated">
                    <?php the_time(get_option('date_format'));?>
                </div>
                <div class="col-md mt-3 mb-3 mx-auto text-center">
                    <?php if (has_post_thumbnail()) {?>
                    <?php the_post_thumbnail('medium');?>
                </div>
            </div>
            <?php }?>           

            <div class="content-below-image">
                <?php the_content()?>
            </div>

            <div>
                <span>Tags: <span><?php the_tags(''); ?>
            </div>
            </article>

            <div id="share" class="share"></div>

            <div>
            <?php $comments_args = array(
                    // change the title of send button 
                    'label_submit'=>'Submit',
                    // change the title of the reply section
                    'title_reply'=>'Add a comment',
                    // remove "Text or HTML to be displayed after the set of comment fields"
                    'comment_form_top' => 'ds',
                    'comment_notes_before' => '',
                    'comment_notes_after' => '',
                    // redefine your own textarea (the comment body)
                    'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Your Comment* " aria-required="true"></textarea></p>',
                    'fields' => apply_filters( 'comment_form_default_fields', array(

                    'author' =>
                    '<p class="comment-form-author">'  .
                    '<input id="author" class="blog-form-input" placeholder="Your Name* " name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' /></p>',

                    'email' =>
                    '<p class="comment-form-email">'.
                    '<input id="email" class="blog-form-input" placeholder="Your Email Address* " name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' /></p>',

                    'url' =>
                    '<p class="comment-form-url">'.
                    '<input id="url" class="blog-form-input" placeholder="Your Website URL" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30" /></p>'
                    )
                ),
                );

                comment_form($comments_args);?>
            </div>


        </div>

    </div>
</div>
<?php get_footer();?>