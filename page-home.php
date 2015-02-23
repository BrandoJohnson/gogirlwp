<?php get_header(); ?>
<?php global $woo_options; ?>

    <div id="title-container">
        <h1 class="title col-full"><?php the_title(); ?></h1>
    </div>



    <div id="content" class="page col-full">
        <div class="contentContainer">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


            <div class="contentBlock">

                <div class="hp-contentColumn float-left">
                    <div class="float-left" style="width:170px;"><a href="what-is-gogirl.asp"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/goGirl_prodShot3_hp.png" alt="GoGirl Product" width="170" height="245" border="0" /></a></div>
                    <div class="txtBox_wIMG float-left">
                        <h1><a href="#">Ok, so what's a GoGirl?</a></h1>
                        <p>Simply put, GoGirl is the way to stand up to crowded, disgusting, distant or non-existent bathrooms. It's a female urination device (sometimes called a FUD) that allows you to pee while standing up. It's neat. It's discreet. It's hygienic. <a href="what-is-gogirl.asp">(more)</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="hp-contentColumn float-left">
                    <div class="float-left" style="width:170px;"><a href="who-needs-gogirl.asp"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/hp_pinkRunningShoes.jpg" alt="You'll Love GoGirl" width="170" height="245" border="0" /></a></div>
                    <div class="txtBox_wIMG float-left">
                        <h1><a href="#">Who needs it?</a></h1>
                        <p>If you camp, you'll love GoGirl. If you ski, you'll love GoGirl. If you boat, you'll love GoGirl. If you travel, you'll love GoGirl. If you just want to avoid the germs you find in nasty public toilets, you'll love GoGirl. GoGirl is for active women of all types and ages. <a href="who-needs-gogirl.asp">(Get to know some GoGirls)</a></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div id="main" class="col-left">

            <?php if ( $woo_options[ 'woo_breadcrumbs_show' ] == 'true' ) woo_breadcrumbs(); ?>

            <ul>
                <?php


                $args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );

                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach;
                wp_reset_postdata();?>

            </ul>


        </div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->



<?php get_footer(); ?>