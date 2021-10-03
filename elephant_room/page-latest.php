<?php get_header(); ?>

<div class="latest">
    <h1>News</h1>
<?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                );

                $the_query = new WP_Query( $args ); ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 


                           <article class="article-content" id="<?php echo $post->post_name; ?>">
                                <?php the_content() ?>
                                <div class="tags">
                                    <p>In this article:</p>
                                        <p>  
                                            <?php 
                                                $posttags = get_the_tags();
                                                if ($posttags) {
                                                $taglist = "";
                                                foreach($posttags as $tag) {
                                                    $taglist .=  $tag->name . ', '; 
                                                }
                                                echo rtrim($taglist, ", ");
                                            }
                                            ?>
                                        </p>
                                    </div>


                                    <div class="a2a_kit a2a_default_style share" data-a2a-url="<?php echo the_permalink() ?>" data-a2a-title="<?php echo the_title() ?>">
                                    <p>Share:</p>
                                        <div class="share-wrapper">
                                            <a class="a2a_button_linkedin">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                            <a class="a2a_button_facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <!-- <a href="https://www.instagram.com/elephantroomuk/" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a> -->
                                            <a class="a2a_button_twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                <!-- <hr> -->
                             </article>
                        <?php endwhile;  ?>
                    <?php endif;
                wp_reset_postdata();
                ?>
</div>

<?php get_footer(); ?>